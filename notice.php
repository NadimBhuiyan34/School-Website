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
    <title>Notice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php
        include 'header.php';
     ?>
    <div class="card float-end col-sm-10" style="margin-right:100px;margin-top:10px">
      <div class="card-body text-center">

        <br>নাদিম ভূইয়া <br> নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
      </div>
    </div>
    <div class="card float-end col-sm-3 mt-10" style="margin-right:100px;margin-top:30px">
      <div class="card-body text-center">

        <br>নাদিম ভূইয়া <br> নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
      </div>
    </div>
    <div class="card float-end col-sm-3" style="margin-right:50px;margin-top:30px">
      <div class="card-body text-center">

        <br>নাদিম ভূইয়া <br> নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
      </div>
    </div>
    <div class="card float-end col-sm-3" style="margin-right:50px;margin-top:30px">
      <div class="card-body text-center">

        <br>নোবিপ্রবিতে জাতীয় পরিসংখ্যান দিবস ২০২২ পালিত
      </div>
    </div>
    <div class="card float-end col-sm-10" style="margin-right:100px">
      <div class="card-body text-center">

        <br>নাদিম ভূইয়া <br> নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
      </div>
    </div>
    <?php
         include 'fotter.html';
     ?>
  </body>
</html>
