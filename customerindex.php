<?php
include_once 'configure.php';

$sql = "SELECT cid,name,emailid,mno FROM customers";
$result = $conn->query($sql);//to execute sql query  it return 3 rows & 4 columns 


$conn->close();
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

<div class="container mt-3">

  <h2>Customer CURD Operations </h2>
  <a href="insert.php" class="btn btn-primary mt-3 mb-3">Add new customer</a>
 <table class="table table-bordered table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mno</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['cid']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['emailid']."</td>";
            echo "<td>".$row['mno']."</td>";
            echo "<td>"."<a href='edit.php?id=".$row['cid']."'>Edit</a></td>";
            echo "<td>"."<a href='delete.php?id=".$row['cid']."'>Delete</a></td>";
          }
        } else {
          echo "0 results";
        }


       ?>
     
    </tbody>
  </table>
</div>

</body>
</html>
