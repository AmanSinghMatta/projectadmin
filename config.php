<?php
/*

Author Aman

This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_name', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project2admin');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_name, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
    
?>