<?php 
include('../admin/db/db.php');
include('navbar.php');
include('counter.php');
//http://localhost:8080/shipping/admin/thankyou.php
?>
<?php 
if (isset($_SESSION['memail'])) {
$memail = $_SESSION['memail'];
}else{
  header('location:managerlogin.php');
}
?>
<div class="container-fluid aboutus">
  <legend>Bright C Web Developer Express Shipping <?php echo $memail;?></legend>
</div>
<!--the end-->
<div class="container mt-5">
  <div class="row">
<div class="col-md-2 itemsnumber text-center">
<p>Number of customers</p>
<h2><?php echo $sendernum; ?> <?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber text-center">
<p>Number of shipping</p>
<h2><?php echo $shippingnu; ?><?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber">
<p>Total Branches</p>
<h2><?php echo $tbranchnu; ?><?php  $nothing; ?></h2>
<div class="links">
<a href="branches.php">Click to open</a>
</div>
</div>
<div class="col-md-2 itemsnumber text-center">
<p>Number of employees</p>
<h2><?php echo $empnu; ?><?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber">
<p>Canciled shipping</p>
<h2><?php echo $cancilednu; ?><?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber">
<p>new shipping</p>
<h2><?php echo $newnu; ?><?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber">
<p>Recievered Items</p>
<h2><?php echo $rnu; ?><?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber">
<p>Delayed shipping</p>
<h2><?php echo $dnu; ?><?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber">
<p>On the way shipping</p>
<h2><?php echo $wnu; ?><?php  $nothing; ?></h2>
</div>

<div class="col-md-2 itemsnumber">
<p>Active Branches</p>
<h2><?php echo $abranchnu; ?><?php  $nothing; ?></h2>
</div>
<div class="col-md-2 itemsnumber">
<p>View Branches</p>
<div class="links">
  <a href="viewsbranch.php">View Branches</a>
</div>
</div>
<div class="col-md-2 itemsnumber">
<p>View Admins</p>
<div class="links">
  <a href="viewsadmin.php">Admins</a>
</div>
</div>

<div class="col-md-2 itemsnumber">
<p>Income amount</p>
<?php 
totalincome();
?>
</div>

<div class="col-md-2 itemsnumber">
<p>Admins</p>
<h2><?php echo $anu; ?><?php  $nothing; ?></h2>
<div class="links">
  <a href="Admins.php">Register</a>
</div>
</div>

  </div>

</div>

<div class="container-fluid mt-5">
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
    Copyright ?? 2019. All right reserved.
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