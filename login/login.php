<?php
session_set_cookie_params(0);
session_start();
// require 'createdb.php';
include('connect.php');
// Fetch values from form
$email =  $_POST['email'];
$password = $_POST['password'];
$usert=$_POST['usertype'];
$usertype = $_POST['usertype'];

$usertype="dms." . strtolower($usertype)."s";
// echo "$email  $password  $usertype ";
// if($usertype == "Customer"){
//     $sql = "select * from customers where email = '$email' and password = '$password'";  
// }
// if($usertype == "Supplier"){
//     $sql = "select * from suppliers where email = '$email' and password = '$password'";  
// }
// if($usertype == "Admin"){
//     $sql = "select * from admins where email = '$email' and password = '$password'";  
// }
        $sql = "select * from $usertype where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        //$row = mysql_fetch_row($result);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<h1><center> Login successful </center></h1>"; 
            $_SESSION['loggedin'] = true;
            $_SESSION['user']=$email; 
            $_SESSION['usertype'] = $usertype;
            if($usert=='Customer'){
            header("Location: ..\customer\home.php");
            // header("Location: print.php");
            exit();}
            if($usert=='Admin'){
                header("Location: ..\admin\admin.php");
                // header("Location: print.php");
                exit();}
                if($usert=='Supplier'){
                    // header("Location: ..\customer\home.php");
                    // header("Location: print.php");
                    // exit();
                }
        }  
        else{  
            echo "<script> alert('Login failed. Invalid username or password.');
            window.location.href='login.html';</script>"; 
            // sleep(3);
            // header('Location: login.html');
 
        }   
?>