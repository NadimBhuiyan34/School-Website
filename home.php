<?php
   session_start();
   if (!isset($_SESSION['name'])) {
      header("location:index.php");
   }
   if ((time()-$_SESSION['time'])>20) {
     header("location:logout.php");
   }
   if ($_SESSION['role']==0) {
      header("location:contactus.php");
   }




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
<div>

       <?php
       //this is header file

      include 'header.php';
      //this is navbar file

        ?>
     </div>



     <?php
     // this is carousel file
     include 'carousel.html';
     ?>
     <marquee width="100%" direction="left" height="50px" style="text-color:red">
     <p class="text-primary"><b>২০২০-২১ শিক্ষাবর্ষে স্নাতক (সম্মান) ১ম বর্ষে শুন্য আসনে ভর্তির জন্য মেধাতালিকার অপেক্ষমান তালিকা হতে শিক্ষার্থীদের ভর্তির সময়সূচি: A,B ও C গ্রুপ এর ভর্তির তারিখ: ৮ মার্চ , ২০২২ (আসন শূন্য থাকা সাপেক্ষে) | সময়: সকাল ১০টা হতে বিকাল ৫টা | স্থান: নোবিপ্রবি ক্যাম্পাস এবং D,E ও F গ্রুপ এর ভর্তির তারিখ: ৯ মার্চ, ২০২২ (আসন শূন্য থাকা সাপেক্ষে) | সময়: সকাল ১০টা হতে বিকাল ৫টা | স্থান: নোবিপ্রবি ক্যাম্পাস | বিভিন্ন কোটায় A,B,C,D,E ও F গ্রুপ এর ভর্তির তারিখ: ১০ মার্চ, ২০২২ (আসন শূন্য থাকা সাপেক্ষে) | সময়: সকাল ১০টা হতে বিকাল ৫টা | স্থান: নোবিপ্রবি ক্যাম্পাস | বিস্তারিত জানতে : ভিজিট করুন</b><p>
     </marquee>
      <?php echo $_SESSION['role']; ?>
     <?php
         if (isset($_REQUEST['search'])) {
           include 'config.php';


        ?>
        <div class="container mt-2">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Mobile</td>
                <td>Message</td>
                <td>ACTION</td>
              </tr>
             </thead>
        <?php

          $search=$_REQUEST['name'];

          $qur="SELECT * FROM contact WHERE name LIKE '%$search%'";
          $result=mysqli_query($conn,$qur) or die("failed quary");
       if ($result) {

            $loc="image/";
        $idp=0;
        while ($row=mysqli_fetch_assoc($result)) {
           $idp++

         ?>
         <tbody>
           <tr>
             <td><?php echo $idp?></td>
             <td><?php echo $row['name'] ?></td>
             <td><?php echo $row['email'] ?></td>
             <td><?php echo $row['mobile'] ?></td>
              <td><img width="50px"src="<?php echo $loc.$row['image']; ?>" alt=""></td>
             <td><?php echo $row['message'] ?></td>
             <td><a href="update.php?id=<?php echo $row['id']; ?>">Update||</a><a href="delete.php?id=<?php echo $row['id'];  ?> ">Delete</a></td>
           </tr>
         </tbody>
         <?php
     }

        ?>
      </table>
     </div>
      <?php
     }
     else {
       echo "Data not found";
     }
      }


        include 'fotter.html';
       ?>



  </body>
</html>
