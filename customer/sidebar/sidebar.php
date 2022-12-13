<?php 
session_start();

?>
<!-- Sidebar Start -->
<?php if($_SESSION['loggedin']==true){?>
<aside class="sidebar">
  <div class="toggle " style="padding:20px;">
    <a href="#" class="burger js-menu-toggle" style="color:#D19C97;" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
  </div>
  <div class="side-inner">
  
    <div class="profile">
      <!-- <img src="images/person_profile.jpg" alt="Image" class="img-fluid"> -->
      <h3 class="name">Debby Williams</h3>
      <span class="country">New York, USA</span>
    </div>

    <!-- <div class="counter d-flex justify-content-center">
      <div class="row justify-content-center">
        <div class="col">
          <strong class="number">892</strong>
          <span class="number-label">Posts</span>
        </div>
        <div class="col">
          <strong class="number">22.5k</strong>
          <span class="number-label">Followers</span>
        </div>
        <div class="col">
          <strong class="number">150</strong>
          <span class="number-label">Following</span>
        </div> -->
      <!-- </div>
    </div> -->
    
    <div class="nav-menu">
      <ul>
        <li class="active"><a href="checkLogin.php?argument1=customer_profile.php"><span class="icon-home mr-3"></span>View Profile</a></li>
        <li><a href="#"><span class="icon-search2 mr-3"></span>View Orders</a></li>
        <li><a href="#"><span class="icon-notifications mr-3"></span>Notifications</a></li>
        <li><a href="checkLogin.php?argument1=logout.php"><span class="icon-sign-out mr-3"></span>Logout</a></li>

        <!-- <li><a href="#"><span class="icon-location-arrow mr-3"></span>Direct</a></li>
        <li><a href="#"><span class="icon-pie-chart mr-3"></span>Stats</a></li> -->
      </ul>
    </div>
    
  </div>
  
</aside><?php } ?>
<script src="sidebar/js/jquery-3.3.1.min.js"></script>
<script src="sidebar/js/popper.min.js"></script>
<script src="sidebar/js/bootstrap.min.js"></script>
<script src="sidebar/js/main.js"></script>
<!-- Sidebar End -->
