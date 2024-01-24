<?php
$con=mysqli_connect("localhost","root","","suratcricups");
if(isset($_REQUEST['submit']))
{
$d=date_create($_POST['datetxt']);
$dt=date_format($d,'Y/m/d');
echo $dt;

$match_id=$_REQUEST['match_id'];
$ground_id=$_REQUEST['ground_id'];
$team1_id=$_REQUEST['team1_id'];
$team2_id=$_REQUEST['team2_id'];
$venue=$_REQUEST['venue'];

$fixtime=$_REQUEST['fixtime'];

$str="insert into fixtbl values ('','$match_id','$ground_id','$team1_id','$team2_id','$venue','$dt','$fixtime')";

$result=mysqli_query($con,$str);

if(!$result)
{
	echo mysqli_error($con);
}
else
{
        

	header('location:fixture.php');
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
	<link rel="stylesheet" href="css/jquery-ui.css">
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
	
		
		
		

<!--<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/636A4AC7-4D54-2544-BFCB-8AF3451A3B90/main.js" charset="UTF-8"></script></head>-->

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
								<li><a href="../logout_admin.php"><i class="halflings-icon off"></i> Logout</a></li>
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
                 
						<li><a href="ground.php"><i class="icon-circle-blank"></i><span class="hidden-tablet">Grounds</span></a></li>
						
						<li><a href="match.php"><i class="icon-th"></i><span class="hidden-tablet">Fixture</span></a></li>
						
						<li><a href="livescore.php"><i class="icon-group"></i><span class="hidden-tablet">Livescore</span></a></li>
                
                        <li><a href="result.php"><i class="icon-envelope"></i><span class="hidden-tablet">Result</span></a></li>
                   <li></li> 
                         
					</ul>
				</div>
			</div>
<!-- end: Main Menu -->
<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript><script src="js/jquery-1.9.1.min.js"></script>

<!--<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<script type="text/javascript">
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#add_teams").validate({
                rules: {
                                        team_name: "required",
 										 
  									},
                   
                messages: { 
										 team_name: "Please enter Teams Name",
  										   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
<style>

#add_teams label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 20px;
    padding: 0;
    text-align: left;
    width: auto;
}-->

</style>
<form method="post">
 <div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
        <li>
					<i class="icon-table"></i>
					<a href="fixture.php">Manage Fixture</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-plus"></i>
					<a href="#">Add Events</a>
				</li>
			</ul>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-plus"></i><span class="break"></span>Add Events</h2>
						 
					</div>
					<div class="box-content">
          <p style="color:#990000; font-size:14px;" align="center">
					           </p>
 						<form id="add_teams" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                       <!--  <input type="hidden" name="tid" value="" />-->
 						  <fieldset>
									
   							<div class="control-group">
							  <label class="control-label" for="teams_group_id">Match ID</label>
								<div class="controls">
								<select name="match_id" id="match_id" data-rel="chosen">
                  	 
                                 <?php 
								$str="select * from matchtbl";
								$result=mysqli_query($con,$str);
								while($row=mysqli_fetch_array($result))
								{
									?>
									<option value="<?php echo $row['match_id'] ?>"><?php echo $row['match_id'] ?></option>
	  
									<?php } ?>
                                        
            			        </select>
 							</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="teams_group_id">Ground Name</label>
								<div class="controls">
								<select name="ground_id" id="ground_id" data-rel="chosen">
                  	 
                                 <?php 
								$str="select * from groundtbl";
								$result=mysqli_query($con,$str);
								while($row=mysqli_fetch_array($result))
								{
									?>
									<option value="<?php echo $row['ground_id'] ?>"><?php echo $row['ground_name'] ?></option>
	  
									<?php } ?>
                                        
            			        </select>
 							</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="teams_group_id">First Team Name</label>
								<div class="controls">
								<select name="team1_id" id="team1_id" data-rel="chosen">
                  	 
                                 <?php 
								$str="select * from teamtbl";
								$result=mysqli_query($con,$str);
								while($row=mysqli_fetch_array($result))
								{
									?>
									<option value="<?php echo $row['team_id'] ?>"><?php echo $row['team_name'] ?></option>
	  
									<?php } ?>
                                        
            			        </select>
 							</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="teams_group_id">Second Team Name</label>
								<div class="controls">
								<select name="team2_id" id="team2_id" data-rel="chosen">
                  	 
                                 <?php 
								$str="select * from teamtbl";
								$result=mysqli_query($con,$str);
								while($row=mysqli_fetch_array($result))
								{
									?>
									<option value="<?php echo $row['team_id'] ?>"><?php echo $row['team_name'] ?></option>
	  
									<?php } ?>
                                        
            			        </select>
 							</div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="venue">Venue</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="venue" id="venue" value="" placeholder="enter venue">
 							  </div>
							</div>
							
							
							
							<div class="control-group">
							  <label class="control-label" for="fixtime">Fix Time</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="fixtime" id="fixtime" value="" placeholder="enter time">
 							  </div>
							</div>
							
							<div class="control-group">
							<label class="control-label" for="fixdate">Fix Date</label>
							<input type='text' name="datetxt" id="datetxt" placeholder="select date"/><br>               
							<br><br>
					
							<?php
							$dt=date('Y/m/d');
							date_default_timezone_set("Asia/Kolkata");
							//echo date('h:i A');
	
							?>
							</div>
    
	
                           
                             <div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Add Event</button>
							   
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
 </div>			

</form>

</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<div class="clearfix"></div>
	
	<!--<<footer>

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
        <!--<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>-->
		<script type="text/javascript" src="js/jquery-ui-sliderAccess.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<!--calendar-->
			
			<script src="js/jquery-ui.js"></script>  
			
			<script>
			$(document).ready(function(){
			$(function (){
                $('#datetxt').datepicker();
				
				});
			});
			</script>
	<!--end calendar-->
	

	<!-- end: JavaScript-->
	
</body>
</html>
                  