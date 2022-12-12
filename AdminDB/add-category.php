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
		$cat_name=$_POST['cat_name'];
		$cat_des=$_POST['cat_des'];
		$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["cat_img"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["cat_img"]["tmp_name"]);

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
if ($_FILES["cat_img"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType !="webp" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["cat_img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["cat_img"]["name"]));

    //insert immmage into databse 
  
  // Get all the submitted data from the form
  $sql = "INSERT INTO category (cat_name, cat_des, cat_img)
		VALUES ('$cat_name', '$cat_des', '$target_file')";

		if ($conn->query($sql) === TRUE) {
		
		  header("location:list-category.php");
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
  <h2>Add Category  </h2>
  <form action="#" method="post"  enctype="multipart/form-data">
  	<div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="cat_name" placeholder="Enter name" name="cat_name">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Description :</label>
      <input type="text" class="form-control" id="cat_des" placeholder="Enter Description" name="cat_des">
    </div>
    <div class="mb-3">
      <label for="image">Image :</label>
      <input type="file" class="form-control" id="cat_img"  name="cat_img">
    </div>
     
    
    
    <button type="submit" class="btn btn-primary" name="insert">Submit</button>
  </form>
</div>
</div>
</body>
</html>