<?php
//Set database credentials
$username='root';
$password='';
$server='localhost';
$database='cms';
//Attempt to connect to the database
$connect=mysqli_connect($server, $username, $password)
or die('Cannot connect to the database because:' .mysql_error());
//Php syntax to specify a database
$db=mysqli_select_db($connect,$database);
?>
