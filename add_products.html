<?php 
	
	include_once('configure.php');
	

	if(isset($_POST['insert']))
	{
		
		//$cat_image=$_POST['cat_image'];

	/*	$sql = "INSERT INTO customer (name, emailid, mno)
		VALUES ('$name', '$emailid', '$mno')";

		if ($conn->query($sql) === TRUE) {
		
		  header("location:index.php");
		    echo "<script> alert('record inserted');</script>";	
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;


		}*/
        $sub_cat_id=$_POST['sub_cat'];
        $pname=$_POST['pname'];
        $pdes=$_POST['pdes'];
		    $target_dir = "uploads/";
        $pbrand=$_POST['pbrand'];
        $pprice=$_POST['pprice'];
        $pcolor=$_POST['pcolor'];
        $psize=$_POST['psize'];
        $prating=$_POST['prating'];

$target_file = $target_dir . basename($_FILES["pimg"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["pimg"]["tmp_name"]);

  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  // Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["pimg"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp " ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["pimg"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["pimg"]["name"]));

    //insert immmage into databse 
  
  // Get all the submitted data from the form
  $sql = "INSERT INTO products (sub_cat_id,pname, pdes, pimg,pbrand,pprice,pcolor,psize,prating)
		VALUES ('$sub_cat_id','$pname', '$pdes', '$target_file','$pbrand','$pprice','$pcolor','$psize','$prating')";

		if ($conn->query($sql) === TRUE) {
		
      echo "<meta http-equiv='refresh' content='0;url=product-list.php'>";
		    echo "<script> alert('record inserted');</script>";	
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
    else {
    echo "Sorry, there was an error uploading your file.";
  }


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
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

 

<div class="main">

<div class="container mt-3 bg-dark text-light" id="customer">
  <h2>Add Products  </h2>
  <form action="#" method="post"  enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="name">Sub-Category :</label>
      <select name="sub_cat" class="form-select">
        <option>select sub-category </option>

        <?php 

          $sql = "SELECT id,subcat_name FROM sub_cat";
          $result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 co
           if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo"<option value='".$row['id']."'>".$row['subcat_name']."</option>";
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
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  

<div class="main">

<div class="container mt-3 bg-dark text-light" id="customer">
  <h2>Add Products  </h2>
  </select>
    </div>
  <form action="#" method="post"  enctype="multipart/form-data">
    <br>
    <br>

  	<div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="pnae" placeholder="Enter name" name="pname">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Description :</label>
      <input type="text" class="form-control" id="pdes" placeholder="Enter Description" name="pdes">
    </div>
    <div class="mb-3">
      <label for="image">Image :</label>
      <input type="file" class="form-control" id="pimg"  name="pimg">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Brand :</label>
      <input type="text" class="form-control" id="pbrand" placeholder="Enter Description" name="pbrand">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Price:</label>
      <input type="text" class="form-control" id="pprice" placeholder="Enter Description" name="pprice">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Color:</label>
      <input type="text" class="form-control" id="pcolor" placeholder="Enter Description" name="pcolor">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Size :</label>
      <input type="text" class="form-control" id="psize" placeholder="Enter Description" name="psize">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Ratings :</label>
      <input type="text" class="form-control" id="prating" placeholder="Enter Description" name="prating">
    </div>

     
    
    
    <button type="submit" class="btn btn-primary" name="insert">Submit</button>
  </form>
</div>

</body>
</html>