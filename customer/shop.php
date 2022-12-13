<?php
// Start the session
// header("refresh: 3");
	session_start();
    if(!isset($_SESSION['loggedin'])){
        $_SESSION['loggedin']=false;
    }
    if(isset($_POST['cat'])){$x=$_POST['cat'];}
    
//    echo "$x";
	//unset qunatity
    if(isset($_POST['cat']))
    {
        $valueToFilter = $_POST['cat'];
        // echo "$valueToFilter";
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM products WHERE CONCAT(p_cat) LIKE '%".$valueToFilter."%'";
        $search_result = filterTable($query);
        
    }
    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM products WHERE CONCAT(p_id, p_name, p_brand, p_desc, p_cat, p_discount, p_quantity, p_cost ) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
        
    }
     else {
        $query = "SELECT * FROM products";
        $search_result = filterTable($query);
    }
    
    // function to connect and execute the query
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost:3307", "root", "", "dms");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
    
    
    //  else {
    //     $query = "SELECT * FROM products";
    //     $search_result = filterTable($query);
    // }
    
    // function to connect and execute the query
    // function filterTable($query)
    // {
    //     $connect = mysqli_connect("localhost:3307", "root", "", "dms");
    //     $filter_Result = mysqli_query($connect, $query);
    //     return $filter_Result;
    // }
?>
<?php 
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "dms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);    

    ?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <title>Dairyverse-shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Sidebar -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="sidebar/fonts/icomoon/style.css">

    <link rel="stylesheet" href="sidebar/css/owl.carousel.min.css">

    <link rel="stylesheet" href="sidebar/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="sidebar/css/style.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script> 
    <script>  
    $(function(){ 
      $("#header").load("header.php");  
      $("#navbar").load("navbar.php");  
      $("#sidebar").load("sidebar/sidebar.php");  
      $("#footer").load("footer.html");  
    }); 
    </script> 
    <!-- <script>
        $(document).ready(function(){
            $("$search").keyup(function(){
                $.ajax{[
                    url: 'shop.php',
                    type: 'post',
                    data: (search:$(this).val()),
                    success:function(result){
                        $(*$result).html(result);
                    }
                ]};
            });
        });

        </script> -->
