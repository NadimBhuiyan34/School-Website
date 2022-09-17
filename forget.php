<?php
  if (isset($_REQUEST['submit'])) {
    include 'config.php';
     $email=$_REQUEST['email'];
     $qur="SELECT * FROM users WHERE email='$email'";
     $result=mysqli_query($conn,$qur);
     $count=mysqli_num_rows($result);

     if ($count>0) {
       while ($row=mysqli_fetch_assoc($result)) {
         $password=$row['password'];
         $subject="password recovery";
         $body="your password is:$password" ;
         $headers="From:nadim@gmail.com";
         if (mail($email,$subject,$body,$headers)) {
            echo "success";
         }
         else {
            echo "not success";
         }
       }
     }
     else {
       echo "no data";
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
    <div class="col-sm-1">
       <form class="" action="forget.php" method="post">
          <input class="form-control"type="text" name="email" value="">
          <input type="submit" name="submit" value="SEND">
       </form>
    </div>
  </body>
</html>
