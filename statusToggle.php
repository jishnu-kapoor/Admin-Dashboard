<?php
include 'server.php';


$urlsno= $_GET['toedit'];

$sql="SELECT * FROM catalogue
WHERE sno = $urlsno";

$result=mysqli_query($conn,$sql);


	if ($result['status']=='pending')
	{
		$sql=  "UPDATE catalogue 
       			SET status='approved',
       			WHERE sno= $urlsno";


       			$result=mysqli_query($conn,$sql);

    }
else if($result['status']=='approved')
{
	$sql=  "UPDATE catalogue 
       			SET status='pending',
       			WHERE sno= $urlsno";

       			$result=mysqli_query($conn,$sql);
}


 	echo nl2br("\r\n Status Changed") ;
      header("Refresh:2; url=catalogue.php");
?>


