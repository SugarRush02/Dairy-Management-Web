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
    <title>Dairyverse-checkout</title>
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
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="home.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <?php
    $email=$_SESSION['user']; 

    $conn = new mysqli('localhost:3307', 'root', '', 'dms');
    $sql = "SELECT * FROM customers where email='$email'";
    $query = $conn->query($sql);
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result); 

    ?>

    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <form action="" method="post">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" name="first_name" type="text" value="<?php echo $row['first_name']; ?>" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" name="last_name" type="text" value="<?php echo $row['last_name']; ?>"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="email" type="text" value="<?php echo $row['email']; ?>"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" name="phone" type="text" value="<?php echo $row['phone']; ?>"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" name="add1" type="text" value="<?php echo $row['address1']; ?>"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" name="add2" type="text" value="<?php echo $row['address2']; ?>"disabled>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" name="city" type="text" value="<?php echo $row['city']; ?>"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" name="state" type="text" value="<?php echo $row['state']; ?>"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>PIN Code</label>
                            <input class="form-control" name="pincode" type="text" value="<?php echo $row['pincode']; ?>"disabled>
                        </div>
                        <!-- <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>PIN Code</label>
                            <input class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                </div> -->
            </div>
            
            <div class="col-lg-4">
                <?php try{ ?>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    

                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        
                        <?php
                        
                        $conn = new mysqli('localhost:3307', 'root', '', 'dms_cart');
						$sql = "SELECT * FROM `$userid` ";
						$query = $conn->query($sql);
                        $result = mysqli_query($conn, $sql);  
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result); 
                        $_SESSION['count']=$count;
						//initialize total
						$total = 0;
                        $shipping = 0;
						if($count>0){
                        $shipping = 20;
                        
							while($row = $query->fetch_assoc()){
								?>
                        <div class="d-flex justify-content-between">
                            <p><?php echo $row['product_name']; ?> - <?php echo $row['quantity']; ?> Unit</p>
                            <p></p>
                            <p>₹ <?php echo $row['total']; ?></p>
                            <?php $total += $row['total']; ?>
                        </div>
                        <?php
							}
						}
						else{
							?>
                            <tr>
								<td colspan="4" class="text-center">No Item in Cart</td>
							</tr>
							<?php
						}

					?>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">₹<?php echo $total; ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">₹ <?php echo $shipping; ?></h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 name="total_bill" class="font-weight-bold">₹<?php echo $total+$shipping; ?></h5>
                            <?php $_SESSION['tot']=$total+$shipping; ?>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Place Order</h4>
                    </div>
                    <?php 
                    ?>
                    <div class="card-body">
                        <!-- <form action="razorpay.php">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" type="submit"> RazorPay</button>
                    </form> -->
                  <a href="razorpay.php" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">RazorPay</a>
                  <a href="pOrder.php" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Cash on Delivery</a>

                        <!-- <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" onclick='window.location.href="pOrder.php"'> Cash on Delivery</button> -->
                        <!-- <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input onclick="rpay()" type="radio" class="custom-control-input" name="payment" id="razorpay">
                                <label class="custom-control-label" for="razorpay" style="">RazorPay</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck" checked>
                                <label class="custom-control-label" for="directcheck">Cash on Delivery</label>
                            </div>
                        </div> -->
                        
                    </div>
                    <!-- <button type="submit" name="placeOrder" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button> -->
                    <!-- <div class="card-footer border-secondary bg-transparent">
                        <a href="pOrder.php" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</a>
                    </div> -->
                    <?php
                        }catch(Exception $e) {
                            // echo 'Message: ' .$e->getMessage();
                            echo "Cart is Empty.";
                          }?>
                </div>
                
            </div>
        </div>
        <f/orm>
    </div>
    <!-- Checkout End -->


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