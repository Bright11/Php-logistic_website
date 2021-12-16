<?php 
include('navbar.php');
?>
<?php
    if (isset($_SESSION['em_email'])){
   }else{
    header('location:adminlogin.php');
   }
$error='';
include('db/db.php');
if (isset($_POST['submit'])) {
  $reciever_name = $_POST['reciever_name'];
   $reciever_number = $_POST['reciever_number'];
  $reciever_email = $_POST['reciever_email'];
  $reciever_country = $_POST['reciever_country'];
  $reciever_city = $_POST['reciever_city'];
  $sending_by = $_POST['sending_by'];
  $items = $_POST['items'];
  $quantity = $_POST['quantity'];
  $kg = $_POST['kg'];
  $b_id = $_POST['b_id'];
  $current_location = $_POST['current_location'];
  $tracking_id = $_POST['tracking_id'];
  
if (empty($reciever_name)) {
 $error='<div class="error" style="background-color:red;">Please make sure your name is writen!</div>';
  }
   elseif(empty($reciever_number)) {
      $error='<div class="error" style="background-color:red;">Please enter your number!</div>';
       }
  elseif(empty($reciever_email)) {
         $error='<div class="error" style="background-color:red;">Please enter your email!</div>';
    }
   
    elseif(empty($reciever_country)) {
      $error='<div class="error" style="background-color:red;">Please enter the country!</div>';
        }
       elseif (empty($reciever_city)) {
         $error='<div class="error" style="background-color:red;">Please the city!</div>';
        }
        elseif(empty($items)) {
         $error='<div class="error" style="background-color:red;">Please check the items!</div>';
        }
        elseif(empty($quantity)) {
         $error='<div class="error" style="background-color:red;">Please check quantity!</div>';
        }
        elseif(empty($kg)) {
         $error='<div class="error" style="background-color:red;">Please check kg!</div>';
        }
        else{

         $sql ="INSERT INTO shippinginfo(reciever_name,reciever_number,reciever_email,reciever_country,reciever_city,sending_by,items,quantity,kg,b_id,current_location,tracking_id)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param('ssssssssssss',$reciever_name,$reciever_number,$reciever_email,$reciever_country,$reciever_city,$sending_by,$items,$quantity,$kg,$b_id,$current_location,$tracking_id);
         if ($stmt->execute()) {
              
      header('location:thankyou.php');
          ?>
          
        
        <?php 
      
      //exit();
      
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
  <h1>Shipping Information</h1>
<form action="" method="post">
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Reciever Name</label>
  <input type="text" class="form-control"name="reciever_name" id="reciever_name" placeholder="Snder Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Reciever Phone</label>
   <input type="number" class="form-control"name="reciever_number" id="reciever_number" placeholder="Number">
</div>
<div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">Reciever Email</label>
   <input type="text" class="form-control" maxlength="15" name="reciever_email" id="reciever_email" placeholder="Email..">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Reciever Country</label>
   <input type="text" class="form-control"name="reciever_country" id="reciever_country" placeholder="Snder Country">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Reciever City</label>
   <input type="text" class="form-control"name="reciever_city" id="reciever_city" placeholder="Snder City">
</div>

 <?php
  if (isset($_SESSION)) {
    $b_id = $_SESSION['em_email'];
    $sql = "select * from senderinfo as send inner join branches as bran on send.b_id=bran.b_id inner join employees as emplo on send.b_id=emplo.b_id where em_email='$b_id'order by send.b_id desc";
  $row = mysqli_fetch_assoc($conn->query($sql));
  }
  
    ?>
   
  <div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Sending by</label>
   <input type="text" class="form-control"name="sending_by" id="sending_by" placeholder="Send by">
</div>
<div class="mb-3">
   <input type="hidden" class="form-control"name="items" id="items" value="<?php echo $row['items'];?>">
</div>
<div class="mb-3">

   <input type="hidden" class="form-control"name="quantity" id="quantity"value="<?php echo $row['quantity'];?>">
</div>
<div class="mb-3">

   <input type="hidden" class="form-control"name="kg" id="kg" value="<?php echo $row['kg'];?>">
</div>
<div class="mb-3">
  <input type="hidden" class="form-control"name="b_id" id="b_id" value="<?php echo $row['b_id'];?>">
</div>
<div class="mb-3">

   <input type="hidden" class="form-control"name="current_location" id="current_location" value="<?php echo $row['sender_country'];?>">
</div>
<div class="mb-3">

   <input type="hidden" class="form-control"name="tracking_id" id="tracking_id" value="<?php echo $row['tracking_id'];?>">
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