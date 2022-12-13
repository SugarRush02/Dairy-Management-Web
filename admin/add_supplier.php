<!DOCTYPE html>
<html lang="en">
<head>
  <title>DMS-Add supplier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Dairy Management System</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                      About
                    </a>
                </li>
                <li class="nav-item" >
                    <button type="button" class="nav-link bg-dark" style="border: none ;" onclick="onLogout()">Logout</button>
                </li>
            </ul>
    </div>
    
    <script>
      function onLogout(){
        var confirmLogout = confirm("Are you sure you want to logout?");
            if (confirmLogout){
              location.replace("C:\\Users\\Rushikesh\\Desktop\\MP5\\login\\login.html");}
            else{
              location.assign("C:\\Users\\Rushikesh\\Desktop\\MP5\\admin\\admin.html")
            }
        //location.replace("C:\\Users\\Rushikesh\\Desktop\\MP5\\login\\login.html")
      }
    </script>
      </nav>
<div class="container">
    <br>
  <h2>Enter Supplier Details : </h2>
  <br>
  <br>
  <form >
    <div class="form-group">
      <label for="sid">Supplier ID:</label>
      <input type="text" class="form-control" id="sid" placeholder="Supplier ID" name="sid">
    </div><br>
    <div class="form-group">
      <label for="sname">Supplier Name:</label>
      <input type="text" class="form-control" id="sname" placeholder="Supplier Name" name="sname">
    </div><br>
    <div class="form-group">
      <label for="sdesc">Supplier Desc:</label>
      <input type="text" class="form-control" id="sdesc" placeholder="Supplier Desc" name="sdesc">
    </div><br>
    <div class="form-group">
        <label for="s_email">Supplier Email:</label>
        <input type="text" class="form-control" id="s_email" placeholder="Supplier Email" name="s_email">
      </div><br>
    <div class="form-group">
        <label for="s_uname">Username:</label>
        <input type="text" class="form-control" id="s_uname" placeholder="Supplier Username" name="s_uname">
      </div><br>
      <div class="form-group">
        <label for="s_pword">Password:</label>
        <input type="number" class="form-control" id="s_pword" placeholder="Product Password" name="s_pword">
      </div><br><br>
      
      <!-- <input type="file" onchange="readURL(this);" /><br>
    <img id="blah" src="#" alt="your image" /><br><br> -->
    <!-- <a href="supplier.html">
    <button type="submit" class="btn btn-default bg-dark text-light" style="height:50px ; width: 100px;" >Submit</button>
</a> -->
<a href="supplier.html" class="bg-dark text-light" style="border:5px;padding: 10px;border-style: ridge;border-radius: 10px; border-color: grey; font-size: 20px; text-decoration: none;" >
    Submit
    <!-- <button class="btn">Submit</button> -->
</a>
    <br><br>
  </form>
</div>
<!-- <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script> -->
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
