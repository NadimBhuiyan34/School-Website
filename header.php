 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

    <div class="card float-start col-sm" style="margin-right:50px">
        <img src="image/logo3.jpg" style="width:100px;margin-top:10px" alt="">
    </div>
    <div class=" pt-2 bg-white text-primary rounded text-center">

       <h1><b>গোলাকান্দাইল মজিবর রহমান ভূইয়া উচ্চ বিদ্যালয়</b></h1>
       <p>স্থাপতি ১৯৯৫</p>
       <nav class="navbar navbar-expand-sm bg-info">

         <div class="container-fluid text-white">
           <!-- Links -->
           <ul class="nav nav-tabs nav-justified">
             <li class="nav-item">
               <a class="text-dark nav-link"href="home.php"><b>HOME</b></a>
             </li>

             <div class="dropdown">
                 <a class="nav-link text-dark dropdown-toggle"
                 href="#"><b>ADMINSTRATION</b></a>
            <div class="dropdown-content dropdown-menu">
              <li><a class="dropdown-item" href="contact_table.php">CHANCELOR</a></li>
              <li><a class="dropdown-item" href="#">VICE CHENCELOR</a></li>
              <li><a class="dropdown-item" href="#">PRO VICE CHENCELOR</a></li>
              <li><a class="dropdown-item" href="#">TREASURER</a></li>
              <li><a class="dropdown-item" href="#">REGISTER</a></li>
              <li><a class="dropdown-item" href="#">REGENT BOARD</a></li>
            </div>
         </div>


             <li class="nav-item">
               <a class="nav-link text-dark"href="notice.php"><b>NOTICE</b></a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark"href="gellary.php"><b>GELLARY</b></a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark"href="signup.php"><b>REGISTERATION</b></a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-dark"href="index.php"><b>LOGIN</b></a>
             </li>
             <li class="nav-item" >
               <a class="nav-link text-dark"style="width:115px"href="aboutus.php"><b>ABOUT US</b></a>
             </li>
             <li class="nav-item" >
               <a class="nav-link text-dark"style="width:140px"href="contactus.php"><b>CONTACT US</b></a>
             </li>

             <li class="nav-item ">
              <form class="form-group" action="home.php" method="post">
               <div class="input-group"style="width:200px">

                 <input type="text" class="form-control" name="name" placeholder="Search here">
                 <input type="submit" class="form-control"name="search" value="GO">

                 </form>
              </div>
               </form>
             </li>
             <li class="nav-item" style="margin-left:50px">
               <a class="nav-link text-dark"style="width:115px"href="logout.php"><b>LOGOUT</b></a>
             </li>

           </ul>
         </div>

      </nav>
   </div>
  </body>
</html>
