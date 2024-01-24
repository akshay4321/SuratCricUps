
<!DOCTYPE html>

<html lang="en">
<?php
// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'suratcricups';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
 $result = $db->query("SELECT team_name,count(player_id) FROM selectiontbl s,teamtbl t where t.team_id=s.team_id  group BY s.team_id ");
?>
<head>
	
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
	

	
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['team_name']."', ".$row['count(player_id)']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Most Player selected in which team',
        width: 500,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>	

	
	</head>
	
		

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="dashboard.php"><span>SuratCricUps</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						  
						 
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Organizer								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="profile_org.php"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="../index.php"><i class="halflings-icon off"></i> Logout</a></li>
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
		<div class="row-fluid"><!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="active"><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                 
                  <li><a href="manage_org.php"><i class="icon-group"></i><span class="hidden-tablet">Organisation</span></a></li>
                 
				  <li><a href="manage_teams.php"><i class="icon-text-width"></i><span class="hidden-tablet">Teams</span></a></li>
				 
                  <li><a href="manage_selplayer.php"><i class="icon-user"></i><span class="hidden-tablet">Selection Of Players</span></a></li>
 
                  <li><a href="manage_select.php"><i class="icon-user"></i><span class="hidden-tablet">Selected Players</span></a></li>
                    
				  <li><a href="manage_unsel.php"><i class="icon-user"></i><span class="hidden-tablet">Not Selected Players</span></a></li>
                                 
                 	</ul>
				</div>
			</div>
<!-- end: Main Menu -->
<noscript>
				
			</noscript><!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="dashboard.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
  			<div class="row-fluid">	

				<a href="manage_org.php" class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Organization</p>
					<!--<span class="badge">2</span>-->
				</a>
				<a href="manage_teams.php" class="quick-button metro pink span2">
					<i class="icon-text-width"></i>
					<p>Teams</p>
					<!--<span class="badge">14</span>-->
				</a>
				<a href="manage_selplayer.php" class="quick-button metro blue span2">
					<i class="icon-group"></i>
					<p>Selection of Player</p>
					<!--<span class="badge">25</span>-->
				</a>
				
				<a href="manage_select.php" class="quick-button metro green span2">
					<i class=" icon-user "></i>
					<p>Selected Player</p>
                    <!--<span class="badge">6</span>-->
				</a>
				<a href="manage_unsel.php" class="quick-button metro red span2">
					<i class="icon-user"></i>
					<p>Not Selected Player</p>
					<!--<span class="badge">9</span>-->
				</a>
                
 				
				<div class="clearfix"></div><br/>
					
			</div><!--/row-->	 
 			
			</div>
			
			<br>
			<div id="piechart"></div>
</div><!--/.fluid-container-->
	
<!-- end: Content -->

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
    <!--    <script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="js/jquery-ui-sliderAccess.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	 end: JavaScript-->
	
</body>
</html>
