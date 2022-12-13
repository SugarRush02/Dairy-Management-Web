<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DMS-View Customers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    
    
</head>
<script>
function back(){
    window.location.href = "admin.php";

}
    </script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script> 
    <script>  
    $(function(){ 
      $("#header").load("header.html");  
      $("#footer").load("footer.html");  
    }); 
    </script> 
<body>
    <div id="header"></div>
    <button style="" onclick="back()">
        Back
</button>
<div class="container">
    <br><br>
  <h2>Customers : </h2>
  </div>
  
  <style>
    .center {
  text-align: center;
  padding:30px;
  /* border: 3px solid green; */
}
table {
/* margin: 1%; */
border-collapse: collapse;
width: 100%;
color: black;
/* font-family: ; */
font-size: 23px;
text-align: left;
}
th {
    padding: 5px;
background-color: #343a40;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<div class="container-fluid pt-6">
        <div class="row px-xl-6">
            <div class="col-lg-12 table-responsive mb-5">
    <div  class="center">
<table class="table table-bordered text-center mb-0">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Password</th>
<th>Address1</th>
<th>Address2</th>
<th>State</th>
<th>City</th>
<th>Pincode</th>


</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "dms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["first_name"]. "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"]. "</td><td>" . $row["password"]. "</td><td>" . $row["address1"]. "</td><td>" . $row["address2"]. "</td><td>" . $row["state"]. "</td><td>" . $row["city"]. "</td><td>" . $row["pincode"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
</div>
    <div class="container">
    </div>
</div>
</div>

<!-- <div id="footer"></div> -->
<?php include('footer.html'); ?>


</body>
</html>
