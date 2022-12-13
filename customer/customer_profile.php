<?php
session_start();
$conn = new mysqli('localhost:3307', 'root', '', 'dms');
$user=$_SESSION['user'];
// echo "$user";
$result = mysqli_query($conn,"SELECT * FROM customers WHERE email='$user'");
$row = mysqli_fetch_array($result);
$name=$row['first_name'] . $row['last_name'];

?>

<html>
<title>Dairyverse-Profile</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="css/c_profile.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <!-- <div id="navbar"></div> -->

  <!-- Navbar Start -->

<!-- Navbar End -->
  <div class="main-content">
    
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        
        <!-- Brand -->
        <div class="btn text-center">
                  <a href="home.php" style="width:70px;" class="btn btn-sm btn-primary">Back</a>
                </div>
        
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="" target="_blank">User profile</a>

              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../login/images/bg.jpg); background-size: contain; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white" style="font-size: 70px;">Hello <?php echo $row['first_name']; ?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. This is the page where you can see and edit your details that are related to this website.</p>
            <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAMFBMVEVCwPs3vvus3/2z4/275v3E6v7N7f7l9v4wvPsluvun3f3+///1+//r+P7i9P7b8v76J6UHAAABZElEQVR4nO3dTU7CABRG0VIolPrT/e/WDhxoHEhIiB56zwq+O3/JG15e397XdT1vps3p0/G78X7HX51uMt3i/MNlmK7zF4d/bL7HdRmmeXhmh3EPhYe/HvFQW+GpQluFvgp9Ffoq9FXo20XhsUJbhb4KfRX6KvRV6KvQV6GvQl+Fvgp9Ffoq9FXoq9BXoW8XhWOFtgp9Ffoq9FXoq9BXoa9CX4W+Cn0V+ir0Veir0Fehr0Jfhb4KfRX6KvTt4mKoQlyFvgp9Ffoq9FXoq9BXoa9CX4W+Cn0V+ir0Veir0Fehr0Jfhb4KfRX6dvGFpUJchb4KfRX6KvRV6KvQV6GvQl+Fvgp9Ffoq9FXoq9BXoa9CX4W+rXB6/sL5r0c8VIW+Cn0V+ir0Veir0Fehr0Jfhb4KfRX6KvRV6KvQV6GvQl+Fvl0Uniu0Veir0Fehr0Jfhb4KfRX69lF4PTyz6zJclvGZLesHTNAROk32c8MAAAAASUVORK5CYII=" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                </div>
              </div>
              <br><br><br>
              <div class="text-center">
                <h3>
                  <?php echo $row['first_name'] ." ". $row['last_name']; ?><span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $row['city']; ?>, India
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="edit_cd.php" class="btn btn-sm btn-primary">Edit</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Enter Email address" value="<?php echo $row['email']; ?>"disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Phone number</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter Phone Number" value="<?php echo $row['phone']; ?>"disabled>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $row['first_name']; ?>"disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['last_name']; ?>"disabled>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['address1'].", ".$row['address2']; ?>" type="text" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="<?php echo $row['city']; ?>" disabled>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">State</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="State" value="<?php echo $row['state']; ?>" disabled>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code" value="<?php echo $row['pincode']; ?>" disabled>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer"></div>
</body>

</html>