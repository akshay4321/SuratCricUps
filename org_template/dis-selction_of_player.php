<?php
session_start();
include('connection.php');

$var=$_REQUEST['disid'];
$str="select p.player_id,p.player_name,p.dob,p.phno,p.player_emailid from playertbl p,selectiontbl s where p.player_id=s.player_id and s.team_id='$var'";
$result=mysqli_query($con,$str);
?>
<!DOCTYPE html>
<html lang="en">
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
								<i class="halflings-icon white user"></i> Organizer	<span class="caret"></span>
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
<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">manage selection of player</a></li>
			</ul>

			<div class="row-fluid">	
				<div class="box span12">

					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Manage selection of player</h2>
						 <br>
					</div>
					<div class="box-content">
						
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
																							         		
						  <thead>
							 <tr>
                                  <th>player_id</th>
                                  <th>player_name</th>
								  <th>DOB</th>
								  <th>phone_no</th>
								  <th>email_id</th>
								  <th>action</th>
							  </tr>
						    </thead>   
						  <tbody>
                          <?php  while($row=mysqli_fetch_array($result))
                            { ?>			  
                              <tr>  
								<td><?php echo $row['player_id'] ; ?></td>  
								<td><?php echo $row['player_name'] ; ?></td>  
								<td><?php echo $row['dob'] ; ?></td>  
								<td><?php echo $row['phno'] ; ?></td>  
								<td><?php echo $row['player_emailid'] ; ?></td>
             			        
								<td>
								
								  <button data-toggle="modal" data-target="#myModal" onclick="fn(this.value)" value="<?php echo $row['player_id']; ?>"  class="btn btn-info btn-lg">More Details</button>


								
								<a class="btn btn-danger" href="delsel.php?did=<?php echo $row[0] ; ?>" >
                      <i class="halflings-icon white trash"></i></a>

								</td>
                    
                            <?php } ?>
                               							  
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			<a class="btn btn-info" href="manage_selplayer.php">Back</a>
			</div><!--/row-->

			
			</div>
       
		
	</div><!--/.fluid-container-->
	
<!-- end: Content -->

</div><!--/#content.span10-->
		
	
		
	<div class="modal hide fade" id="myModal1">
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
        
	<!-- end: JavaScript-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Player detail</h4>
        </div>
        <div class="modal-body">
        <table id="modeltbl" class="table table-striped">
		</table>
        </div>
        
      </div>
      
    </div>
  </div>	
  
  <script>
  function fn(id)
  {
	  $.ajax({
		 method:"POST",
			data:{id:id},
			url:"mtbl.php",
			success:function(data)
			{
				$("#modeltbl").html(data);
			}
	  });
  }
  </script>
</body>

</html>