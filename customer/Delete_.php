<?php
	// session_start();
    include('gen_uid.php');
    $p_id =  $_GET['id'];
    echo "$p_id";


    $conn = new mysqli('localhost:3307', 'root', '', 'dms_cart');

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM `$userid` WHERE product_id=$p_id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      $_SESSION['message'] = 'Product removed from cart';
      header('location: cart.php');
    die();
?>