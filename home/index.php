
<!DOCTYPE html>
<html>
<title>Case Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Law Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Six+Caps' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h1><a href="#">CMS</a></h1>
			</div>

			<div class="hea-rgt">
				<a href="../staff/login.php">Staff Login</a>
			</div>
			<div class="navigation">
				 <nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--/.navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					 <li class="active"><a href="index.php">Home</a></li>
					 	<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			</div>

		</div>
	</div>
	<!--header-top-end-->
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->


	<!-- banner-starts -->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="banner-text">
									<h2>“ONLINE SECURE CASE REPORTING!”</h2>
									<p>We offer an efficient way of reporting case, and then much more! By sending an SMS notification to both the accuser and the defendant. Keeping you in the know about the progress of your case.</p>
									<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
								</div>
							</li>
							<li>
								<div class="banner-text">
									<h2>“EFFECTIVE WAY OF SCHEDULING COURT CASES...”</h2>
									<p>Magistrates are allocated cases according to workload, balancing the workload among the existing magistrates, ensuring all cases are handled on time</p>
									<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
								</div>
							<li>
								<div class="banner-text">
									<h2>“A WHOLE NEW WAY OF HANDLING CASES!”</h2>
									<p>We are going digital! Join the movement, and let you help us get the justice that you deserve</p>
									<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
								</div>
							</li>
						</ul>
					</div>
				</section>

							<!-- FlexSlider -->
									  <script defer="" src="js/jquery.flexslider.js"></script>
									  <script type="text/javascript">
										$(function(){

										});
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									  </script>
								<!-- FlexSlider -->
			</div>
		</div>
	</div>
	<!--banner-end-->

	<!-- cases -->
	<div class="cases">
		<div class="container">
			<div class="col-md-4 cases-left">
				<h3>Cases</h3>
				<img src="images/9.jpg" alt=" " class="img-responsive">
				<p>Our Website can be accessed by a range of devices such as PDAs, mobile phones and tablets as long as the device has an internet connection. This is of great help since not all people can afford computers hence they can access the information using any of the device that they have..</p>
				<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
			</div>
			<div class="col-md-4 cases-left">
			</div>
			<div class="col-md-4 cases-left">
				<h3>Court Rooms</h3>
				<img src="images/6.jpg" alt=" " class="img-responsive">
				<p>The court has a reduced number of case backlogs. This is possible as the report of the pending cases can be generated by the system and the management of the court can make strategies to help in reducing the cases. By this the court gain its trust by the public since they are sure that their cases will be heard and verdict given in time without waiting for long..</p>
				<a class="hvr-shutter-in-horizontal" href="#">Read More</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- cases-end -->
	<!-- footer-starts -->
	<div class="footer">
		<div class="container">
				<div class="clearfix"></div>

			<div class="footer-text">
				<p>© 2020 CMS. All Rights Reserved | Designed by Admin
		</div>
	</div>
	<!-- footer-end -->
</body>
</html>
