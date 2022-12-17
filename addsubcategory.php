<?php 
	
	include_once('configure.php');
	

	if(isset($_POST['insert']))
	{
		
		
	   $cat_id=$_POST['category'];
		$subcat_name=$_POST['subcat_name'];
		$sub_cat_des=$_POST['sub_cat_des'];
		$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["sub_cat_img"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["sub_cat_img"]["tmp_name"]);

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
if ($_FILES["sub_cat_img"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["sub_cat_img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["sub_cat_img"]["name"]));

    //insert immmage into databse 
  
  // Get all the submitted data from the form
  $sql = "INSERT INTO sub_cat (cat_id,subcat_name, sub_cat_des, sub_cat_img)
		VALUES ('$cat_id','$subcat_name', '$sub_cat_des', '$target_file')";

		if ($conn->query($sql) === TRUE) {
		
		  echo "<meta http-equiv='refresh' content='0;url=list_subcategory.php'>";
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
  <h2>Add Sub-Category  </h2>
  <form action="#" method="post"  enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="name">Category :</label>
      <select name="category" class="form-select">
        <option>select category </option>
        <?php 

          $sql = "SELECT id,cat_name FROM category";
          $result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 co
           if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo"<option value='".$row['id']."'>".$row['cat_name']."</option>";
            }
          }


         ?>
        
      </select>
    </div>
  	<div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="subcat_name" placeholder="Enter name" name="subcat_name">
    </div>
    <div class="mb-3 mt-3">
      <label for="subcat_descr">Description :</label>
      <input type="text" class="form-control" id="sub_cat_des" placeholder="Enter Description" name="sub_cat_des">
    </div>
    <div class="mb-3">
      <label for="subcat_image">Image :</label>
      <input type="file" class="form-control" id="sub_cat_img"  name="sub_cat_img">
    </div>
     
    
    
    <button type="submit" class="btn btn-primary" name="insert">Submit</button>
  </form>
</div>
</div>
</body>
</html> 