<?php
   session_start();
   if (!isset($_SESSION['name'])) {
      header("location:index.php");
   }

 ?>
 <?php
  include 'config.php';
   if (isset($_REQUEST['m_delete'])) {
      $data=$_REQUEST['check'];
      $mark=implode(",",$data);
      $qur="SELECT * FROM contact WHERE id IN ($mark)";
      $result=mysqli_query($conn,$result) or die("dhvdgv");
    }
  ?>
<?php
include 'header.php';
 include 'config.php';
 $slt="SELECT * FROM contact";
 $result=mysqli_query($conn,$slt) or die("query faild");
 if (mysqli_num_rows($result)>0) {

   ?>
   <div class="container mt-2">
     <table class="table">
       <thead class="table-dark">
         <tr>
           <td>ID</td>
           <td>Name</td>
           <td>Email</td>
           <td>Mobile</td>
            <td>Gender</td>
             <td>Country</td>
           <td>Message</td>
           <td>Image</td>
           <td>ACTION</td>
           <td><input type="button" name="m_delete" value="M_Delete"></td>
         </tr>
        </thead>
   <?php
    $loc="image/";

   $idp=0;
   while ($row=mysqli_fetch_assoc($result)) {
      $idp++
    ?>
    <tbody>
      <tr>
        <td><?php echo $idp?></td>
        <td><?php echo $row['name'] ;?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile'] ;?></td>
          <td><?php echo $row['gender'] ;?></td>
            <td><?php echo $row['country'] ;?></td>
        <td><?php echo $row['message'] ;?></td>
        <td><img width="50px"src="<?php echo $loc.$row['image']; ?>" alt=""></td>
        <td><a onclick="return confirm('Are you sure')" href="update.php?id=<?php echo $row['id']; ?>">Update||</a><a onclick="return confirm('Are you sure')" href="delete.php?id=<?php echo $row['id'];  ?> ">Delete</a></td>
        <td> <center><input type="checkbox" name="check[]" value="<?php echo $row['id']; ?>"></center></td>
      </tr>
    </tbody>
    <?php
}

   ?>
 </table>
</div>
 <?php





}

   include 'fotter.html';
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

  </body>
</html>
