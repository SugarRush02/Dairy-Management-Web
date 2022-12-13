<?php
// require_once __DIR__ . '/db.php';
// $conn = mysqli_connect("localhost:3307", "root", "", "dms");
// if (count($_FILES) > 0) {
//     if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
//         $imgData = file_get_contents($_FILES['userImage']['tmp_name']);
//         $imgType = $_FILES['userImage']['type'];
//         $p_id =  $_POST['pid'];
//         $sql = "INSERT INTO p_images(p_id,p_image) VALUES(?,?)";
//         $statement = $conn->prepare($sql);
//         $statement->bind_param('ss',$p_id ,$imgData);
//         $current_id = $statement->execute() ;
//     }
// }
// session_start();
// require_once __DIR__ . '/connect.php';
// if (isset($_POST['submit'])) {
//   $p_id = $_POST['pid'];
//   // $example2 = $_POST['example2'];
//   echo $example . " " . $example2;

// if (count($_FILES) > 0) {
//     if (is_uploaded_file($_FILES['pimage']['tmp_name'])) {
//         $imgData = file_get_contents($_FILES['pimage']['tmp_name']);
//         $imgType = $_FILES['pimage']['type'];
//         $sql = "INSERT INTO p_image(p_id,p_image) VALUES(?,?)";
//         $statement = $conn->prepare($sql);
//         $statement->bind_param('ss',$p_id, $imgData);
//         $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
//     }}
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DMS-Add product</title>
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
    <!-- <script>
      function onLogout(){
        var confirmLogout = confirm("Are you sure you want to logout?");
            if (confirmLogout){
              location.replace("C:\\Users\\Rushikesh\\Desktop\\MP5\\login\\login.html");}
            else{
              location.assign("C:\\Users\\Rushikesh\\Desktop\\MP5\\admin\\admin.html")
            }
        //location.replace("C:\\Users\\Rushikesh\\Desktop\\MP5\\login\\login.html")
      }
    </script> -->
      </nav>
<div class="container">
    <br>
  <h2>Enter Product Details : </h2>
  <br>
  <br>
  <form action="add_product2.php" method="post" enctype="multipart/form-data">
    
    <div class="row">
      <div class="col-sm">
      <div class="form-group">
      <label for="pid">Product ID:</label>
      <input type="text" class="form-control" id="pid" placeholder="Product ID" name="pid" required>
    </div><br></div>
    
      <div class="col-sm">
    <div class="form-group">
      <label for="pname">Product Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Product Name" name="pname" required>
    </div><br></div>
    <div class="col-sm">
    <div class="form-group">
      <label for="pbrand">Product Brand:</label>
      <input type="text" class="form-control" id="pbrand" placeholder="Product Brand" name="pbrand" required>
    </div><br></div>
    </div>
    <div class="row">
        <div class="col-sm">
    <div class="form-group">
        <label for="pdesc">Product Desc:</label>
        <input type="text" class="form-control" id="pdesc" placeholder="Product Desc" name="pdesc" required>
      </div><br>
    </div>
    <div class="col-sm">
      <div class="form-group">
        <label for="pqty">Product Category:</label>
        <input type="text" class="form-control" id="pqty" placeholder="Product Category" name="pcat" required>
      </div><br></div></div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="pprice">Product Discount:</label>
            <input type="text" class="form-control" id="pdiscount" placeholder="Product Discount" name="pdiscount" required>
          </div><br></div>
        <div class="col-sm">
      <div class="form-group">
        <label for="pqty">Product Quantity:</label>
        <input type="number" class="form-control" id="pqty" placeholder="Product Quantity" name="pqty" required>
      </div><br></div>
      <div class="col-sm">
      <div class="form-group">
        <label for="pprice">Product Price:</label>
        <input type="text" class="form-control" id="pprice" placeholder="Product price" name="pprice" required>
      </div><br></div>
      
    </div>
      <!-- <input type="file" onchange="readURL(this);" required /><br>
    <img id="pimage" src="#" alt="Uploaded image" style="border: 10px;border-color: black ;" /><br><br><br> -->
    
    <input type="file" accept="image/jpeg" name="_imagePost" id="pimage"  required>
    <!-- <p><img id="output" width="200" /></p> -->
    <input type="submit" class="bg-dark text-light" value="Submit" style="width: 200px;height: 50px;border-radius: 10px;">
    <!-- <a href="products.html" class="bg-dark text-light" style=" border:5px;padding: 10px;border-style: ridge;border-radius: 10px; border-color: grey; font-size: 20px; text-decoration: none;" >
      Submit
       <button class="btn">Submit</button>
  </a>   <br><br> -->
  </form>
  <br><br>
</div>
<script>
  var loadFile = function(event) {
    <?php
    //   if (count($_FILES) > 0) {
    //     if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    //         $imgData = file_get_contents($_FILES['userImage']['tmp_name']);
    //         $imgType = $_FILES['userImage']['type'];
    //         $sql = "INSERT INTO images(p_image) VALUES(?)";
    //         $statement = $conn->prepare($sql);
    //         $statement->bind_param('s', $imgData);
    //         $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
    //     }
    // }
      ?>
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
  </script>
<!-- <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pimage')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script> -->
<div id="footer"></div>

<!-- Footer -->
</body>
</html>
