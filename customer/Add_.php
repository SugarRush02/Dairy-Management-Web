<?php
	// session_start();
    // include('connect.php');
    // session_start();

    // if(!isset($_SESSION['loggedin'])) 
    // { 
    //     echo "<script>alert('Login to Access')</script>";
    //     header("Location: home.php");
    // die();
    
    // } 


    try{
        $db_host = 'localhost:3307';
        $db_port = '3307';
        $db_username = 'root';
        $db_password = '';
        $db_primaryDatabase = 'dms_cart';
        $conn = new mysqli($db_host, $db_username, $db_password, $db_primaryDatabase);

    include('gen_uid.php');
    // echo "$userid";
    $product_id = $_GET['id'];
        // echo "$product_id";


        $queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `$userid` (
            `id` int(11) unsigned NOT NULL auto_increment,
            `product_id` varchar(30) NOT NULL default '',
            `product_name` varchar(30) NOT NULL default '',
            `quantity` int NOT NULL default '1',
            `total` int NOT NULL ,
            `product_price` int NOT NULL ,
            PRIMARY KEY  (`id`)
        )";
        
        if(!$conn->query($queryCreateUsersTable)){
            echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;
        }


        $conn = new mysqli('localhost:3307', 'root', '', 'dms_cart');
        $sql = "SELECT * FROM `$userid` where product_id=$product_id";
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result); 
        // echo "$count";

    // $result = mysql_query("SELECT * FROM `$userid` WHERE product_id=$product_id");
    // $num_rows = mysql_num_rows($result);
	// check if product is already in the cart
	if($count==0){
        // $userid = $_SESSION['user'];
        
        $product_name = $_GET['name'];
        $dest = $_GET['dest'];
        echo "$product_name";
        $total = $_GET['cost'];
        // $price = $_GET['price'];
        echo "$total";
        $quantity=1;


        $sql = "INSERT INTO `$userid` (product_id, product_name,quantity, total,product_price)
VALUES('$product_id', '$product_name','$quantity', '$total', '$total' )";
		// array_push($_SESSION['cart'], $_GET['id']);
        if ($conn->query($sql) === TRUE) {
            $_SESSION['message'] = 'Product added to cart';
        }
            // echo "New record inserted successfully";
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
		
	else{
        $qty=$row['quantity'];
        $qty+=1;
        $tot=$row['product_price']*$qty;
        // echo "$qty";
		// $_SESSION['message'] = 'Product already in cart';
        $sql = "UPDATE `$userid` SET quantity='$qty', total='$tot' WHERE product_id=$product_id";

                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully";
                    $_SESSION['message'] = 'Product added to cart';

                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
	}

    if(!isset($dest)){
        $dest="shop.php";
    }
	header('location: '. $dest);
    die();
}catch(Exception $e) {?>
    <script> 
    alert('Login to access cart!');
    window.location.href = "home.php";
</script>
    
  <?php }
// header('location: home.php');
    // die();
    // echo 'Message: ' .$e->getMessage();
?>