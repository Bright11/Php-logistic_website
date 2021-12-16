<?php 
//aion_start();ll sender
if (isset($_SESSION['em_email'])) {
$b_id = $_SESSION['em_email'];


$sql ="SELECT * FROM senderinfo INNER JOIN employees ON senderinfo.b_id=employees.b_id WHERE em_email='$b_id'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $sendernum = $result->num_rows;
    $stmt->close();
 
    if($sendernum>0){

    }else{
        $nothing ="0";
    }

//all shipping
    $sql ="SELECT * FROM shippinginfo INNER JOIN employees ON shippinginfo.b_id=employees.b_id WHERE em_email='$b_id'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $shippingnu = $result->num_rows;
    $stmt->close();
 
    if($shippingnu>0){

    }else{
        $nothing ="0";
    } 

//employees
    $sql ="SELECT * FROM employees WHERE em_email='$b_id' AND em_role='employee'";
     //$sql ="SELECT * FROM employees WHERE em_email='$b_id' AND em_role='employee'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $empnu = $result->num_rows;
    $stmt->close();
 
    if($empnu>0){

    }else{
        $nothing ="0";
    }

    // all canciled
    $sql ="SELECT * FROM shippinginfo INNER JOIN employees ON shippinginfo.b_id=employees.b_id WHERE em_email='$b_id' AND status='Canciled'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $cancilednu = $result->num_rows;
    $stmt->close();
 
    if($cancilednu>0){

    }else{
        $nothing ="0";
    }

     // all new shipping
    $sql ="SELECT * FROM shippinginfo INNER JOIN employees ON shippinginfo.b_id=employees.b_id WHERE em_email='$b_id' AND status='New'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $newnu = $result->num_rows;
    $stmt->close();
 
    if($newnu>0){

    }else{
        $nothing ="0";
    }

     // all new recievered shipping
    $sql ="SELECT * FROM shippinginfo INNER JOIN employees ON shippinginfo.b_id=employees.b_id WHERE em_email='$b_id' AND status='Recieved'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $rnu = $result->num_rows;
    $stmt->close();
 
    if($rnu>0){

    }else{
        $nothing ="0";
    }

     // all new delayed shipping
    $sql ="SELECT * FROM shippinginfo INNER JOIN employees ON shippinginfo.b_id=employees.b_id WHERE em_email='$b_id' AND status='Delayed'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $dnu = $result->num_rows;
    $stmt->close();
 
    if($dnu>0){

    }else{
        $nothing ="0";
    }

     // all new on the way shipping
    $sql ="SELECT * FROM shippinginfo INNER JOIN employees ON shippinginfo.b_id=employees.b_id WHERE em_email='$b_id' AND status='On the way'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $wnu = $result->num_rows;
    $stmt->close();
 
    if($wnu>0){

    }else{
        $nothing ="0";
    }

}else{

}

     //total income
function totalincome(){
    if (isset($_SESSION['em_email'])) {
    $b_id = $_SESSION['em_email'];
    include('./db/db.php');
$sql="SELECT * FROM senderinfo INNER JOIN employees ON senderinfo.b_id=employees.b_id WHERE em_email='$b_id'";
 $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
 //$prices = $result->num_rows;
 if ($result->num_rows>0) {
  $total=0;
while ($row=$result->fetch_assoc()) {
  $total += $row['price'];

}

?>
<p><?php echo $total ?></p>
<?php
    }
 }else{
   
 }
}
    ?>
