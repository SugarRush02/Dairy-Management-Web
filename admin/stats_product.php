<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DMS-View Stats</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
</head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script> 
    <script>  
    $(function(){ 
      $("#header").load("header.html");  
      $("#footer").load("footer.html");  
    }); 
    </script> 
<body>
    <div id="header"></div>
<!-- <div class="container">
    <br><br>
  <h2>Orders : </h2>
  </div> -->
  
  <style>
    .center {
  text-align: center;
  padding:30px;
  /* border: 3px solid green; */
}

</style>
</head>
<script>
function back(){
    window.location.href = "stats.php";

}
    </script>
<body>
<button style="" onclick="back()">
        Back
</button>
    <div  class="center">
<!-- <table>
<tr>
<th>Order ID</th>
<th>Product ID</th>
<th>Product Name</th>
<th>Quantity</th>
<th>Cost</th>
<th>Phone</th>
<th>Date %</th>
<th>Stock</th>
<th>Unit Price</th>


</tr> -->
<?php
$total_qty=0;
$prod_array=array();
$prodcat_array=array();
$prodname_array=array();
$qty_array=array();
$conn = mysqli_connect("localhost:3307", "root", "", "dms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $prod_id=$row["product_id"];
    $sql1 = "SELECT * FROM products where p_id='$prod_id'";
    // $result1 = $conn->query($sql1);
    // $value1 = $row["p_cat"];
    $result1 = mysqli_query($conn,$sql1);
    $ro = $result1->fetch_assoc();
    $id=$ro['p_id'];
    $value1=$ro['p_name']." ".$ro['p_brand'];
    // $value1 = mysqli_fetch_object($result1);
    // $value1=(string)$value1->p_name;
    // $value2=(string)$value1->p_brand;
    // $value1.=$value2;
    // var_dump($value1);
            $total_qty+=$row["product_quantity"];

    if (!in_array($id, $prod_array)) {
        // echo $row["product_id"]."  ". $row["product_quantity"] ."<br><br>";
        $prod_array[]=$row["product_id"];
        $pid=$row["product_id"];
        $sq = "SELECT p_brand FROM products where p_id='$pid'";
        // $result1 = $conn->query($sql1);
        // $value1 = $row["p_cat"];
        $res = mysqli_query($conn,$sq);
        $val = mysqli_fetch_object($res);
        $val=(string)$val->p_brand;


        $prodname_array[]=$row["product_name"]." ".$val;
        // $prodcat_array[]=$value1;
        $qty_array[]=$row["product_quantity"];
        // $key = array_search($row["product_id"], $prod_array);
        // echo $key."  ". $row["product_quantity"] ."<br><br>";
    }
    else{
        $key = array_search($row["product_id"], $prod_array);
        
        $qty_array[$key] = (int)$qty_array[$key]+(int)$row["product_quantity"];
        // $total_qty+=$row["product_quantity"];
        // echo $key."  ". $qty_array[$key] ."<br><br>";
    
    
    }
    // echo "<tr><td>" . $row["order_id"]. "</td><td>" . $row["product_id"] . "</td><td>" . $row["product_name"]. "</td><td>" . $row["product_quantity"]. "</td><td>" . $row["total_cost"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["date"]. "</td></tr>";
    }
    // echo "</table>";
    } else { echo "0 results"; }
// if ($result->num_rows > 0) {
// // output data of each row
// while($row = $result->fetch_assoc()) {
//     $prod_id=$row["product_id"];
// $sql1 = "SELECT p_cat FROM products where p_id='$prod_id'";
// // $result1 = $conn->query($sql1);
// // $value1 = $row["p_cat"];
// $result1 = mysqli_query($conn,$sql1);
// $value1 = mysqli_fetch_object($result1);
// if (!in_array($row["product_id"], $prod_array)) {
//     // echo $row["product_id"]."  ". $row["product_quantity"] ."<br><br>";
//     $total_qty+=$row["product_quantity"];
//     $prod_array[]=$row["product_id"];
//     $prodname_array[]=$row["product_name"];
//     $prodcat_array[]=$value1;
//     $qty_array[]=$row["product_quantity"];
//     $key = array_search($row["product_id"], $prod_array);
//     // if (!in_array($value1, $prodcat_array)){
//     //     $prodcat_array[]=$value1;
//     // }
//     // echo $key."  ". $row["product_quantity"] ."<br><br>";
// }
// else{
//     $key = array_search($row["product_id"], $prod_array);
    
//     $qty_array[$key] = (int)$qty_array[$key]+(int)$row["product_quantity"];
//     $total_qty+=$row["product_quantity"];
//     // echo $key."  ". $qty_array[$key] ."<br><br>";


// }
// // echo "<tr><td>" . $row["order_id"]. "</td><td>" . $row["product_id"] . "</td><td>" . $row["product_name"]. "</td><td>" . $row["product_quantity"]. "</td><td>" . $row["total_cost"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["date"]. "</td></tr>";
// }
// // echo "</table>";
// } else { echo "0 results"; }
// echo "<pre>";
// print_r($prodname_array);
// echo "</pre>";
// // // print_r($prod_array);
// // // print_r($qty_array);
// echo "<pre>";
// print_r($qty_array);
// echo "</pre>";
// echo $total_qty;
$conn->close();
?>
<!-- </table> -->
</div>
<?php
 
$dataPoints = array();

foreach($prod_array as $value)
    {
        $key = array_search($value, $prod_array);
        // echo $prodname_array[$key].",".((int)$qty_array[$key]/(int)$total_qty*100);

        $dataPoints[]= array("label"=>"$prodname_array[$key]", "y"=>((int)$qty_array[$key]/(int)$total_qty*100));    
    }
    // echo "<pre>";
    // print_r($dataPoints);
    // echo "</pre>";
?>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Data Based on Products Sold"
	},
	subtitles: [{
		text: " "
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
    <div class="container">
    </div>
    <div id="chartContainer" style="height: 600px; width: 100%;"></div>


<!-- <div id="footer"></div> -->
<?php //include('footer.html'); ?>

</body>
</html>
