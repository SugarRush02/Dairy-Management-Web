<?php
    include('gen_uid.php');
    $conn = new mysqli('localhost:3307', 'root', '', 'dms_cart');
    $sql = "DROP TABLE `$userid`";
    $query = $conn->query($sql);
    header("Location: cart.php");
die();
    // $result = mysqli_query($conn, $sql);  
    
    
?>