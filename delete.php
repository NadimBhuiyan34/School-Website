<?php
 include 'config.php';
 $rec=$_REQUEST['id'];
 $qur="DELETE FROM contact WHERE id=$rec";
 $result=mysqli_query($conn,$qur);
if ($result) {
   
  header("location:contact_table.php?Deleted");
}
else {
  echo "data not deleted";
}
 ?>
