<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn = new mysqli('localhost:3307', 'root', '', 'dms');
$sql = "INSERT INTO contact_us (name, email,subject, message)
VALUES('$name', '$email','$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Thanks for contacting us. We appreciate your effort.');
    window.location.href = 'home.php';
    </script>";
    // $_SESSION['message'] = 'Product added to cart';
}
    // echo "New record inserted successfully";
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>