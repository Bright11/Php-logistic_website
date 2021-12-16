<?php 
include('navbar.php');
?>
<?php
    if (isset($_SESSION['em_email'])){
   }else{
    header('location:adminlogin.php');
   }

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
$error='';
include('db/db.php');
if (isset($_POST['submit'])) {
  $sender_name = $_POST['sender_name'];
  $sender_email = $_POST['sender_email'];
  $sender_number = $_POST['sender_number'];
  $sender_country = $_POST['sender_country'];
  $sender_city = $_POST['sender_city'];
  $items = $_POST['items'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $kg = $_POST['kg'];
  $b_id =$_POST['b_id'];
  $em_name =$_POST['em_name'];
  
if (empty($sender_name)) {
 $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
  }
  elseif(empty($sender_email)) {
         $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
    }
    elseif(empty($sender_number)) {
      $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
       }
    elseif(empty($sender_country)) {
      $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
        }
       elseif (empty($sender_city)) {
         $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
        }
        elseif(empty($items)) {
         $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
        }
        elseif(empty($quantity)) {
         $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
        }
        if (empty($price)) {
 $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
  }
  elseif(empty($sender_email)) {
         $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
    }
        elseif(empty($kg)) {
         $error='<div class="error" style="background-color:red;">Please make sure you firlds the empty forms!</div>';
        }
        else{
           $str = "gfHUYedgohytrVHQW[plmkjhty";
          $str = str_shuffle($str);
          $str = substr($str, 10);
         $sql ="INSERT INTO senderinfo(sender_name,sender_email, sender_number,sender_country,sender_city,items,quantity,price,kg,b_id,tracking_id,em_name)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param('ssssssssssss',$sender_name,$sender_email,$sender_number,$sender_country,$sender_city,$items,$quantity,$price,$kg,$b_id,$str,$em_name);
         if ($stmt->execute()) {
              
      header('location:shipping_infor.php');
      exit();
      
      }else{
        $error='<div class="btn btn-danger">An error occur during registering try again.';
      }
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
  <h1>Snder Information</h1>
<form action="" method="post">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Sender Name</label>
  <input type="text" class="form-control"name="sender_name" id="sender_name" placeholder="Snder Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Sender Email</label>
   <input type="text" class="form-control"name="sender_email" id="sender_email" placeholder="Snder Name">
</div>
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Sender Number</label>
   <input type="number" class="form-control" maxlength="15" name="sender_number" id="sender_number" placeholder="Snder Number">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Sender Country</label>
   <input type="text" class="form-control"name="sender_country" id="sender_country" placeholder="Snder Country">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Sender City</label>
   <input type="text" class="form-control"name="sender_city" id="sender_city" placeholder="Snder City">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Item Name</label>
   <input type="text" class="form-control"name="items" id="items" placeholder="Items Name">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Quantity</label>
   <input type="number" class="form-control"name="quantity" id="quantity" placeholder="Quantity">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">price</label>
   <input type="number" class="form-control"name="price" id="price" placeholder="Price">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">KG</label>
   <input type="text" class="form-control"name="kg" id="kg" placeholder="KG">
</div>
<?php 
if (isset($_SESSION)) {
  $b_id = $_SESSION['em_email'];
  $sql="select * from employees inner join branches on employees.b_id=branches.b_id WHERE em_email = '$b_id'";
$row = mysqli_fetch_assoc($conn->query($sql));
}
?>
<!--
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Company Branch</label>
   
</div>
-->
<input type="hidden" class="form-control"name="b_id" id="b_id"value="<?php echo $row['b_id']; ?>">
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Stafe Name</label>
   <input type="text" class="form-control"name="em_name" id="em_name" readonly value="<?php echo $row['em_name']; ?>">
</div>

</div>
<div class="mb-3">
   <input type="submit" class="form-control" name="submit" id="submit">
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