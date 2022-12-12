<?php 

include_once 'configure.php';
$id=$_REQUEST['id'];
	// sql to delete a record
$sql = "DELETE FROM sub_cat WHERE id='$id'";

if ($conn->query($sql) === TRUE) {

 header("location:list_subcategory.php");
} else {
  echo "Error deleting record: " . $conn->error;
}



 ?>