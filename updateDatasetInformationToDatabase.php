
<?php 

include "server.php";

?>

<?php

$sno=$_GET['toupdate'];

$company=$_POST['company'];

$description=$_POST['description'];

$link=$_POST['link'];

$status=$_POST['status'];
 var_dump($status);

 $approved="approved";
 $pending='pending';


// if($status!=$approved||$pending)
// {

// 		echo nl2br("\r\n Check value entered in edit status. Hit the back button on your browser and refill.") ;

// 		echo nl2br("\r\n Other records updated successfully");
// 	}

if($status===$approved||$pending)

{
	

$sql= "UPDATE catalogue 
       
       SET 
       company='$company',
       description='$description',
       link='$link',
       status='$status'
     
       
       

       WHERE sno= $sno";

 $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));



 	
 	echo nl2br("\r\n All the Records updated successfully in the database. You will now be redirected to the catalogue.") ;
      header("Refresh:5; url=catalogue.php");

  }

	



?>
