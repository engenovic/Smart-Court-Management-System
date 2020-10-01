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
$loc=$_POST['location'];
$client=$_POST['client'];
$phoneN= '+254'.substr($phone,1);

}else {
  ?>
	  <script>
	  alert("Please Check Your Input!!");
	  window.location="cregister.php";
	  </script>
	  <?php
}
// Check if client is already registered 
$query = mysqli_query($connect, "SELECT * FROM client WHERE phone=$phoneN");

    if (!$query)
    {
        die('Error: ' . mysqli_error($connect));
    }

if(mysqli_num_rows($query) > 0){
?>
   <script>
   alert("The client has already been registered!!");
   window.location="cregister.php";
   </script>
<?php
}else{
	$sql = "INSERT INTO `cms`.`client` (`fname`, `lname`,`phone`, `location`, `type`) VALUES ('$fname', '$lname', '$phoneN', '$loc','$client')";
	if(mysqli_query($connect, $sql)){
		?>
			<script>
			alert("Client Registration Successfull!!!");
			window.location="index.php";
			</script>
			<?php
	}
	else
	{
		die(mysqli_error($connect));
	 echo "Error while registering Client!";
	}
}
// End of validation 

// close connection
mysqli_close($connect);
?>
