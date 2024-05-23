<?php
define('DBSERVER','localhost'); //database server
define('DBUSERNAME','root'); //database username
define('DBPASSWORD','S/ycxxp7r'); //database password
define('DBNAME','bankingsignupandlogin'); //database name

/*connect to MySQL database*/ 
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

//check db connection
if($db === false)
{
    die("Error: connection error. " . mysqli_connect_error());  
}