
<?php 

include "server.php";

?>

<?php


$company=$_POST['company'];

$description=$_POST['description'];

$link=$_POST['link'];




$sql= "INSERT INTO catalogue (`company`,`description`,`link`)
       
       VALUES ('$company','$description','$link')" ;

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));



 	
 	echo nl2br("\r\n Record inserted successfully") ;
      header("Refresh:2; url=catalogue.php");

?>
