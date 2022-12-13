
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMS-Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
  <?php include('header.html'); ?>
    <!-- <nav class="navbar bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1 text-light">Dairy Management System</span>
          <a href="https://www.w3schools.com/bootstrap/bootstrap_get_started.asp" class="text-muted left">About </a>
          <a href="https://www.w3schools.com/bootstrap/bootstrap_get_started.asp" class="text-muted1 left">Contact </a>
        </div>
      </nav> -->

    <div class="container my-4">
        <h4 class="mb-3">
            <small class="text-muted"></small>
          </h4>
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../customer/img/carousel-1.jpg" class="d-block w-100" style="height: 350px;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../customer/img/carousel-2.jpg" class="d-block w-100" style="height: 350px;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEWjy/ClzfKLrs53lbCNr9ACe2k/AAABUklEQVR4nO3QQRHDMBAAMfds/piT6cuZpSBB0NpnuJ295sfXvCeLm5NyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclL/E75m7TPczn4A2+QKta9UkDwAAAAASUVORK5CYII=" class="d-block w-100" style="height: 350px;" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> -->
          <h4 class="my-3">
            Welcome!
          </h4>
    <div class="container-fluid text-center">
        <div class="row my-3">
            <div class="col-md-4">
                <div class="card" style="height:200px;">
                    
                    <div class="card-body">
                    <h5 class="card-title">Products</h5>
                        <p class="card-text">Allows admin to view, manage and edit product details.</p>
                        <!-- <a href="#" class="btn btn-primary">Go to Product Section</a> -->
                        <a href="products.php" >
                          <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height:200px;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <p class="card-text">Allows admin to view, manage and monitor customer details.</p>
                        <!-- <a href="#" class="btn btn-primary">Go to Customer Details</a> -->

                        <a href="customer.php" >
                          <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                      </a>                      </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"style="height:200px;" >
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">Allows admin to view all the previous completed order details.</p>
                        <!-- <a href="#" class="btn btn-primary">Go to Supplier Details</a> -->

                        <a href="orders.php" >
                          <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                      </a>                      </div>
                </div>
            </div>
            

        </div>
        <div class="row my-3 justify-content-center">
            <div class="col-md-4">
                <div class="card" style="height:200px;">
                    <div class="card-body">
                    <h5 class="card-title">Sales</h5>
                        <p class="card-text">The purpose of POS is to allow admin to monitor and record all inventory and transactions .</p>
                        <!-- <a href="#" class="btn btn-primary">Go to POS</a> -->
                        <a href="sales.php" >
                        <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height:200px;">
                    <div class="card-body">
                        <h5 class="card-title">Statistics</h5>
                        <p class="card-text">The value or amount of the total sales of  company's products for a particular period.</p>
                        <!-- <a href="#" class="btn btn-primary">View Statistics</a> -->
                        <a href="stats.php" >
                          <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                      </a>
                    </div>
                </div>
            <!-- <div class="col-md-4">
                <div class="card" style="height:200px;">
                    <div class="card-body">
                        <h5 class="card-title">Bills</h5>
                        <p class="card-text">Allows admin to view previous purchases of products.</p>
                        <a href="#" class="btn btn-primary">View Bills</a>
                        <a href="#" >
                          <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height:200px;">
                    <div class="card-body">
                        <h5 class="card-title">Balance</h5>
                        <p class="card-text">View pending amount balance of customers and suppliers.</p>
                        <a href="#" class="btn btn-primary">View Balance</a>
                        <a href="#" >
                          <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                      </a>
                    </div>
                </div>
            </div> -->
            
           
        </div>
       
        <div class="row my-3 justify-content-center">            
            
            <!-- <div class="col-md-4">
                <div class="card" style="height:200px;">
                    <div class="card-body">
                        <h5 class="card-title">Statistics</h5>
                        <p class="card-text">The value or amount of the total sales of  company's products for a particular period.</p>
                        <a href="#" class="btn btn-primary">View Statistics</a>
                        <a href="stats.php" >
                          <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                      </a>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small bg-dark text-light pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
 
      <!-- Grid row -->
      <div class="row">
 
        <!-- Grid column -->
        <div class="justify-content-center">
 
          <!-- Content -->
          <h5 class="text-uppercase">Dairy Management System</h5>
          <p>Hope u like this app  <3</p>
 
        </div>
        <!-- Grid column -->
 
        <hr class="clearfix w-100 d-md-none pb-3">
 
      
 
      </div>
      <!-- Grid row -->
 
    </div>
    <!-- Footer Links -->
 
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="/" class="text-decoration-none text-white-50">DMS.com</a>
    </div>
    <!-- Copyright -->
 
  </footer>
  <!-- Footer -->
   
</body>
</html>