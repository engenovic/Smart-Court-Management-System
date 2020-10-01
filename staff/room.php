<?php
session_start();
require 'connection.php';
//include '../admin/SMS.php';
$submit=$_POST['submit'];
if(isset($submit))
{
$name=$_POST['name'];
$desc=$_POST['desc'];
$cap=$_POST['cap'];
//$messge="Congratulations $fname.' '.$lname! You are now a registered member of  unilever Ltd.
//Your Tea Number is $username and Password $password. Do not Share";
//  require_once('regSuccess.php');
//$password=md5($pass);
// echo $name.$desc.$cap;
// exit;
}else {
  ?>
	  <script>
	  alert("Please Check Your Input!!");
	  window.location="add_rooms.php";
	  </script>
	  <?php
}


$sql = "INSERT INTO `cms`.`rooms` (`rid`, `name`, `description`, `capacity`) VALUES (NULL, '$name', '$desc', '$cap')";

  if(mysqli_query($connect, $sql)){
  ?>
  <script>
  alert("successfully Reported");
  window.location="add_rooms.php";
  </script>


  <?php

  } else{
    ?>
  	  <script>
  	  alert("Failed to Report, Please try again!!");
  	  window.location="add_rooms.php";
  	  </script>
  	  <?php
  }



  mysqli_close($connect);
  ?>
