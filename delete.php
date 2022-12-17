<?php 

include_once 'configure.php';
$id=$_REQUEST['id'];
	// sql to delete a record
$sql = "DELETE FROM customers WHERE cid='$id'";

if ($conn->query($sql) === TRUE) {

 header("location:index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}



 ?>