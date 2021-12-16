<?php 
include('navbar.php');
?>
<?php 
if (isset($_SESSION['em_email'])){
   }else{
    header('location:adminlogin.php');
   }
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$error='';
?>
  <?php
 if (isset($_POST['submit'])) {
  $reciever_id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['reciever_id']),ENT_QUOTES,'UTF-8');
    $newstatus = htmlspecialchars (mysqli_real_escape_string($conn,$_POST['newstatus']), ENT_QUOTES, 'UTF-8');

    $newcurrent_location = htmlspecialchars (mysqli_real_escape_string($conn,$_POST['newcurrent_location']), ENT_QUOTES, 'UTF-8');

    $newmessage = htmlspecialchars (mysqli_real_escape_string($conn,$_POST['newmessage']), ENT_QUOTES, 'UTF-8');
  
        
         $sql ="UPDATE shippinginfo SET status ='$newstatus',current_location='$newcurrent_location', message='$newmessage' WHERE reciever_id='$reciever_id'";
         if (mysqli_query($conn,$sql)) {
      header('location:index.php');
      exit();
      
      }else{
        $error='<div class="btn btn-danger">An error occur during registering try again.';
      }
    }
?>

<?php

include('db/db.php');
if (isset($_GET['update'])) {
  $reciever_id = htmlspecialchars(mysqli_real_escape_string($conn,$_GET['update']), ENT_QUOTES,'UTF-8');
  $stmt =$conn->prepare("SELECT * FROM shippinginfo WHERE reciever_id=$reciever_id");
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows>0) {
    while ($ed=$result->fetch_assoc()) {
     ?>
<div class="container text-center">
  <?php 
echo $error;
?>
<div class="row">
  <dev class="col-md-3"></dev>
<div class="col-md-6">
  <h1>Update Information</h1>
<form action="" method="post">
<input type="hidden" class="form-control"name="reciever_id" id="reciever_id"value="<?php echo $ed['reciever_id']; ?>">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Processing</label>
   <select name="newstatus" id="newstatus">
     <option value="<?php echo $ed['status']; ?>"><?php echo $ed['status']; ?></option>
     <option value="On the way">On the way</option>
     <option value="Canciled">Canciled</option>
     <option value="Recieved">Recieved</option>
      <option value="Delayed">Delayed</option>
   </select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Current Location</label>
  <input list="countries" class="form-control"name="newcurrent_location" id="newcurrent_location"value="<?php echo $ed['current_location']; ?>">
  <?php include('countries.php'); ?>
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Message</label>
   <textarea name="newmessage" id="newmessage" class="form-control"><?php echo $ed['message']; ?></textarea>
</div>
<div class="mb-3">
   <input type="submit" class="form-control" name="submit" id="submit">
</div>
</div>
<dev class="col-md-3"></dev>


</form>
</div>

</div>

     <?php
    }
  }
  }
  ?>

<div class="container-fluid">
<div class="footer">
<footer>
  <div class="row footerrow">
<div class="col-md-4">
  <h2>Our Contact</h2>
  <ul class="event">
    <li><a href="">Bright C Web Developer</a></li>
    <li><a href="">Location</a></li>
    <li><a href="">chikanwazuo@gmail.com</a></li>
  </ul>
</div>
<div class="col-md-4"><h2>Quick Links</h2>
   <ul class="event">
    <li><a href="">Terms and conditions</a></li>
    <li><a href="">Privacy Policy</a></li>
    <li><a href="">Contact us</a></li>
  </ul>
</div>
<div class="col-md-4"><h2>Quick Links</h2>
   <ul class="event">
    <li><a href="">Terms and conditions</a></li>
    <li><a href="">Privacy Policy</a></li>
    <li><a href="">Contact us</a></li>
    <li><a href="">French products could face 100% import tax to US ...
US-China trade war is a 'lose-lose' situation for them and the ...
Top Export Partners Of Mauritius</a></li>
  </ul>
</div>

  </div>
  <div class="copyright">
  <div class="row">
      <div class="col-md-8">
    Copyright © 2019. All right reserved.
Designed By Bright C Web Developer
      </div>
 <div class="col-md-4">
   <ul class="socilalinks">
   <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"title="Google plus"><i class="fa fa-google-plus"></i></a></li>
             <li><a href="#" data-placement="top" title="Go to the top"><i class="fa fa-angle-up active"></i></a></li>
     
   </ul>
      </div>

  </div>
</footer>
</div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>