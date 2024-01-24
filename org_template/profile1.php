<?php
session_start();
$con=mysqli_connect("localhost","root","","suratcricups");

$var=$_REQUEST['profileviewid'];
$str="select * from playertbl where player_id='$var' ";
$result=mysqli_query($con,$str);
$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	.aa{
height: 20%;
    width: 80px;
    border-radius: 10px;
    
}
.header{
margin: 60px 0px 0px 620px;
}
.main{

}
.header {
    margin: 10%;
    /* align-self: center; */
    background: rgba(44,66,250,0.5);

    /* align-content: center; */
    margin: 10% 35%;
    /* align-self: center; */
    background: rgba(44,66,250,0.5);
	height:auto;
	
	    border-radius: 33px;
	}

	
	</style>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SuratCricUps</title>
	 <!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/636A4AC7-4D54-2544-BFCB-8AF3451A3B90/main.js" charset="UTF-8"></script></head>

<body style="background-image:url('images/bg1.jpg');">
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"><span>SuratCricUps</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						  
						 
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> admin								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="edit-profile.php"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	<div class="container-fluid-full">
		<div class="row-fluid">    

<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                 
                  <li><a href="manage_org.php"><i class="icon-group"></i><span class="hidden-tablet">Organization</span></a></li>
                 
                  <li><a href="manage_teams.php"><i class="icon-text-width "></i><span class="hidden-tablet">Teams</span></a></li>
 
                   <li><a href="manage_selplayer.php"><i class="icon-group"></i><span class="hidden-tablet">Selection Player</span></a></li>
                    
                  <li><a href="manage_select.php"><i class="icon-user"></i><span class="hidden-tablet">Selected player</span></a></li>
                    
                  <li><a href="manage_unsel.php"><i class="icon-user"></i><span class="hidden-tablet">unselected player</span></a></li>
                    
                         
					</ul>
				</div>
			</div>
<!-- end: Main Menu -->
<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
Resource id #9 <div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">view Profile</a>
				</li>
			</ul>
			
	<div class="bgbox">
  <table class="table">
    <thead>
      <tr>
        <th class="p1">PERSONAL INFORMATION</th>
		<th></th>
        <th class="p1">PLAYER DETAILS</th>
     </tr>
    </thead>
    <tbody class="r1">
      <tr>
        <td>Date of application</td>
		<td><?php echo $row[1] ; ?></td>
        <td>Playing Role</td>
		<td><?php echo $row[11] ; ?></td>
      <tr>
        <td>Date of birth</td>
		<td><?php echo $row[3] ; ?></td>
        <td>Bowling arm</td>
		<td><?php echo $row[12] ; ?></td>
      </tr>
      <tr>
        <td>Phone number</td>
		<td><?php echo $row[4] ; ?></td>
		<td>Bowling pace</td>
		<td><?php echo $row[13] ; ?></td>       
      </tr>
	  <tr>
        <td>Address</td>
		<td><?php echo $row[5] ; ?></td>
        <td>Batting</td>
		<td><?php echo $row[14] ; ?></td>
     </tr>
    <tr>
        <td>Email-ID</td>
		<td><?php echo $row[6] ; ?></td>
        <td>Status</td>
		<td><?php echo $row[15] ; ?></td>
    </tr>
	<tr>
        <td>Gender</td>
		<td><?php echo $row[8] ; ?></td>
		<td></td>
		<td></td>
    </tr>
	<tr>
        <td>Caste</td>
		<td><?php echo $row[9] ; ?></td>
        <td></td>
		<td></td>
    </tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	  
    </tbody>
  </table>
</div>
</div>

 </div>			

</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<!--<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2015 <a href="http://viaviweb.com/" alt="Bootstrap_Metro_Dashboard">viaviweb.com</a></span>
			
		</p>

	</footer>-->
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
       <!-- <script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="js/jquery-ui-sliderAccess.js"></script>
		<script type="text/javascript" src="js/script.js"></script>-->
	<!-- end: JavaScript-->
	
</body>
</html>
                  