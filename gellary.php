<?php
   session_start();
   if (!isset($_SESSION['name'])) {
      header("location:index.php");
   }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    /* The grid: Four equal columns that floats next to each other */
    div.gallery {
      border: 1px solid #ccc;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      padding: 15px;
      text-align: center;
    }

    * {
      box-sizing: border-box;
    }

    .responsive {
      padding: 0 6px;
      float: left;
      width: 24.99999%;
    }

    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }

    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php
    //this is header file
   include 'header.php';
   //this is navbar file

     ?>
     <h2 class="text-center">Our Image Gallery</h2>



   <div class="responsive">
     <div class="gallery">
       <a target="_blank" href="image/g1.jpg">
         <img src="image/g1.jpg" alt="Cinque Terre" width="600px" height="400px">
       </a>
       <div class="desc">Add a description of the image here</div>
     </div>
   </div>


   <div class="responsive">
     <div class="gallery">
       <a target="_blank" href="image/g2.jpg">
         <img src="image/g2.jpg" alt="Forest" width="600" height="400">
       </a>
       <div class="desc">Add a description of the image here</div>
     </div>
   </div>

   <div class="responsive">
     <div class="gallery">
       <a target="_blank" href="image/g3.jpg">
         <img src="image/g3.jpg" alt="Northern Lights" width="600" height="400">
       </a>
       <div class="desc">Add a description of the image here</div>
     </div>
   </div>

   <div class="responsive">
     <div class="gallery">
       <a target="_blank" href="image/g4.jpg">
         <img src="image/g4.jpg" alt="Mountains" width="600" height="400">
       </a>
       <div class="desc">Add a description of the image here</div>
     </div>
   </div>
    <br>
    <br>





    <?php
      include 'fotter.html';
     ?>
  </body>
</html>
