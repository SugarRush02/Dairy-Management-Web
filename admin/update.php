<?php
session_start();
if(isset($_POST['search'])){
    try{
$id=$_POST['spid'];
// echo "$id";
$_SESSION['searchP']=$id;

$conn = new mysqli('localhost:3307', 'root', '', 'dms');
$sql = "SELECT * FROM products where p_id='$id'";
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $p_id=$row['p_id'];
        $p_name=$row['p_name'];
        $p_brand=$row['p_brand'];
        $p_desc=$row['p_desc'];
        $p_cat=$row['p_cat'];
        $p_discount=$row['p_discount'];
        $p_quantity=$row['p_quantity'];
        $p_cost=$row['p_cost'];
    }catch(Exception $e) {
        // echo 'Message: ' .$e->getMessage();
        echo " ";
      }
}
// session_start();
if(isset($_POST['update']) and isset($_SESSION['searchP'])){
    try{
$id=$_SESSION['searchP'];
// echo "$id";
unset($_SESSION['searchP']);
$p_id=$_POST['pid'];
$p_name=$_POST['pname'];
$p_brand=$_POST['pbrand'];
$p_desc=$_POST['pdesc'];
$p_cat=$_POST['pcat'];
$p_discount=$_POST['pdiscount'];
$p_quantity=$_POST['pqty'];
// echo $p_quantity;
$p_cost=$_POST['pprice'];
$conn = new mysqli('localhost:3307', 'root', '', 'dms');
$sql = "UPDATE products SET p_id='$p_id', p_name='$p_name', p_brand='$p_brand', p_desc='$p_desc' , p_cat='$p_cat', p_discount='$p_discount', p_quantity='$p_quantity', p_cost='$p_cost' WHERE p_id='$id'";
// echo $sql;
if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
    // $_SESSION['message'] = 'Product added to cart';

  } else {
    echo "Error updating record: " . $conn->error;
  }
        
    }catch(Exception $e) {
        // echo 'Message: ' .$e->getMessage();
        echo " ";
      }
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DMS-Update product</title>
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
    window.location.href = "products.php";

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
    <script>
      function onLogout(){
        var confirmLogout = confirm("Are you sure you want to logout?");
            if (confirmLogout){
              location.replace("../login/login.html");}
            else{
              location.assign("../admin/admin.php")
            }
      }
    </script>
      </nav>
      <br>
      <div class="container">
  <h2>Update Product Details : </h2></div>
  <br>
  <br>
  <div class="container">
<form action="update.php" method="post" >
                        <div class="input-group">
                        <div class="col-sm-3">
                        <input type="text" class="form-control" id="spid" placeholder="Search By Product Id" name="spid" required></div>
                            <!-- <input type="text" name = "valueToSearch"class="form-control" placeholder="Search for products"> -->
                            <div class="input-group-append">
                                <!-- <span class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </span> -->
                                <input type="submit" name="search" class="btn btn-primary bg-dark" value="Search">
                                    <!-- Search
                                    </button> -->
                            </div>
                        </div>
                    </form>
                    <br><br>
    <?php if(isset($_POST['search'])){ ?>
  <form action="update.php" method="post" enctype="multipart/form-data">
    
    <div class="row">
      <div class="col-sm">
      <div class="form-group">
      <label for="pid">Product ID:</label>
      <input type="text" class="form-control" id="pid" value="<?php echo $p_id; ?>" name="pid">
    </div><br></div>
    
      <div class="col-sm">
    <div class="form-group">
      <label for="pname">Product Name:</label>
      <input type="text" class="form-control" id="pname" value="<?php echo $p_name; ?>" name="pname">
    </div><br></div>
    <div class="col-sm">
    <div class="form-group">
      <label for="pbrand">Product Brand:</label>
      <input type="text" class="form-control" id="pbrand" value="<?php echo $p_brand; ?>" name="pbrand">
    </div><br></div>
    </div>
    <div class="row">
        <div class="col-sm">
    <div class="form-group">
        <label for="pdesc">Product Desc:</label>
        <input type="text" class="form-control" id="pdesc" value="<?php echo $p_desc; ?>" name="pdesc">
      </div><br>
    </div>
    <div class="col-sm">
      <div class="form-group">
        <label for="pqty">Product Category:</label>
        <input type="text" class="form-control" id="pcat" value="<?php echo $p_cat; ?>" name="pcat">
      </div><br></div></div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="pprice">Product Discount:</label>
            <input type="text" class="form-control" id="pdiscount" value="<?php echo $p_discount; ?>" name="pdiscount">
          </div><br></div>
        <div class="col-sm">
      <div class="form-group">
        <label for="pqty">Product Quantity:</label>
        <input type="number" class="form-control" id="pqty" value="<?php echo $p_quantity; ?>" name="pqty">
      </div><br></div>
      <div class="col-sm">
      <div class="form-group">
        <label for="pprice">Product Price:</label>
        <input type="text" class="form-control" id="pprice" value="<?php echo $p_cost; ?>" name="pprice">
      </div><br></div>
      
      
    </div>
    <div>
    <?php
    if(isset($_POST['search'])){
    $db = new mysqli("localhost:3307", "root", "", "dms");
                        // Get image data from database 
                        $id=$row['p_id'];
                        $res = $db->query("SELECT p_image FROM p_image where p_id=$id"); 


                        if($res->num_rows > 0){ ?> 
                            <div class="gallery" style="height:225px;width:225px;"> 
                                <?php while($ro = $res->fetch_assoc()){ ?> 
                                    <!-- <h1 ><?php echo base64_encode($ro['p_image']); ?></h1> -->
                                    <img class="img-fluid " src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ro['p_image']); ?>" /> 
                                <?php } ?> 
                            </div> 
                        <?php }else{ ?> 
                            <p class="status error">Image(s) not found...</p> 
                        <?php } }
                        ?>
                        </div>
      <!-- <input type="file" onchange="readURL(this);" required /><br>
    <!-- <img id="pimage" src="#" alt="Uploaded image" style="border: 10px;border-color: black ;" /><br><br><br> --> 
    
    <!-- <p><img id="output" width="200" /></p> -->
    <!-- <input type="submit" class="bg-dark text-light" value="Submit" style="width: 200px;height: 50px;border-radius: 10px;"> -->
    <!-- <a href="products.html" class="bg-dark text-light" style=" border:5px;padding: 10px;border-style: ridge;border-radius: 10px; border-color: grey; font-size: 20px; text-decoration: none;" >
      Submit
       <button class="btn">Submit</button>
  </a>   <br><br> -->
  <input type="submit" name="update" class="btn btn-primary bg-dark justify-content-center" value="Update">

  </form>
  <?php } ?>
  <br><br>
</div>
 
 
<!-- <div id="footer"></div> -->


  <!-- Footer -->
<!-- Footer -->
</body>
</html>