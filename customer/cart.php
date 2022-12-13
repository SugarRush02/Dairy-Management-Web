<?php

if(!isset($_SESSION)) 
{ 
    session_start();
// if(($_SESSION['loggedin'])==false or $_SESSION['usertype']!='Customer') 
// { 
//     echo "<script>alert('Login to Access')
//     window.location.href = 'home.php';
//     </script>";
//     // header("Location: home.php");
// // die();

// } 
     
    include('gen_uid.php');

} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dairyverse-cart</title>
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
      $("#navbar").load("navbar.php");  
      $("#footer").load("footer.html");  
    }); 
    </script> 
<body>
    <div id="header"></div>
    <div id="navbar"></div>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="home.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <?php 
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-info text-center">
					<?php echo $_SESSION['message']; ?>
				</div>
				<?php
				unset($_SESSION['message']);
			}

			?>

    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
            <form method="POST" action="" >
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php
                        include('gen_uid.php');
                        $conn = new mysqli('localhost:3307', 'root', '', 'dms_cart');
                        $count=0;
                        try {
						$sql = "SELECT * FROM `$userid` ";
						$query = $conn->query($sql);
                        $result = mysqli_query($conn, $sql);  
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        // print_r($row);
                        $count = mysqli_num_rows($result); 
                        
                    }catch(Exception $e) {
                        // echo 'Message: ' .$e->getMessage();
                        echo "";
                      }
						//initialize total
						$total = 0;
                        $shipping = 0;
						if($count>0){
                        $shipping = 20;
                        
						
                        
							while($row = $query->fetch_assoc()){
								?>
                        <tr style="align-items: center;">
                            <td class="align-middle">
                            <?php

                                // Fetch values from form
                                $db = new mysqli("localhost:3307", "root", "", "dms");
                                // Get image data from database 
                                $id=$row['product_id'];
                                $res = $db->query("SELECT p_image FROM p_image where p_id=$id"); 


                                if($res->num_rows > 0){ ?> 
                                    <div class="gallery"> 
                                        <?php while($ro = $res->fetch_assoc()){ ?> 
                                            <!-- <h1 ><?php echo base64_encode($ro['p_image']); ?></h1> -->
                                            <img class="img-fluid" style="width: 50px;float: left;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ro['p_image']); ?>" /> 
                                        <?php } ?> 
                                    </div> 
                                <?php }else{ ?> 
                                    <p class="status error">Image(s) not found...</p> 
                                <?php } 
                                ?><?php echo $row['product_name']; ?></td>
                                <!-- <img src="img/product-1.jpg" alt="" style="width: 50px;float: left;" ><?php //echo $row['product_name']; ?></td> -->
                            <td class="align-middle">₹ <?php echo $row['product_price']; ?></td>
                            <td class="align-middle"><?php echo $row['quantity']; ?></td>
                            <!-- <td class="align-middle"> -->
                                <!-- <div class="input-group quantity mx-auto" style="width: 100px;"> -->
                                    <!-- <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div> -->
                                    <!-- <input type="text" name="qty" id="qty" class="form-control form-control-sm bg-secondary text-center" value=1> -->
                                    <!-- <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus" onpressed="incNumber()">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div> -->
                                    
                                    
                                    
									<td class="align-middle">₹ <?php echo $row['total'] ?></td>
									<?php $total += $row['total']; ?>
                                </div>
                            <!-- </td> -->
                            
                            <!-- <td class="align-middle">₹ <?php //echo $row['p_cost']; ?></td> -->
                            <td class="align-middle"><a href="Delete_.php?id=<?php echo $row['product_id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                            <!-- <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td> -->
                        </tr>
                        <?php
								// $index ++;
							}
						}
						else{
							?>
                            <tr>
								<td colspan="5" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}

					?>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <!-- <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div> -->
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">₹<?php echo number_format($total, 2); ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">₹<?php echo $shipping; ?></h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">₹<?php echo number_format($total, 2)+$shipping; ?></h5>
                        </div>
                        <?php
                        if($count>0){?>
                        <button class="btn btn-block btn-primary my-3 py-3" onclick="window.location.href='checkout.php'">Proceed To Checkout</button>
                        <!-- <a href="home.php">
                        <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                        <input type="submit" class="btn btn-block btn-primary my-3 py-3" value="Proceed To Checkout">

                        </a> -->
                        <?php } ?>
                    </div>
                </div>
            </div>
            <a href="Clear_cart.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Clear Cart</a>

                    </form>
        </div>
    </div>
    <!-- Cart End -->
    

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