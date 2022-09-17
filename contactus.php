<?php
   session_start();
   if (!isset($_SESSION['name'])) {
      header("location:index.php");
   }

 ?>
<?php
   if (isset($_POST['submit'])) {

       include 'config.php';
       $gender=$_POST['gender'];
       $country=$_POST['country'];
       $name=$_POST['name'];
       $email=$_POST['email'];
       $mobile=$_POST['mobile'];
       $message=$_POST['message'];
       $image=$_FILES['image'];
       $image_name=$image['name'];
       $image_tmp_name=$image['tmp_name'];
       $loc="image/";
       move_uploaded_file($image_tmp_name,$loc.$image_name);
       $ins="INSERT INTO contact( `name`, `email`, `mobile`,`gender`,`country`,`image`, `message`) VALUES ('$name','$email','$mobile','$gender','$country','$image_name','$message')";
       $result=mysqli_query($conn,$ins) or die("query failed".mysqli_error());
 if ($result) {
   header("location:contact_table.php");

 }
       else {

           echo "Not Inserted";
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
   <?php

      include 'header.php';
    ?>


      <div class="container col-sm-3 text-dark">

      <form class="form-group" action="contactus.php" method="post" enctype="multipart/form-data">
     <div class="form-floating mt-3 mb-3">
       <input class="form-control" type="text" name="name" required>
       <label for="name"><b>Name</b></label>

     </div>

          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="text" name="email" required>
            <label for="name"><b>Email</b></label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control" type="text" name="mobile" required>
            <label for="name"><b>Mobile No</b></label>
          </div>
          <div class="form-floating">

            <input class="form-control"type="file" name="image" value="" required>
              <label for="name"><b>Image</b></label>
          </div>
          <div class="pt-3">
               <label for="name"><b>Gender</b></label>
             <input type="radio" name="gender" value="Male" required>Male
             <input   type="radio" name="gender" value="Female" required>Female
          </div>
          <div class="pt-3" required>
               <select class="form-control" name="country" required>
                 <option value="" required><b>Select your country</b> </option>
                  <option value="Bangladesh"required>Bangladesh</option>
                   <option value="USA"required>USA</option>
               </select>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control h-300"style="height:200px" type="text" name="message" required>
            <label for="name"><b>Message</b></label>
          </div>
          <div class="mt-3 mb-3">
          <input class="bg-success text-white form-control"type="submit" name="submit" value="SUBMIT">

          </div>


        </form>

      </div>
 <?php
  include 'fotter.html';
  ?>

  </body>
</html>
