<?php 
include('navbar.php');
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$error='';
include('db.php');
if (isset($_POST['submit'])) {
  $memail= $_POST['memail'];
  $password = $_POST['password'];
 if ($memail=='chikanwazuo@gmail.com' AND $password=='myfather') {
     session_start();
    $_SESSION['memail']=$memail;
    header('location:index.php');
  }else{
     $error='<div class="error" style="background-color:red;">User name or password is wrong</div>';
  }
       }
?>
<div class="container text-center">
  <?php 
echo $error;
?>
<div class="row">
  <dev class="col-md-3"></dev>
<div class="col-md-6">
  <h1>memail Information</h1>
<form action="" method="post">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">memail</label>
  <input type="text" class="form-control"name="memail" id="mmail" placeholder="memail">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">password</label>
   <input type="text" class="form-control"name="password" id="password" placeholder="......">
</div>

<div class="mb-3">
   <input type="submit" class="form-control"name="submit" id="submit">
</div>
</div>
<dev class="col-md-3"></dev>


</form>
</div>

</div>

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