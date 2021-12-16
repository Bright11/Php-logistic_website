<?php

include('db.php');
if (isset($_GET['delete'])) {
  $b_id = $_GET['delete'];
  $sql ="DELETE  FROM branches WHERE b_id='$b_id'";

  if (mysqli_query($conn,$sql)) {
     $sql ="DELETE  FROM employees WHERE b_id='$b_id'";
     if (mysqli_query($conn,$sql)) {
       header('location:viewsbranch.php');
     }
   
  }
     
  }else{
    header('location:viewsbranch.php');
     exit();
}

?>

