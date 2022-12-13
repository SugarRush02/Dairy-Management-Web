<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMS-View Stats</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<script>
function back(){
    window.location.href = "admin.php";

}
    </script>
<body class="d-flex flex-column min-vh-100">
<?php include('header.html'); ?>
<button style="width:50px;" onclick="back()">
        Back
</button>
      
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
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEWjy/ClzfKLrs53lbCNr9ACe2k/AAABUklEQVR4nO3QQRHDMBAAMfds/piT6cuZpSBB0NpnuJ295sfXvCeLm5NyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclL/E75m7TPczn4A2+QKta9UkDwAAAAASUVORK5CYII=" class="d-block w-100" style="height: 350px;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEWjy/ClzfKLrs53lbCNr9ACe2k/AAABUklEQVR4nO3QQRHDMBAAMfds/piT6cuZpSBB0NpnuJ295sfXvCeLm5NyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclL/E75m7TPczn4A2+QKta9UkDwAAAAASUVORK5CYII=" class="d-block w-100" style="height: 350px;" alt="...">
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
            Statistics : 
          </h4>
    <div class="container-fluid text-center ">
        <div class="row my-3 justify-content-center">
            <div class="col-md-3 ">
                <div class="card" style="height:200px;">
                    
                    <div class="card-body"><br>
                        <h5 class="card-title">Based on Category Sold</h5><br>
                        <a href="stats_cat.php" >
                        <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="height:200px;">
                    
                    <div class="card-body"><br>
                        <h5 class="card-title">Based on Products Sold</h5><br>
                        <a href="stats_product.php" >
                        <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                    </a>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="height:200px; padding:10px;">
                    
                    <div class="card-body"><br>
                        <h5 class="card-title">Earninig per Category</h5><br>
                        <a href="stats_earning.php" >
                        <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                    </a>
                      </div>
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="card" style="height:200px;">
                    <div class="card-body"><br>
                        <h5 class="card-title">Update Product</h5><br>
                        <a href="update.php" >
                            <button class="btn"><i class="fa fa-angle-right" style="font-size: 25px;background-color: RoyalBlue;padding: 12px 20px;border-radius: 5px; float:right;color:white ;"></i></button>
                        </a>                      </div>
                </div>
            </div> -->
            

        
       
        
        </div>
    </div>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small bg-dark text-light pt-4 mt-auto">

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