<?php
// require 'createdb.php';
include('connect.php');
// Fetch values from form
$first_name =  $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
//echo "$first_name  $last_name  $email $phone";

//Query to insert values in table
$sql = "INSERT INTO customers (first_name, last_name, email, password, phone, address1, address2, state, city, pincode)
VALUES('$first_name', '$last_name', '$email', '$password', '$phone', '$add1', '$add2', '$state', '$city', '$pincode' )";
// VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo '<script>alert("Successfully Registered")</script>';
header("Location: login.html");

$conn->close();
?>