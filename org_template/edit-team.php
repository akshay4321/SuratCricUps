<?php
$edit_id=$_REQUEST['editid'];
include('connection.php');
$str="select * from teamtbl where team_id='$edit_id'";
$result=mysqli_query($con,$str);
$row=mysqli_fetch_array($result);


if(isset($_REQUEST['submit']))
{
	$edit_id=$_REQUEST['editid'];
$teamname=$_REQUEST['team_name'];
$caste=$_REQUEST['caste'];
$pic=$_FILES['team_image']['name'];
$tmp=$_FILES['team_image']['tmp_name'];
$path="upload/$pic";
$str="update teamtbl set team_name='$teamname',org_id='$caste',logo='$pic' where team_id='$edit_id'";
move_uploaded_file($tmp,$path);
$result=mysqli_query($con,$str);
if(!$result)
{
	echo mysqli_error($con);
}
else
{
        

	header('location:manage_teams.php');
}
}
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
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
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
				<a class="brand" href="dashboard.php"><span>Cricket World Cup</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						  
						 
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Organizer							<span class="caret"></span>
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
						<li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                 
                  <li><a href="manage_org.php"><i class="icon-group"></i><span class="hidden-tablet">Organization</span></a></li>
                 
                  <li><a href="manage_teams.php"><i class="icon-text-width "></i><span class="hidden-tablet"> Teams</span></a></li>
 
                   <li><a href="manage_selplayer.php"><i class="icon-user"></i><span class="hidden-tablet">Selection of Player</span></a></li>
                    
                  <li><a href="manage_select.php"><i class="icon-user"></i><span class="hidden-tablet">Selected player</span></a></li>
                    
                  <li><a href="manage_unsel.php"><i class="icon-user"></i><span class="hidden-tablet">Unselected Player</span></a></li>
				</div>
			</div>
<!-- end: Main Menu -->
<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript> <script src="js/jquery-1.9.1.min.js"></script>

 <div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
        <li>
					<i class="icon-table"></i>
					<a href="manage_org.php">Manage Teams</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Edit Teams</a>
				</li>
			</ul>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Edit Group</h2>
						 
					</div>
					<div class="box-content">
          <p style="color:#990000; font-size:14px;" align="center">
					                    
          </p>
						<form id="add_teams" class="form-horizontal" method="post" enctype="multipart/form-data">
            	<!--<input  type="hidden" name="group_id" value="3" />-->
	
 						  <!--<fieldset>-->
							<div class="control-group">
							  <label class="control-label" for="team_name">Team Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="team_name" id="team_name" value="<?php echo $row[1]; ?>">
 							  </div>
							</div>
   							<div class="control-group">
							  <label class="control-label" for="teams_group_id">Caste</label>
                 <div class="controls">
                 	<select name="caste" id="caste" data-rel="chosen">
                  	 
                                 <?php 
								$str="select * from orgtbl";
								$result=mysqli_query($con,$str);
								while($row=mysqli_fetch_array($result))
								{
									?>
									<option value="<?php echo $row['org_id'] ?>"><?php echo $row['caste'] ?></option>
	  
									<?php } ?>
                                        
            			        </select>
 							</div>
							</div>
                             <div class="control-group">
							  <label class="control-label" for="team_image">Team Icon</label>
                              <div class="controls">
                              <input type="file" name="team_image" id="team_image" value="<?php echo $row[3]?>">
                            </div>
                            </div>
  							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Edit Teams</button>
							   
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
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
	
</body>
</html>
                  