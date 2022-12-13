<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Dairyverse-shop</title>
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
  <title>Pagination</title>
</head>
<body>
<?php
// connect to database
$con = mysqli_connect('localhost:3307','root','');
mysqli_select_db($con, 'shop_inventory');

// define how many results you want per page
$results_per_page = 9;

// find out the number of results stored in database
$sql='SELECT * FROM customer';
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM customer LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)) {
  echo $row['customerID'] . ' ' . $row['fullName']. '<br>';
}

// display the links to the pages
// for ($page=1;$page<=$number_of_pages;$page++) {
//   echo '<a href="paging.php?page=' . $page . '">' . $page . '</a> ';
// }
?>
<div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <!-- <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li> -->
                            <?php
                            for ($page=1;$page<=$number_of_pages;$page++) {
                                ?>
                            <li class="page-item"><a class="page-link" href="paging.php?page=  <?php echo $page;?>  ">  <?php echo $page;?> </a></li>
                            <?php }?>
                            <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                            <!-- <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            //   </a>
                            // </li> -->
                          </ul>
                        </nav>
                    </div>


</body>
</html>