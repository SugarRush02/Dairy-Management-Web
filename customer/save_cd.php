<?php
session_start();
// require 'createdb.php';
include('connect.php');
// Fetch values from form
$first_name =  $_POST['first_name'];
$last_name = $_POST['last_name'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $phone = $_POST['phone'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
echo "$first_name  $last_name   ";
$email=$_SESSION['user'];
//Query to insert values in table
$conn = new mysqli('localhost:3307', 'root', '', 'dms');

$sql = "UPDATE customers SET first_name='$first_name', last_name='$last_name', address1='$add1', address2='$add2', state='$state', city='$city', pincode='$pincode' WHERE email='$email'";

                // if ($conn->query($sql) === TRUE) {
                //     // echo "Record updated successfully";
                //     $_SESSION['message'] = 'Product added to cart';

                //   } else {
                //     echo "Error updating record: " . $conn->error;
                //   }
// $sql = "INSERT INTO customers (first_name, last_name, email, password, phone, address1, address2, state, city, pincode)
// VALUES('$first_name', '$last_name', '$email', '$password', '$phone', '$add1', '$add2', '$state', '$city', '$pincode' )";
// // VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo '<script>alert("Successfully Registered");
window.location.href = "customer_profile.php";</script>';
// header("Location: ");


$conn->close();
?>