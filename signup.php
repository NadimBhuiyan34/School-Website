 
<?php
if(isset($_POST['submit'])){
   include 'config.php';
  $name=mysqli_real_escape_string($conn,$_REQUEST['name']);
  $email=mysqli_real_escape_string($conn,$_REQUEST['email']);
  $password=mysqli_real_escape_string($conn,md5($_REQUEST['password'])) ;


  $qur= "INSERT INTO users ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$password')";
  $result=mysqli_query($conn,$qur);
  if ($result) {
    header("location:signup.php?success");
  }
  else {
    echo "Not inserted";
  }
}
if (isset($_REQUEST['success'])) {
   include 'alert.php';
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


    <div class="container col-sm-3 pt-3 pb-5 mt-5 bg-info text-dark ">

        <img src="image/av1.png" class="rounded-circle mx-auto d-block col-sm-5">
      <form action="signup.php" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3 mt-3">
  <input type="text" class="form-control" placeholder="Enter email" name="name">
  <label for="email">User Name</label>
</div>

<div class="form-floating mt-3 mb-3">
  <input type="text" class="form-control"  placeholder="Enter password" name="email">
  <label for="pwd">Email</label>
</div>


       <div class="form-floating mt-3 mb-3">
         <input type="text" class="form-control" placeholder="Enter password" name="password">
         <label for="pwd">Password</label>
       </div>

    <br>
       <div class="form-group">

       <button type="submit" class="btn btn-success form-control" name="submit" >REGISTER</button>
       </div>
        <a href="index.php" class="text-white float-end"><b>Login</b> </a>
     </form>
      </div>

  </body>
</html>
