<?php
include('gen_uid.php');
$connp = new mysqli('localhost:3307', 'root', '', 'dms');
$connc = new mysqli('localhost:3307', 'root', '', 'dms_cart');
$sql = "SELECT * FROM `$userid` ";
$queryc = $connc->query($sql);
$result = mysqli_query($connc, $sql);  
$rowc = mysqli_fetch_array($result, MYSQLI_ASSOC);
$id=$rowc['product_id'];

$tqty=0;
$order_total=0;
// echo "$id";
// print_r($rowc);
$user=$_SESSION['user'];
echo "$user";

$result = mysqli_query($connp,"SELECT * FROM customers WHERE email='$user'");
$rowu = mysqli_fetch_array($result);
$phno=$rowu['phone'];
// echo "$phno";
                                                                        if(!isset($_SESSION['oid'])){
                                                                        date_default_timezone_set('Asia/Kolkata');
                                                                        $date=date("d/m/Y");
                                                                        $invoice = date('Ymdhis', time());
                                                                        $invoice .= "/".$phno;
                                                                        // echo date_format($date,"YmdHis");
                                                                        echo "$invoice";
                                                                    }
                                                                    else{
                                                                        date_default_timezone_set('Asia/Kolkata');
                                                                        $date=date("d/m/Y");
                                                                        $invoice=$_SESSION['oid'];
                                                                    }
while($rowc = $queryc->fetch_assoc()){
    $id=$rowc['product_id'];
    $qtyc=$rowc['quantity'];
    // echo "$id $qtyc ";
    $tqty+=$qtyc;

    $sql = "SELECT * FROM products where p_id=$id ";
    $queryp = $connp->query($sql);
    $result = mysqli_query($connp, $sql);  
    $rowp = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $qtyp=$rowp['p_quantity'];
    
    // echo "$qtyp<br>";
    $nqty=$qtyp-$qtyc;
    // echo "$nqty";
    $sql = "UPDATE products SET p_quantity='$nqty' WHERE p_id=$id";
    if ($connp->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $connp->error;
      }
    $pid=$rowc['product_id'];
    $pname=$rowc['product_name'];
    $pqty=$rowc['quantity'];
    $total=$rowc['total'];
    $order_total+=$total;
    $sql = "INSERT INTO orders (order_id, product_id,product_name,product_quantity, total_cost,phone,date)
    VALUES('$invoice', '$pid','$pname', '$pqty', '$total', '$phno', '$date' )";
            // array_push($_SESSION['cart'], $_GET['id']);
            if ($connp->query($sql) === TRUE) {
                echo "Record updated successfully";
            }
                // echo "New record inserted successfully";
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
}
// echo "$order_total";
$sql = "INSERT INTO sales (order_id,order_cost,order_quantity,phone,date)
    VALUES('$invoice', '$order_total','$tqty','$phno','$date' )";
    // array_push($_SESSION['cart'], $_GET['id']);
        if ($connp->query($sql) === TRUE) {
            echo "Record updated successfully";
        }
        // echo "New record inserted successfully";
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        header("Location: place_Order.php");
        die();

?>