<?php 
include('nav.php');
?>
<div class="container-fluid aboutus">
  <h1>Track Bright C Web Developer Express Shipping</h1>
</div>

<!--tracking form-->
<div class="container">
<div class="track">
<h2>Track your items</h2>
<p></p>
</div>

<div class="col-md-7">
  <form action="tracking_info" method="post">
    <div class="trackinput">
<input type="text" name="tracking_id" id="tracking_id" placeholder="Tracking Number" maxlength="10">
<button><input type="submit" name="search"></button>
</div>
  </form>
</div>
</div>
<!--the end-->
<div class="container">
<div class="table-responsive">
   <h4 class="txt-center">Tracking Details</h4>
  <table class="table table-success table-striped">

     <thead>

  </thead>
  <tbody>
    <?php 
     include('./admin/db/db.php');
if (isset($_POST['search'])) {
  $tracking_id = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['tracking_id']),ENT_QUOTES,'UTF-8');

$sql ="SELECT * FROM shippinginfo INNER JOIN senderinfo ON shippinginfo.tracking_id=senderinfo.Tracking_id INNER JOIN branches ON Shippinginfo.b_id=branches.b_id WHERE shippinginfo.tracking_id='$tracking_id'";
$rows = mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($rows)) {
 

?>
<tr>
    <th scope="col">Date</th>
      <td><?php echo $row['reciever_dateupdate'];?></td>
    </tr>
  <tr>
    <th scope="col">Branch</th>
      <td><?php echo $row['b_name'];?></td>
    </tr>
    <tr>
       <th scope="col">Country</th>
      <td><?php echo $row['reciever_country']; ?></td>
    </tr>
    <tr>
       <th scope="col">Items</th>
       <td><?php echo $row['items']; ?></td>
       <tr>
         <th scope="col">Quantity</th>
       <td><?php echo $row['quantity']; ?></td>
     </tr>
     <tr>
      <th scope="col">KG</th>
        <td><?php echo $row['kg']; ?></td>
      </tr>
      <tr>
         <th scope="col">Current Location</th>
        <td><?php echo $row['current_location']; ?></td>
      </tr>
      <tr>
         <tr>
         <th scope="col">Sending by</th>
        <td><?php echo $row['sender_name']; ?></td>
      </tr>
      <tr>
         <th scope="col">Proccessing</th>
          <td><?php echo $row['status']; ?></td>
    </tr>
     <tr>
         <th scope="col">Message</th>
        <td><p><?php echo $row['message']; ?></p></td>
      </tr>
    <hr>
    <br>
    <tr>
      <td>
        <div class="print">
<button class="myprint btn btn-primary" onclick="window.print()">Print</button>
</div>
      </td>
    </tr>
    <iframe width="100%" height="300" src="https://maps.google.com/maps?q=<?php echo $row['current_location']; ?>&output=embed"></iframe>
<?php
}

//}
}
  ?>

  </table>
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