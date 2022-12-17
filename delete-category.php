<?php 

include_once 'configure.php';
$id=$_REQUEST['id'];
	// sql to delete a record
$sql = "DELETE FROM category WHERE id='$id'";

if ($conn->query($sql) === TRUE) {

 header("location:addcatgory.php");
} else {
  echo "Error deleting record: " . $conn->error;
}



 ?>