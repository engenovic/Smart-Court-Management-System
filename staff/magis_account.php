<!DOCTYPE HTML>
<html>
<head>
<title>Magistrate Account</title>
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
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="magis_account.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="m_2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
     <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
           <div class="panel-heading">
             <h2>My Case Schedule</h2>
             <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
           </div>
           <div class="panel-body no-padding" style="display: block;">
             <table class="table table-striped">
          <thead>
             <tr>
               <th>SrNo.</th>
               <th>Case Number</th>
               <th>Court Room</th>
               <th>Date</th>
             </tr>
           </thead>
           <tbody>
             <?php
             include_once 'mg.php';
             if(!empty($mschedule)){
               foreach($mschedule as $msch) {
                   echo "
                   <tr>
                   <td>{$msch['schID']}</td>
                   <td>{$msch['caseID']}</td>
                   <td>{$msch['room']}</td>
                   <td>{$msch['date']}</td>
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
         </div>

<h4> NB: See the Registrar for OB Handout of the respective Cases. </h4>
  <div class="copy_layout">
      <p>Copyright © 2020 Law. All Rights Reserved | Designed by Admin </p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
