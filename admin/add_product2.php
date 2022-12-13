<?php
// require 'createdb.php';
include('connect.php');
// Fetch values from form
$p_id =  $_POST['pid'];
$p_name = $_POST['pname'];
$p_brand = $_POST['pbrand'];
$p_desc = $_POST['pdesc'];
$p_cat = $_POST['pcat'];
$p_discount = $_POST['pdiscount'];
$p_quantity = $_POST['pqty'];
$p_cost = $_POST['pprice'];
// $p_image = $_POST['pimage'];

//echo "$first_name  $last_name  $email $phone";
{
  $_imagePost = file_get_contents($_FILES['_imagePost']['tmp_name']);
//Query to insert values in table
$sql = "INSERT INTO products (p_id, p_name, p_brand, p_desc, p_cat, p_discount, p_quantity, p_cost )
VALUES('$p_id', '$p_name', '$p_brand', '$p_desc','$p_cat', '$p_discount',  '$p_quantity', '$p_cost' )";
// VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$_stmt = $conn->prepare("INSERT INTO p_image (p_id,p_image) VALUES (?, ?)");
$_stmt->bind_param("sb", $p_id, $_null);
$_stmt->send_long_data(1,$_imagePost);
$_stmt->execute();
// $sql = "INSERT INTO p_image (p_id, p_image)
// VALUES('$p_id', '$_imagePost')";
// if ($conn->query($sql) == TRUE) {
//   echo "Image inserted successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
echo "<script>alert('Successfully Added');
window.location.href = 'add_product.php';
</script>";

// header("Location: login.html");
}
// else{
//   echo "Failed";
// }
$conn->close();
?>