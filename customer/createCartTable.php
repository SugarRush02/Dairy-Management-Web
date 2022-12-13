<?php
// session_start();
include('gen_uid.php');

$db_host = 'localhost:3307';
$db_port = '3307';
$db_username = 'root';
$db_password = '';
$db_primaryDatabase = 'dms_cart';
$user=$_SESSION['user'];
// $userid="";
// $length = strlen($user);
// for ($i=0; $i<$length; $i++) {
//   if ($user[$i] === '@') {
//     // $userid[$i] = $user[$i+1];
//     // break;
//   }else{
//     $userid=$userid . $user[$i];

//   }
// }
echo "$userid";
// Connect to the database, using the predefined database variables in /assets/repository/mysql.php
$dbConnection = new mysqli($db_host, $db_username, $db_password, $db_primaryDatabase);

// If there are errors (if the no# of errors is > 1), print out the error and cancel loading the page via exit();
if (mysqli_connect_errno()) {
    printf("Could not connect to MySQL databse: %s\n", mysqli_connect_error());
    exit();
}
$queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `$userid` (
    `id` int(11) unsigned NOT NULL auto_increment,
    `product_id` varchar(30) NOT NULL default '',
    `product_name` varchar(30) NOT NULL default '',
    `quantity` int NOT NULL default '1',
    `total` int NOT NULL ,
    PRIMARY KEY  (`id`)
)";

if(!$dbConnection->query($queryCreateUsersTable)){
    echo "Table creation failed: (" . $dbConnection->errno . ") " . $dbConnection->error;
}


?>