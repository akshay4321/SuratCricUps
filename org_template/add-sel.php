<?php
$a_id=$_REQUEST['aid'];
include('connection.php');
$str1="select * from playertbl where player_id='$a_id'";
$result1=mysqli_query($con,$str1);

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
				<a class="brand" href="dashboard.php"><span>SuratCricUps</span></a>
								
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
					<a href="manage_unsel.php">not selected player list</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">selection of player</a>
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
						<form id="add_teams" class="form-horizontal" method="post">
            	<!--<input  type="hidden" name="group_id" value="3" />-->
	
 						  <!--<fieldset>-->
							<div class="control-group">
							  <label class="control-label" for="org_name">organizer caste</label>
							  <div class="controls">
								<select name="selectcaste" onchange="fn(this.value)" id="selectcaste" class="form-control selectpicker">
								<option value="sel">--Select--</option>
								<?php 
								include('connection.php');
								$str="select * from orgtbl";
								$result=mysqli_query($con,$str);
								while($row=mysqli_fetch_array($result))
								{
									?>
									<option value="<?php echo $row['org_id'] ?>"><?php echo $row['caste'] ?></option>
	  
									<?php } ?>
								</select> 
							  </div>
							  <label class="control-label" for="org_city">team name</label>
							  <div class="controls">
								<select name="selectteam" id="selectteam" class="form-control selectpicker">
							
								</select> 
							  </div>
							  <label class="control-label" for="org_caste">player id</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="p_id" id="org_caste" value="<?php echo $_REQUEST['aid'] ; ?>">
								 
							  </div>
							  
							  <?php  while($row1=mysqli_fetch_array($result1))
							  { ?>
							  
							  <label class="control-label" for="org_email">playing role</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="p_role" id="org_email" value="<?php echo  $row1[11]; ?>">
								 
							  </div>
							  <label class="control-label" for="org_phone">status</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="p_status" id="org_phone" value="<?php echo  $row1[15]; ?>">
								 
							  </div>
							  <?php } ?>
							</div>
  							<div class="form-actions">
							  <button type="submit" name="submit" class="btn btn-primary">Add for selection</button>
							   <?php
							   include('connection.php');
							   if(isset($_REQUEST["submit"]))
							   {
								   $s1=$_REQUEST["selectcaste"];
								   $s2=$_REQUEST["selectteam"];
								   $s3=$_REQUEST["p_id"];
								   $s4=$_REQUEST["p_role"];
								   $s5=$_REQUEST["p_status"];
								   
								   $str="insert into selectiontbl(org_id,team_id,player_id,playingrole,status) values('$s1','$s2','$s3','$s4','$s5')";
								   $result=mysqli_query($con,$str);
								   
								   $str1="update playertbl set status='$s5' where status=0 and player_id='$s3'";
								   $result1=mysqli_query($con,$str1);
								   
								   $string="select player_emailid,player_name from playertbl where player_id='$s3'";
								   $resultg=mysqli_query($con,$string);
								   $rowg=mysqli_fetch_array($resultg);
								   
								   $string1="select caste from orgtbl where org_id='$s1'";
								   $resultg1=mysqli_query($con,$string1);
								   $rowg1=mysqli_fetch_array($resultg1);
								   
								   $string2="select team_name from teamtbl where team_id='$s2'";
								   $resultg2=mysqli_query($con,$string2);
								   $rowg2=mysqli_fetch_array($resultg2);
								   
								   if($result1)
								   {   
									require 'PHPMailer/PHPMailerAutoload.php';

									$mail = new PHPMailer;
									$mail->isSMTP();                            // Set mailer to use SMTP
									$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
									$mail->SMTPAuth = true;                     // Enable SMTP authentication
									$mail->Username = 'juhigohil96@gmail.com';          // SMTP username
									$mail->Password = 'j4u3h2i1'; // SMTP password
									$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
									$mail->Port = 587;                          // TCP port to connect to

									$mail->setFrom('juhigohil96@gmail.com', 'Juhi Gohil');
									$mail->addReplyTo('juhigohil96@gmail.com', 'Juhi Gohil');
									$mail->addAddress($rowg[0]);   // Add a recipient

									//$mail->addCC('cc@example.com');
									//$mail->addBCC('bcc@example.com');

									$mail->isHTML(true);  // Set email format to HTML

									$bodyContent = "Dear <b>".$rowg[1]."</b>,</br>";
									$bodyContent .= "<p>Congratulations...You are selected from <b>".$rowg1[0]."</b> organization in <b>".$rowg2[0]." team.</b></p>";
			
									$mail->Subject = 'Your selection for cricket game:';
									$mail->Body    = $bodyContent;

									if(!$mail->send()) {
										echo 'Message could not be sent.';
										echo 'Mailer Error: ' . $mail->ErrorInfo;
									} else {
										echo 'Message has been sent';
									}

								   }
								   header("location:manage_unsel.php");
							   }
							   ?>
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
  <script>
  function fn(id)
  {
	  $.ajax({
		 method:"POST",
			data:{id:id},
			url:"sel-team.php",
			success:function(data)
			{
				$("#selectteam").html(data);
			}
	  });
  }
  </script>	
</body>
</html>
                  