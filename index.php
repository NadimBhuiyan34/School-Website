<?php
   session_start();
   if (isset($_SESSION['name'])) {
      header("location:home.php");
   }

 ?>
<?php
if (isset($_REQUEST['submit'])) {
   include 'config.php';
  $name=mysqli_real_escape_string($conn,$_REQUEST['name']);
  $password=mysqli_real_escape_string($conn,md5($_REQUEST['password'])) ;


  $log="SELECT id, name, email,role FROM users WHERE name='{$name}' AND password='{$password} '";

  $result=mysqli_query($conn,$log) or die("Query faild");
  if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
      session_start();
       $_SESSION['id']=$row['id'];
       $_SESSION['name']=$row['name'];
       $_SESSION['email']=$row['email'];
       $_SESSION['time']=time();
       $_SESSION['role']=$row['role'];
        if ($_SESSION['role']==1) {
           header("location:home.php");
        }
        elseif ($_SESSION['role']==0) {
              header("location:contactus.php");
        }
    }

  }
  else {
       echo "Username and password are not found";
  }

}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap 5 Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class=" pt-2 bg-white text-primary rounded text-center">
     <h1><b>গোলাকান্দাইল মজিবর রহমান ভূইয়া উচ্চ বিদ্যালয়</b></h1>
     <p>স্থাপতি ১৯৯৫</p>
   </div>

<div class="container col-sm-3 pt-3 pb-5 mt-5 bg-info text-dark ">

    <img src="image/av1.png" class="rounded-circle mx-auto d-block col-sm-6">
  <form action="index.php" method="post">
    <div class="form-floating mt-3 mb-3">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="name">
      <label for="pwd">User Name</label>
    </div>

    <div class="form-floating mt-3 mb-3">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password">
      <label for="pwd">Password</label>
    </div>



   <div class="form-group">

   <button type="submit" class="btn btn-success form-control" name="submit" >Submit</button>
   </div>
    <a href="signup.php" class="text-white float-end"><b>SignUp</b> </a>
      <a href="forget.php" class="text-white float-end"><b>Forget</b> </a>
 </form>
  </div>
  <footer style="width:100%;bottom:0">
  <div class="card float-end col-sm-10 bg-info" style="width:100%;margin-top:20px">
    <div class="card-body text-center">

      <br>নাদিম ভূইয়া <br> নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
    </div>
  </div>
  </footer>
</body>
</html>
