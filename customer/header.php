
       
       
       
       <?php
	session_start();


    
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

                        
                        $conn = new mysqli('localhost:3307', 'root', '', 'dms_cart');
                        $count=0;
                        $ctr=0;
                        // $st=$_SESSION['loggedin'];
                        // echo "$st";
                        if(isset($_SESSION['loggedin'])==true){
                        try {
                        include('gen_uid.php');
                        if($_SESSION['loggedin']==true){
						$sql = "SELECT * FROM `$userid` ";
						$query = $conn->query($sql);
                        $result = mysqli_query($conn, $sql);  
                        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        while($row = mysqli_fetch_array($result)){
                            $ctr+=(int)$row['quantity'];
                            // echo $ctr;
                        }
                        $count = mysqli_num_rows($result); }
                    }catch(Exception $e) {
                        // echo 'Message: ' .$e->getMessage();
                        echo "";
                      }}
?> 
        <div class="container-fluid">
            <div class="row bg-secondary py-2 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark" href="">FAQs</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Help</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Support</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-dark pl-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center py-3 px-xl-5 bg-dark">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="home.php" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold text-light"><span class="text-primary font-weight-bold border px-3 mr-1 text-l">D</span>Dairyverse</h1>
                    </a>
                </div>
                <div class="col-lg-6 col-6 text-left">
                    <form action="shop.php" method="post">
                        <div class="input-group">
                            <input type="text" name = "valueToSearch"class="form-control" placeholder="Search for products">
                            <div class="input-group-append">
                                <button type="submit" name="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-6 text-right">
                    <a href="checkLogin.php?argument1=cart.php" class="btn border">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge"><?php echo $ctr; ?></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        
