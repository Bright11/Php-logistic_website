<?php 
include('navbar.php');
?>
<?php
include('db.php');
$error='';
if (isset($_POST['submit'])) {
 $b_name = $_POST['b_name'];
 $b_country = $_POST['b_country'];
 $b_city = $_POST['b_city'];
 if (empty($b_name)){
  $error='<div class="error" style="background-color:red;">Please make sure you firlds the branch name forms!</div>';
 }
 
 elseif(empty($b_country)){
  $error='<div class="error"style="background-color:red;">Please make sure you firlds the country forms!</div>';
 }
 elseif (empty($b_city)) {
   $error='<div class="error"style="background-color:red;">Please make sure you firlds the city forms!</div>';
 }
 else{
  $sql = 'SELECT * FROM branches WHERE b_name=?';
  $stmt = $conn->prepare($sql);
  $stmt-> bind_param('s',$b_name);
  $stmt->execute();
  $result = $stmt->get_result();
  $count =$result->num_rows;
  $stmt->close();
  if($count>0){
    $error='<div class="btn btn-danger">User name already exist!</div>';
  }else{
    $sql ="INSERT INTO branches(b_name,b_country,b_city)VALUES(?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss',$b_name,$b_country,$b_city);
    if ($stmt->execute()){
      header('location:index.php');
    }else{
      $error='<div class="btn btn-danger">An error occur during registering try again.</div>';
    }
  }

 }
}


?>
<?php 
echo $error;
?>
<div class="container text-center">
<div class="row">
  <div class="col-md-3"></div>
<div class="col-md-6">
  <h1>Branch Registeration</h1>
<form action="" method="post">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Branch Name</label>
  <input type="text" class="form-control"name="b_name" id="b_name" placeholder="Branch Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Country</label>
   <input type="text" class="form-control"name="b_country" id="b_country" placeholder="City">
</div>
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">City</label>
   <input type="text" class="form-control" name="b_city" id="b_city" placeholder="Country">
</div>

<div class="mb-3">
   <input type="submit" class="form-control" maxlength="15" name="submit" id="submit">
</div>
</form>

</div>

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