<?php 
//aion_start();ll sender
if (isset($_SESSION)) {
//$b_id = $_SESSION['memail'];

$sql ="SELECT * FROM senderinfo";
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
    $sql ="SELECT * FROM shippinginfo INNER JOIN employees ON shippinginfo.b_id=employees.b_id";
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
     $sql ="SELECT * FROM employees WHERE em_role='employee'";
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
    $sql ="SELECT * FROM shippinginfo WHERE status='Canciled'";
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
    $sql ="SELECT * FROM shippinginfo WHERE status='New'";
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
    $sql ="SELECT * FROM shippinginfo WHERE status='Recieved'";
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
    $sql ="SELECT * FROM shippinginfo WHERE status='Delayed'";
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
    $sql ="SELECT * FROM shippinginfo WHERE status='On the way'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $wnu = $result->num_rows;
    $stmt->close();
 
    if($wnu>0){

    }else{
        $nothing ="0";
    }
}

//Total braches
    
    $sql ="SELECT * FROM branches";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $tbranchnu = $result->num_rows;
    $stmt->close();
 
    if($tbranchnu>0){

    }else{
        $nothing ="0";
    }


     //active braches
    $sql ="SELECT * FROM branches WHERE  b_operation='Active'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $abranchnu = $result->num_rows;
    $stmt->close();
 
    if($abranchnu>0){

    }else{
        $nothing ="0";
    }

    //not active braches
    $sql ="SELECT * FROM branches WHERE  b_operation='Not active'";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $nbranchnu = $result->num_rows;
    $stmt->close();
 
    if($nbranchnu>0){

    }else{
        $nothing ="0";
    }

 //admins
    $sql ="SELECT * FROM employees WHERE adminemail IS NOT NULL";
    $stmt =$conn->prepare($sql);
    $stmt-> execute();
    $result = $stmt-> get_result();
    $anu = $result->num_rows;
    $stmt->close();
 
    if($anu>0){

    }else{
        $nothing ="0";
    }

     //total income
function totalincome(){
    include('../admin/db/db.php');
$stmt=$conn->prepare("SELECT * FROM senderinfo");
 $stmt->execute();
 $result=$stmt->get_result();
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
 }
    ?>
