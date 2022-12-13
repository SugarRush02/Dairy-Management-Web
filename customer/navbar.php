<!-- Navbar Start -->
<?php
session_start();
?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script> 
    <script>  
    $(function(){ 
    //   $("#header").load("header.php");  
    //   $("#navbar").load("navbar.php");  
    //   $("#sidebar").load("sidebar/sidebar.php");  
    //   $("#footer").load("footer.html");  
    }); 
    </script> 
<style>
    
</style>
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
                          <!-- <div id="sidebar"></div> -->

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
    </div>
</div>
<!-- Navbar End -->