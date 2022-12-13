<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(($_SESSION['loggedin'])==true){
$user=$_SESSION['user'];
$userid="";
$length = strlen($user);
for ($i=0; $i<$length; $i++) {
  if ($user[$i] === '@') {
    // $userid[$i] = $user[$i+1];
    // break;
  }else{
    $userid=$userid . $user[$i];

  }
}}
?>