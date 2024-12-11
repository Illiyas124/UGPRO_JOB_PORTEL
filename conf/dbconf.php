<?php
// Database configuration
define('SERVERNAME', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');  
define('DBNAME', 'vavuniyauniversity');  

// Create database connection
$connect = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check the connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
