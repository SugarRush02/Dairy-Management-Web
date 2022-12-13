<?php
function checkQty($product_id){
    $conn = new mysqli('localhost:3307', 'root', '', 'dms');
    $sqlc = "SELECT * FROM products where p_id=$product_id";
    $resultc = mysqli_query($conn, $sqlc);  
    $rowc = mysqli_fetch_array($resultc, MYSQLI_ASSOC);
    $count = mysqli_num_rows($resultc); 
    if($rowc['p_quantity']<=0){

    }
}
?>