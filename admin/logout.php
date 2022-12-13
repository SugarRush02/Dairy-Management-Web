<?php
  session_start();
if(($_SESSION['loggedin'])==true) 
{ 
//     echo "<script>alert('Login to Access')</script>";
//     header("Location: home.php");
// die();

// } 
// if ($_SESSION['user'] != null)
{
    // header("Location: ../login/login.html");

    // header("Location: home.php");
    $_SESSION['user'] = null;
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    echo "<script>
    window.location.href = '../customer/home.php';
    </script>";
    exit();
}
}
// echo '<script>alert("Successfully Registered")</script>';
// header("Location: ../login/login.html");

?>