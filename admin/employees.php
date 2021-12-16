<?php 
include('navbar.php');
?>
 <?php
    if (isset($_SESSION['adminemail'])){
   }else{
    header('location:adminlogin.php');
   }
   ?>
<?php
include('db/db.php');
$error='';
if (isset($_POST['submit'])) {
 $em_name = $_POST['$em_name'];
 $em_email = $_POST['em_email'];
 //$adminemail = $_POST['adminemail'];
 $em_number = $_POST['em_number'];
 $em_role = $_POST['em_role'];
 $b_id = $_POST['b_id'];
 $password =$_POST['password'];
 $passwordcom = $_POST['passwordcom'];
 if (empty($em_name)){
  $error='<div class="error" style="background-color:red;">Please make sure you firlds the name forms!</div>';
 }
 elseif (empty($em_email)) {
   $error='<div class="error"style="background-color:red;">Please make sure you firlds Email empty forms!</div>';
 }
 elseif(empty($em_number)){
  $error='<div class="error"style="background-color:red;">Please make sure you firlds the number forms!</div>';
 }
 elseif ($em_role=='Select Role') {
   $error='<div class="error"style="background-color:red;">Please make sure you select thr role of thr employe!</div>';
 }
 elseif($b_id =='Select branch'){
  $error='<div class="error"style="background-color:red;">Please make sure you firlds the Select branch forms!</div>';
 }
 elseif(empty($password)){
   $error='<div class="error"style="background-color:red;">Please make sure you firlds the password forms!</div>';
 }
 elseif($password !=$passwordcom){
  $error='<div class="error"style="background-color:red;">Password did not match!</div>';
 }
 
 else{
  $sql = 'SELECT * FROM employees WHERE em_email=? OR adminemail=?';
  $stmt = $conn->prepare($sql);
  $stmt-> bind_param('ss',$em_email,$adminemail);
  $stmt->execute();
  $result = $stmt->get_result();
  $count =$result->num_rows;
  $stmt->close();
  if($count>0){
    $error='<div class="btn btn-danger text-center">Email already exist!</div>';
  }else{
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql ="INSERT INTO employees(em_name,em_email,em_number,em_role,b_id,password)VALUES(?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssss',$em_name,$em_email,$em_number,$em_role,$b_id,$password);
    if ($stmt->execute()){
      //header('location:views_employee.php');
       $error='<div class="btn btn-success">Employee registered successfully.</div>';
    }else{
      $error='<div class="btn btn-danger text-center">An error occur during registering try again.</div>';
    }
  }

 }
}


?>

<div class="container employee text-center">
  <?php 
echo $error;
?>
<div class="row">
  <div class="col-md-2"></div>
<div class="col-md-6">
  <legend>Register Employee</legend>
<form action="" method="post">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control"name="$em_name" id="$em_name" placeholder="Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
   <input type="email" class="form-control"name="em_email" id="em_email" placeholder="Email">
</div>
<!--
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Admin Email</label>
   <input type="email" class="form-control"name="adminemail" id="adminemail"value="">
</div>
-->
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Number</label>
   <input type="text" class="form-control" maxlength="15" name="em_number" id="em_number" placeholder="Number">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Role</label>
  <select class="form-control" name="em_role" id="em_role">
   
    <?php 
    if (isset($_SESSION['adminemail'])) {
    $b_id = $_SESSION['adminemail'];
    ?>
   <option value="employee">employee</option>
    <?php
    
     }else{
     ?>
      <option value="Select Role">Select Role</option>
     <?php 
     }
     ?>
  </select>
</div>
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Branch</label>
  <select class="form-control" name="b_id" id="b_id">
    
    <?php
    if (isset($_SESSION)){
    $b_id=$_SESSION['adminemail'];
  $sql = "SELECT * FROM branches INNER JOIN employees ON branches.b_id=employees.b_id WHERE adminemail='$b_id'";
  $row = mysqli_query($conn,$sql);
  while($b=mysqli_fetch_object($row)){
    ?>
    <option value="<?php echo $b->b_id;?>"><?php echo $b->b_name;?></option>
    <?php
     }
    }else{
    
    }
    ?>
  </select>
</div>
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Password</label>
   <input type="text" class="form-control" maxlength="50" name="password" id="password" placeholder="Password..">
</div>
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
   <input type="text" class="form-control" maxlength="50" name="passwordcom" id="passwordcom" placeholder="confirm Password..">
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