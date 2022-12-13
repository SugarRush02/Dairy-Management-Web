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
<title>Dairyverse-Edit Profile</title>
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

    <div class="col-xl-8 order-xl-1 container-fluid py-4">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit User Information</h3>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Edit</a>
                </div> -->
              </div>
            </div>
            <div class="card-body">
              <form action="save_cd.php" method="post">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input name="email" type="email" id="email" class="form-control form-control-alternative" placeholder="Enter Email address" value="<?php echo $row['email']; ?>"disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Phone number</label>
                        <input name="phone" type="text" id="phone" class="form-control form-control-alternative" placeholder="Enter Phone Number" value="<?php echo $row['phone']; ?>"disabled>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" name="first_name" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $row['first_name']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" name="last_name" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['last_name']; ?>">
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
                        <label class="form-control-label" for="input-address">Address 1</label>
                        <input name="add1" id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['address1']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address 2</label>
                        <input name="add2" id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['address2']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input name="city" type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="<?php echo $row['city']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">State</label>
                        <input name="state" type="text" id="input-country" class="form-control form-control-alternative" placeholder="State" value="<?php echo $row['state']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input name="pincode" type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code" value="<?php echo $row['pincode']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-1 text-right">
                  <!-- <a href="#!" class="btn btn-sm btn-primary">Save Changes</a> -->
                  <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
</body>
</html>