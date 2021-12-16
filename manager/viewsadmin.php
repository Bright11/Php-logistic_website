<?php 
include('navbar.php');
?>
<div class="container-fluid aboutus">
  <h1>Track Bright C Web Developer Express Shipping</h1>
</div>

<!--the end-->
<div class="container">
<div class="row">

</div>
<div class="table-responsive">
   <h4 class="txt-center">Admin Details</h4>
  <table class="table table-success table-striped">

     <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Role</th>
       <th scope="col">Branch</th>
        <th scope="col">Country</th>
         <th scope="col">City</th>
          <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php 

if (isset($_SESSION['memail'])) {
$memail = $_SESSION['memail'];
}else{
  header('location:managerlogin.php');
}
$sql ="select * from employees inner join branches on employees.b_id=branches.b_id where employees.adminemail is not null";

$rows = mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($rows)) {

?>
  <tr>
      <td><?php echo $row['em_name'];?></td>
       <td><?php echo $row['adminemail'];?></td>
        <td><?php echo $row['em_number'];?></td>
      <td><?php echo $row['em_role']; ?></td>
      <td><?php echo $row['b_name']; ?></td>
      <td><?php echo $row['b_country']; ?></td>
      <td><?php echo $row['b_city']; ?></td>
    
         <td><a title="Click to edit" href="updateshipping.php?update=<?php echo $row['em_id']; ?>" style="text-decoration: none;color: red;">Update</a></td>
    </tr>
<?php
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