<body>
    <div id="header"></div>
    <div id="navbar"></div>
    <!-- <div id="sidebar"></div> -->



    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="home.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <?php
        if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="container-fluid" >
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				</div>
			</div>
			<?php
			unset($_SESSION['message']);
		}?>
    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary  mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping for Subscribers</h5>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
                    <!-- <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form action="" method="post" id="price">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" name="price" checked id="price" value="">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox"name="price" class="custom-control-input"  id="price " value="0 and 100">
                            <label class="custom-control-label" for="price-1">₹0 - ₹100</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox"name="price" class="custom-control-input"  id="price " value="100 and 200">
                            <label class="custom-control-label" for="price-1">₹100 - ₹200</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" name="price" id="price" value="200 and 300">
                            <label class="custom-control-label" for="price-3">₹200 - ₹300</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" name="price" id="price" value="300 and 400">
                            <label class="custom-control-label" for="price-4">₹300 - ₹400</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" name="price" id="price" value="400 and 500">
                            <label class="custom-control-label" for="price-5">₹400 - ₹500</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                        
                    </form> -->
                </div>
                <!-- <script type="text/javascript">
                    window.onload = function () {
                        var tblFruits = document.getElementById("fil");
                        <?php 
                            
                            // if (isset($_POST['fil'])){
                            //     echo $_POST['fil'];
                            //     $opt=$_POST["fil"]; // Displays value of checked checkbox.
                            //     }?>
                        var chks = tblFruits.getElementsByTagName("INPUT");
                        for (var i = 0; i < chks.length; i++) {
                            chks[i].onclick = function () {
                                for (var i = 0; i < chks.length; i++) {
                                    if (chks[i] != this && this.checked) {
                                        chks[i].checked = false;
                                    }
                                }
                            };
                        }
                    };
                    function clickCheck($val){
                        // $_POST['cat'] = $val;
                    }
                </script> -->
                <!-- Price End -->
                
                <!-- Color Start -->
                
                <!-- Color End -->

                
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <!-- <form action="shop.php">
                                <div class="input-group">
                                    <input type="text" name = "valueToSearch" class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                    <button type="submit" name="search" class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                    </button>
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form> -->
                            <!-- <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <?php 
                    // $opt=$_POST["price"];
                    if (isset($x)){
                        // echo $x;
                        $opt=$x; // Displays value of checked checkbox.
                        }
                    if (isset($_POST['price'])){
                        echo $_POST['price']; // Displays value of checked checkbox.
                        }
                        if (isset($x)){
                            // echo "$x";
                    $sql="SELECT * FROM products WHERE CONCAT(p_cat) LIKE '%".$x."%'";
                    // $result = mysqli_query($conn,$sql);
                    $connect = mysqli_connect("localhost:3307", "root", "", "dms");
                    $search_result = mysqli_query($connect, $sql);
                        }else{
                    $sql = "select * from products ";
                    }
                    // $result = mysqli_query($conn,$sql);
                    // while ($row = mysqli_fetch_array($result))
                    $count = mysqli_num_rows($search_result); 
                    if($count>0){
                    while($row = mysqli_fetch_array($search_result))
                    {?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <?php

                        // Fetch values from form
                        $db = new mysqli("localhost:3307", "root", "", "dms");
                        // Get image data from database 
                        $id=$row['p_id'];
                        $res = $db->query("SELECT p_image FROM p_image where p_id=$id"); 


                        if($res->num_rows > 0){ 
                            if($row['p_quantity']<=0){ ?> 
                                <div class="gallery"> 
                                    <?php while($ro = $res->fetch_assoc()){ ?> 
                                        <!-- <h1 ><?php echo base64_encode($ro['p_image']); ?></h1> -->
                                        <img class="img-fluid w-100 bg-image  " src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ro['p_image']); ?>" /> 
                                        <img class=" w-100" style="position: absolute; top: 100px; left: 0px; border: 1px green solid;" src="img/out-of-stock.png" />
                                    <?php } ?> 
                                </div> <?php } else { ?>
                                    <div class="gallery"> 
                                    <?php while($ro = $res->fetch_assoc()){ ?> 
                                        <!-- <h1 ><?php 
                                            echo base64_encode($ro['p_image']); ?></h1> -->
                                        <img class="img-fluid w-100 bg-image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ro['p_image']); ?>" /> 
                                    <?php } ?> 
                                </div><?php } ?>
                            <?php }else{ ?> 
                                <p class="status error">Image(s) not found...</p> 
                            <?php } 
                        ?>
                        <!-- <img class="img-fluid w-100" src="img/product-1.jpg" alt=""> -->
                    </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $row['p_name']; ?></h6>
                                <h7 class="text-truncate mb-3"><?php echo $row['p_brand']; ?></h7>
                                <div class="d-flex justify-content-center">
                                    <h6>₹ <?php echo $row['p_cost']-($row['p_cost']*$row['p_discount']/100); ?></h6><h6 class="text-muted ml-2"><del>₹ <?php echo $row['p_cost']; ?></del></h6>
                                </div>
                            </div>
                            <?php
                            $id=$row['p_id'];
                            $dest="shop.php";
                            $name=$row['p_name'];
                            $cost=($row['p_cost']-($row['p_cost']*$row['p_discount']/100));
                            $url = "Add_.php?id=$id&name=$name&cost=$cost&price=$cost&dest=$dest";
                            // $url = "Add_.php?id=$id&name=$name&cost=$cost&dest=$dest";

                            ?>
                            <?php 
                    if($row['p_quantity']<=0){ ?>
                    <div class="card-footer d-flex justify-content-center bg-light border">
                        <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a> -->
                        <!-- <a href="addCart.php?argument1=1" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> -->
                        <span class="pull-right "><a href="<?php echo "$url"; ?>" class="btn btn-sm text-dark p-0 disabled"><span class="glyphicon glyphicon-plus"><i class="fas fa-shopping-cart text-primary mr-1"></i></span> Add to Cart</a></span>

                    </div>
                    <?php }else { ?>
                        <div class="card-footer d-flex justify-content-center bg-light border">
                        <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a> -->
                        <!-- <a href="addCart.php?argument1=1" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a> -->
                        <span class="pull-right "><a href="<?php echo "$url"; ?>" class="btn btn-sm text-dark p-0"><span class="glyphicon glyphicon-plus"><i class="fas fa-shopping-cart text-primary mr-1"></i></span> Add to Cart</a></span>

                    </div>
                    <?php } ?>
                        </div>
                    </div>
                    <?php }}else{ ?>
                        <!-- <h5 class="text-center">No Products Available</h5> -->
                        <div class="container-fluid bg-secondary mb-5">
        <!-- <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 50px">
            <h2 class="font-weight-semi-bold text-uppercase mb-3"><i style="color: green;  " class="far fa-clock"></i>  Delivery in 15-30min</h2>
            <div class="d-inline-flex"> -->
            <div class="card-header bg-secondary border-0 text-center">
                        <h4 class="font-weight-semi-bold m-0">No Products Available</h4>
                    </div>
                <h5></h5>
            </div>
                        <?php }
                        ?>

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Amul Cheese (200gm)</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Amul Butter (100gm)</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Kwality Wall's Ice Cream 500ml</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Amul Yogurt 200gm</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-6.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Warana Shrikhand 500gm</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-7.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Egg Tray</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Chitale Ghee 200ml</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Gowardhan Cow Milk 1L</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <div id="footer"></div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>