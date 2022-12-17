<?php 
	
	include_once('configure.php');
	

	if(isset($_POST['update']))
	{
		  $cid=$_REQUEST['id'];


		$name=$_POST['name'];
		$emailid=$_POST['emailid'];
		$mno=$_POST['mno'];
		$sql = "UPDATE customers SET name='$name', emailid='$emailid', mno='$mno' WHERE cid='$cid'";
		

		if ($conn->query($sql) === TRUE) {
		
		 echo "<meta http-equiv='refresh' content='0;url=customerre.php'>";
		    echo "<script> alert('updated  inserted');</script>";	
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;


		}

	}




 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>


<div class="container mt-3 bg-dark text-light" id="customer">
  <h2>Customer Form </h2>
  <?php 
 	  $cid=$_REQUEST['id'];
  	$sql = "SELECT name,emailid,mno FROM customers WHERE cid='$cid'";
		$result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 columns 


        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {

 ?>
  <form action="#" method="post">
  	<div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" 
      value="<?php echo $row['name']; ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="emailid" placeholder="Enter email" name="emailid" 
      value="<?php echo $row['emailid']; ?>">
    </div>
    <div class="mb-3">
      <label for="pwd">Mno:</label>
      <input type="text" class="form-control" id="mno" placeholder="Enter mobile" name="mno"
      value="<?php echo $row['mno']; ?>">
    </div>
    
    <button type="submit" class="btn btn-primary" name="update">Submit</button>
  </form>
</div>

<?php 
	}//end of while 
}//end of if
 ?>

</body>
</html>
