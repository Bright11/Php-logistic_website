<?php 
include('navbar.php');
?>
<?php 
if (isset($_SESSION['em_email'])){
   }else{
    header('location:adminlogin.php');
   }
?>
<div class="container text-center">
<?php
  if (isset($_SESSION)) {
    $b_id = $_SESSION['em_email'];
    $sql = "SELECT * FROM senderinfo AS send INNER JOIN branches AS bran ON send.b_id=bran.b_id INNER JOIN employees AS emplo ON send.b_id=emplo.b_id INNER JOIN shippinginfo AS shipping ON bran.b_id=shipping.b_id WHERE em_email='$b_id'ORDER BY shipping.b_id DESC";
  $row = mysqli_fetch_assoc($conn->query($sql));
  }
    ?>
    <h1 class="text-center">Your tracking code is-> <?php echo $row['tracking_id']; ?></h1>
    <h4>Thank you for choosen us!</h4>
<button onclick="window.print();">Print your tracking code</button>
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