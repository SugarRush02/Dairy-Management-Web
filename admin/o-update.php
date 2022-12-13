<?php
session_start();
if(isset($_POST['update'])){
    try{
$id=$_POST['spid'];
echo "$id";
unset($_SESSION['searchP']);
$p_id=$_POST['pid'];
$p_name=$_POST['pname'];
$p_brand=$_POST['pbrand'];
$p_desc=$_POST['pdesc'];
$p_cat=$_POST['pcat'];
$p_discount=$_POST['pdiscount'];
$p_quantity=$_POST['pqty'];
$p_cost=$_POST['pprice'];
$conn = new mysqli('localhost:3307', 'root', '', 'dms');
$sql = "UPDATE products SET p_id='$p_id', p_name='$p_name', p_brand='$p_brand', p_desc='$p_desc' , p_cat='$p_cat', p_discount='$p_discount', p_quantity='$p_quantity', p_cost='$p_cost' WHERE product_id=$id";

if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
    $_SESSION['message'] = 'Product added to cart';

  } else {
    echo "Error updating record: " . $conn->error;
  }
        // echo "$p_id  $p_name  $p_cost";
        // header('location: update_product.php');
        // die();        // $count = mysqli_num_rows($result); 
        // echo "$count";
    }catch(Exception $e) {
        // echo 'Message: ' .$e->getMessage();
        echo " ";
      }
}
?>