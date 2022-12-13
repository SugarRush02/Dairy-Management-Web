<?php
$email = $_POST['s_email'];
$conn = new mysqli('localhost:3307', 'root', '', 'dms');
$sql = "INSERT INTO subscribers (email)
VALUES('$email')";
if ($conn->query($sql) === TRUE) {
    // $_SESSION['message'] = 'Product added to cart';
    // echo "New record inserted successfully";
    echo "<script>alert('Successfully Subscribed');
    window.location.href = 'home.php';
    </script>";
}
    
else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script>alert('Already Subscribed');
    window.location.href = 'home.php';
    </script>";
  }


?>