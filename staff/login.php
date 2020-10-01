<!DOCTYPE HTML>
<html>
<head>
<title> Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <h2 class="form-heading">Staff login </h2>
  <div class="app-cam">
	  <form action="signin.php" method="POST">
		<input type="text" class="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
		<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input name="submit" type="submit"></div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password?</a></p></li>
			<li class="new_right"><p class="sign"><a href="../home/index.php"> Go Home</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2020 Law. All Rights Reserved | Designed by Admin</p>
   </div>
</body>
</html>
