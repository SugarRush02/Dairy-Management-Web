<?php
// Start the session

	session_start();
    if(!isset($_SESSION['loggedin'])){
        $_SESSION['loggedin']=false;
    }
    // elseif($_SESSION['loggedin']==true and $_SESSION['usertype']=='Admin'){
    //     $_SESSION['loggedin']=false;
    //     $_SESSION['user']=null; 
    //     $_SESSION['usertype'] = 'Customer';

    // }
	//initialize cart if not set or is unset
	// if(!isset($_SESSION['cart'])){
	// 	$_SESSION['cart'] = array();
	// }

	//unset qunatity
	// unset($_SESSION['qty_array']);
?>
<?php 
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "dms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); 
   
$sql = "select * from products ORDER BY RAND()LIMIT 8;";
    $result = mysqli_query($conn,$sql);
    ?>
<?php //include('header.php'); ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dairyverse-home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
      $("#carousel").load("carousel.html");  
      $("#footer").load("footer.html");  
    }); 
    </script> 
<body>
    <!-- Topbar Start -->
<?php
?>
    
<div id="header"></div> 
    <!-- Navbar Start -->
    <div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
           
            <!-- <form action="shop.php" method="post">
            <select onchange="this.form.submit()" class="shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" name="cat" id="cat" data-toggle="collapse" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <option class="nav-item nav-link" value="">Category</option>
                <option class="nav-item nav-link" value="Milk">Milk</option>
                <option class="nav-item nav-link" value="Yogurt">Yogurt</option>
                <option class="nav-item nav-link" value="Ice-Cream">Ice-Cream</option>
                <option class="nav-item nav-link" value="Butter">Butter</option>
                <option class="nav-item nav-link" value="Eggs">Eggs</option>
                <option class="nav-item nav-link" value="Paneer">Paneer</option>
              </select></form>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                
            </nav> -->
        </div>
        <div class=" container-fluid">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="home.php" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1 text-l">D</span>Dairyverse</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-1" style="">
                    <br>
                <form action="shop.php" method="post">
            <select onchange="this.form.submit()" class="shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" name="cat" id="cat" data-toggle="collapse" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <option class="nav-item nav-link" value="">Category</option>
                <option class="nav-item nav-link" value="Milk">Milk</option>
                <option class="nav-item nav-link" value="Cheese">Cheese</option>
                <option class="nav-item nav-link" value="Curd">Curd</option>
                <option class="nav-item nav-link" value="Ice-Cream">Ice-Cream</option>
                <option class="nav-item nav-link" value="Butter">Butter</option>
                <!-- <option class="nav-item nav-link" value="Eggs">Eggs</option> -->
                <option class="nav-item nav-link" value="Paneer">Paneer</option>
                <option class="nav-item nav-link" value="Ghee">Ghee</option>
              </select></form>
                </div>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="shop.php" class="nav-item nav-link ">Shop</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="checkLogin.php?argument1=cart.php" class="dropdown-item">Shopping Cart</a>
                                <a href="checkLogin.php?argument1=checkout.php" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <?php if(($_SESSION['loggedin'])==false){ ?>
                        <a href="../login/login.html" class="nav-item nav-link">Login</a>
                        <?php } ?>
                        <!-- <a href="home.php" class="nav-item nav-link">Login</a> -->
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Settings</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="checkLogin.php?argument1=customer_profile.php" class="dropdown-item">View Profile</a>
                            <a href="checkLogin.php?argument1=view_orders.php" class="dropdown-item">View Orders</a>
                            <?php if(($_SESSION['loggedin'])==true){ ?>
                            <a href="checkLogin.php?argument1=logout.php" class="dropdown-item">Logout</a>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
            </nav>
        </div>
    <!-- </div> -->
<!-- </div> -->
<!-- Navbar End -->
                <div class="container-fluid">
                <!-- <include src="carousel.html"></include> -->
                <!-- <div id="carousel"></div>  -->
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active " style="height: 410px;">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 1000px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Minimum 5% off on all products</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Quality Products</h3>
                    <a href="shop.php" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
            <div class="carousel-caption d-flex  align-items-center justify-content-center">
                <div class="p-3" style="max-width: 1000px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Minimum 5% off on all products</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                    <a href="shop.php" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-2">
        <div class="row px-xl-5 pb-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping for Subscribers</h5>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
    <?php
    function press($cat){
        $_POST['c']=$cat;
        // echo "<script type='text/javascript'> document.getElementById('cat_form').submit(); </script>";
        // echo "$cat";
        header('shop.php');
        die();
    }
    ?>
    <!-- <script>
        function press(){
            
        }
        </script> -->

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Category</span></h2>
        </div>
        <form id="cat_form"action="shop.php" method="post">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1 " >
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px; align-items: center;">
                    <p class="text-right"></p>
                    <button class="cat-img position-relative overflow-hidden mb-3 " onclick="press('Milk')" value="Milk" name="cat" style="border-style: none;background:white;">
                    <img class="img-fluid " src="img/cat-1.jpg" alt="">                    
                    </button>
                    <!-- <a href="" class="cat-img position-relative overflow-hidden mb-3 " >
                        <img class="img-fluid " src="img/cat-1.jpg" alt="">
                    </a> -->
                    <h5 class="font-weight-semi-bold m-0">Milk</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1 ">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px; align-items: center;">
                    <p class="text-right"></p>
                    <button class="cat-img position-relative overflow-hidden mb-3 " onclick="press('Cheese')" value="Cheese" name="cat" style="border-style: none;background:white;">
                    <img class="img-fluid " src="img/cat-2.jpg" alt="">                    
                    </button>
                    <!-- <a href="" class="cat-img position-relative overflow-hidden mb-3 " >
                        <img class="img-fluid " src="img/cat-1.jpg" alt="">
                    </a> -->
                    <h5 class="font-weight-semi-bold m-0">Cheese</h5>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px; align-items: center;">
                    <p class="text-right"></p>
                    <button class="cat-img position-relative overflow-hidden mb-3 " onclick="press('Butter')" value="Butter" name="cat" style="border-style: none;background:white;">
                    <img class="img-fluid " src="img/cat-3.jpg" alt="">                    
                    </button>
                    <!-- <a href="" class="cat-img position-relative overflow-hidden mb-3 " >
                        <img class="img-fluid " src="img/cat-1.jpg" alt="">
                    </a> -->
                    <h5 class="font-weight-semi-bold m-0">Butter</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1 ">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px; align-items: center;">
                    <p class="text-right"></p>
                    <button class="cat-img position-relative overflow-hidden mb-3 " onclick="press('Ice-Cream')" value="Ice-Cream" name="cat" style="border-style: none;background:white;">
                    <img class="img-fluid " src="img/cat-4.jpg" alt="">                    
                    </button>
                    <!-- <a href="" class="cat-img position-relative overflow-hidden mb-3 " >
                        <img class="img-fluid " src="img/cat-1.jpg" alt="">
                    </a> -->
                    <h5 class="font-weight-semi-bold m-0">Ice Cream</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1 ">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px; align-items: center;">
                    <p class="text-right"></p>
                    <button class="cat-img position-relative overflow-hidden mb-3 " onclick="press('Curd')" value="Curd" name="cat" style="border-style: none;background:white;">
                    <img class="img-fluid " src="img/cat-5.jpg" alt="">                    
                    </button>
                    <!-- <a href="" class="cat-img position-relative overflow-hidden mb-3 " >
                        <img class="img-fluid " src="img/cat-1.jpg" alt="">
                    </a> -->
                    <h5 class="font-weight-semi-bold m-0">Curd</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px; align-items: center;">
                    <p class="text-right"></p>
                    <button class="cat-img position-relative overflow-hidden mb-3 " onclick="press('Paneer')" value="Paneer" name="cat" style="border-style: none;background:white;">
                    <img class="img-fluid " src="img/cat-6.jpg" alt="">                    
                    </button>
                    <!-- <a href="" class="cat-img position-relative overflow-hidden mb-3 " >
                        <img class="img-fluid " src="img/cat-1.jpg" alt="">
                    </a> -->
                    <!-- <h5value=Milk class="font-weight-semi-bold m-0">Eggs</h5> -->

                    <h5 class="font-weight-semi-bold m-0">Paneer</h5>
                </div>
            </div>
        </div>
        <!-- <input type="text" value="<?php echo $_POST['cat']; ?>" name = "valueToSearch" hidden> -->
        <script>
            var isSet = <?php echo (isset($_POST["c"])); ?>;
            if(isset==true){
            document.getElementById('cat_form').submit();}
            </script>
        </form>
    </div>
    <!-- Categories End -->


    
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

    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Popular Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
        <?php
        
         //$ctr=1;
         while ($row = mysqli_fetch_array($result)){
                
                // if($ctr>8){
                //     break;
                // }
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
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
                    $dest="home.php";
                    $price=$row['p_cost'];
                    $name=$row['p_name'];
                    $cost=($row['p_cost']-($row['p_cost']*$row['p_discount']/100));
                      $url = "Add_.php?id=$id&name=$name&cost=$cost&price=$cost&dest=$dest";

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
            <?php //$ctr=$ctr+1; 
                } ?>
            
        </div>
    </div>
    <!-- Products End -->


    <!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                    <p>Subscribe using email to stay updated about new offers.</p>
                </div>
                <form action="subscribe.php" method="post">
                    <div class="input-group">
                        <input name="s_email" type="email" class="form-control border-white p-4" placeholder="Email Goes Here" required>

                        <!-- <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here" required> -->
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->





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