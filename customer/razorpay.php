<?php
session_start();
 $email=$_SESSION['user']; 
 $conn = new mysqli('localhost:3307', 'root', '', 'dms');
 $sql = "SELECT * FROM customers where email='$email'";
 $query = $conn->query($sql);
 $result = mysqli_query($conn, $sql);  
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 $count = mysqli_num_rows($result); 
 $name=$row['first_name']." ".$row['last_name'];
 $phone=$row['phone'];
// // echo $name;
// // $amount = $_POST["total_bill"];
date_default_timezone_set('Asia/Kolkata');
$date=date("d/m/Y");
$invoice = date('Ymdhis', time());
$invoice .= "/".$phone;
$_SESSION['oid']=$invoice;
$total=$_SESSION['tot'];
echo $total;
?>

<?php
    $apikey = "rzp_test_4A2pCneFOWMFNQ";
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<form action="pOrder.php" method="POST">
<script>
  $(window).on('load', function() {
    $('.razorpay-payment-button').click();
  });
</script>
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>"
    data-amount="<?php echo $total*100; ?>"
    data-currency="INR"
    data-order id="<?php echo $invoice; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Dairyverse"
    data-description="Dairy Management System"
    data-image="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shutterstock.com%2Fimage-vector%2Fdairy-products-milk-food-cartoon-vector-510964054&psig=AOvVaw2gITIH_RDBWqWl8PgKt4Qt&ust=1667847565241000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCOirhr6emvsCFQAAAAAdAAAAABAE"
    data-prefill.name="<?php echo $name; ?>"
    data-prefill.email="<?php echo $email; ?>"
    data-prefill.contact="<?php echo $phone; ?>"
    data-theme.color="#F37254"></script>
    <?php $_SESSION['tot']=0; ?>
    <input type="hidden" custom="Hidden Element" name="hidden">
</form>