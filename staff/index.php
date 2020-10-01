<?php
session_start();
if(!isset($_SESSION['Admin'])) {
	?>
	  <script>
	  alert("You  must first login as the Admin!");
	  window.location="login.php";
	  </script>
	  <?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Registrar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CMS Registrar</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">

			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Kemuma Vanet Ondieki <span class="label label-info"></span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> registrar@cms.co.ke<span class="label label-success"></span></a></li>
						<li class="m_2"><a href="#"> Court Registrar <span class="label label-danger"></span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="divider"></li>
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-users"></i>Clients<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cregister.php">Register</a>
                                </li>
                                <li>
                                    <a href="case_report.php">Report Case</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-user"></i>Magistrates<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="mregister.php">Register</a>
                                </li>
                                <li>
                                    <a href="case_allocate.php">Allocate</a>
                                </li>
                            </ul>
                            <li>
                                <a href="add_rooms.php"><i class="fa fa-tasks"></i>Court Rooms</a>
                            </li>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php
                      include_once  'dashb.php';
                  echo "$Anum_rows" ;
                      ?></strong></h5>
                      <span>Clients</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-file icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php
                      include_once  'dashb.php';
                  echo "$Cnum_rows" ;
                      ?></strong></h5>
                      <span>Cases</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-tasks icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php
                      include_once  'dashb.php';
                  echo "$Rnum_rows" ;
                      ?></strong></h5>
                      <span>Rooms</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
      <div class="col_1">
		    <div class="col-md-4 span_7">
		      <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
		    </div>

            <div class="clearfix"> </div>
	  </div>
	  <div class="span_15">
		<div class="col-md-6 col_4">
		  <!----Calender -------->
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>

    <div class="content_bottom">
      <h3>Case Schedules</h3>
       	<div class="bs-example4" data-example-id="contextual-table">

        <div class="panel-body1">
        <table class="table">
          <thead>
             <tr>
               <th>SrNo.</th>
               <th>Case Number</th>
               <th>Court Room</th>
               <th>Magistrate</th>
               <th>Date</th>
             </tr>
           </thead>
           <tbody>
             <?php
             include_once 'dashb.php';
             if(!empty($schedule)){
               foreach($schedule as $sch) {
                   echo "
                   <tr>
                   <td>{$sch['schID']}</td>
                   <td>{$sch['caseID']}</td>
                   <td>{$sch['room']}</td>
                   <td>{$sch['fullName']}</td>
                   <td>{$sch['date']}</td>
                </tr>
                   ";
                  }
             }
             else{
             echo "No Supplies found!";
             }

             ?>
           </tbody>
         </table>
         </div>
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy; 2020 Law. All Rights Reserved | Designed by Admin </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
