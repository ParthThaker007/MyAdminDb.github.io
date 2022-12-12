<?php 
	
	include_once('configure.php');
	

	if(isset($_POST['insert']))
	{
		$name=$_POST['name'];
		$emailid=$_POST['emailid'];
		$mno=$_POST['mno'];
		$sql = "INSERT INTO customers (name, emailid, mno)
		VALUES ('$name', '$emailid', '$mno')";

		if ($conn->query($sql) === TRUE) {
		
		  header("location:index.php");
		    echo "<script> alert('record inserted');</script>";	
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
  <form action="#" method="post">
  	<div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="emailid" placeholder="Enter email" name="emailid">
    </div>
    <div class="mb-3">
      <label for="pwd">Mno:</label>
      <input type="text" class="form-control" id="mno" placeholder="Enter mobile" name="mno">
    </div>
    
    <button type="submit" class="btn btn-primary" name="insert">Submit</button>
  </form>
</div>

</body>
</html>
