<?php
session_start();
require 'connection.php';
//include '../admin/SMS.php';
$submit=$_POST['submit'];
if(isset($submit))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$idnumber=$_POST['id'];
$phoneN= '+254'.substr($phone,1);
}else {
  ?>
	  <script>
	  alert("Please Check Your Input!!");
	  window.location="mregister.php";
	  </script>
	  <?php
}

// Check if Magistrate is already registered 
$query = mysqli_query($connect, "SELECT * FROM magistrate WHERE phone=$phoneN");

    if (!$query)
    {
        die('Error: ' . mysqli_error($connect));
    }

if(mysqli_num_rows($query) > 0){
?>
   <script>
   alert("The Magistrate has already been registered!!");
   window.location="mregister.php";
   </script>
<?php
}else{
	$sql = "INSERT INTO `cms`.`magistrate` (`idno`, `fname`, `lname`, `email`, `phone`) VALUES ('$idnumber', '$fname', '$lname', '$email', '$phoneN')";
if(mysqli_query($connect, $sql)){
  ?>
	  <script>
	  alert("Registration Successfull!!!");
	  window.location="index.php";
	  </script>
	  <?php
}
else
{
  die(mysqli_error($connect));
 echo "Error while registering!";
}
}
// End of validation 

// close connection
mysqli_close($connect);
?>
