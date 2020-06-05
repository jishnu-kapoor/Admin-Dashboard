<?php 

include "server.php";

?>


<?php

$sno=$_GET['todelete'];

// var_dump($id);

$sql= "DELETE FROM catalogue WHERE sno= '$sno' ";



$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
// var_dump($sql);

 if(isset($result))
 {
 	
 	echo nl2br("\r\n Record deleted successfully") ;
      header("Refresh:2; url=catalogue.php");
 	
 	// redirect


 }
 else
 {
 	echo "No value found"; 
 }

?>
