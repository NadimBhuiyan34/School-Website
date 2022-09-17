
<?php

if (isset($_REQUEST['id'])) {
  include 'config.php';

  $con_id=$_REQUEST['id'];
  $qur="SELECT * FROM contact WHERE id=$con_id";
  $result=mysqli_query($conn,$qur);
  if ($result) {
    while ($row=mysqli_fetch_assoc($result)) {
      ?>
     <div class="container col-sm-3 text-dark">
     <form class="form-group" action="update.php?id=<?php echo $con_id?>" method="post" enctype="multipart/form-data">
     <div class="form-floating mt-3 mb-3">
     <input class="form-control" type="text" name="name"value="<?php echo $row['name']; ?>">
     <label><b>Name</b></label>
     </div>

          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>">
            <label><b>Email</b></label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="text" name="mobile"value="<?php echo $row['mobile']; ?>">
            <label><b>Mobile No</b></label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="file" name="image"value="<?php echo $row['image'];?>">
            <label><b>Image</b></label>
          </div>

          <div class="form-floating mt-3 mb-3">
            <input class="form-control h-300"style="height:200px" type="text" name="message"value="<?php echo $row['message']; ?>">
            <label><b>Message</b></label>
          </div>
          <div class="mt-3 mb-3">
          <input class="bg-success text-white form-control"type="submit" name="update" value="UPDATE">

          </div>


        </form>

      </div>
      <?php
    }
  }
}
if (isset($_REQUEST['update'])) {
  include 'config.php';
  $con_id=$_REQUEST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $message=$_POST['message'];
  $image=$_FILES['image'];
  $image_name=$image['name'];
  $image_tmp_name=$image['tmp_name'];

  $loc="image/";
  if (move_uploaded_file($image_tmp_name,$loc.$image_name)) {
    $ins="UPDATE contact SET `name`='$name',`email`='$email',`mobile`='$mobile',`image`='$image_name',`message`='$message' WHERE id=$con_id";
    $result1=mysqli_query($conn,$ins) or die("query failed");
  }
  else {
    $ins="UPDATE contact SET `name`='$name',`email`='$email',`mobile`='$mobile',`message`='$message' WHERE id=$con_id";
    $result1=mysqli_query($conn,$ins) or die("query failed");
  }

  if ($result1) {
    header("location:contact_table.php");

  }



    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>



 <?php   include 'fotter.html'; ?>




  </body>
</html>
