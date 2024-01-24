<?php
session_start();
include('connection.php');
$str="select * from matchtbl";
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
	<meta name="viewport" content="width=device-width">
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
	
		
		
		
<!--<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/636A4AC7-4D54-2544-BFCB-8AF3451A3B90/main.js" charset="UTF-8"></script>-->
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
						
						<li><a href="matches.php"><i class="icon-th"></i><span class="hidden-tablet">Fixture</span></a></li>
				 
						<li  class="active"><a href="gotolive.php"><i class="icon-group"></i><span class="hidden-tablet">Livescore</span></a></li>
                 
						
 
						<li><a href="result.php"><i class="icon-envelope"></i><span class="hidden-tablet">Result</span></a></li>
                    <li></li>
                  <!--<li><a href="manage_select.php"><i class="icon-user"></i><span class="hidden-tablet">Selected player</span></a></li>
                    
                  <li><a href="manage_unsel.php"><i class="icon-user"></i><span class="hidden-tablet">unselected player</span></a></li>
   						
                        -->
                         
                         
                         
					</ul>
				</div>
			</div>
<!-- end: Main Menu -->
<!-- end: Main Menu -->
<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript><script src="js/jquery-1.9.1.min.js"></script>


</style>

<form method="post" name="form1">
 <div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
        <li>
					<i class="icon-table"></i>
					<a href="#">Manage livescore</a>
				</li>
				
			</ul>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-plus"></i><span class="break"></span>Team selection Livescore</h2>
						 
					</div>
                  <div class="box-content">
				  
				 

<?php
$matchid=$_REQUEST['matchid'];
$team1id=$_REQUEST['team1id'];
$team2id=$_REQUEST['team2id'];
$inning1=$_REQUEST['inning1'];

$_SESSION["mid"]=$matchid;
$_SESSION["t1id"]=$team1id;
$_SESSION["t2id"]=$team2id;

$strbat="SELECT * FROM battinglivetbl where match_id='$matchid' and team_id='$team1id'";
$select =mysqli_query($con,$strbat);


?>
<h2>LIVE BATTING</h2>
<table  border="1" id="scoretb" class="table table-striped table-bordered " >
<tr>
<th style="width:120px;">batsman</th>
<th style="width:100px;">status</th>
<th style="width:100px;">runs</th>
<th style="width:100px;">balls</th>
<th style="width:100px;">4s</th>
<th style="width:100px;">6s</th>
<th style="width:100px;">sr</th>
<th>action</th>
</tr>
<?php
while ($row=mysqli_fetch_array($select)) 
{
 ?>
 <tr id="row<?php echo $row['bat_id'];?>">
 
    <td id="run_val<?php echo $row['bat_id'];?>"><?php echo $row['batsman'];?></td>
	<td id="status_val<?php echo $row['bat_id'];?>"><?php echo $row['status'];?></td>
    <td id="runs_val<?php echo $row['bat_id'];?>"><?php echo $row['runs'];?></td>
	<td id="ball_val<?php echo $row['bat_id'];?>"><?php echo $row['balls'];?></td>
    <td id="fr_val<?php echo $row['bat_id'];?>"><?php echo $row['4s'];?></td>
	<td id="sx_val<?php echo $row['bat_id'];?>"><?php echo $row['6s'];?></td>
	<td id="sr_val<?php echo $row['bat_id'];?>"><?php echo $row['sr'];?></td>
	
  <td>
   <input type='button' class="edit_button btn btn-info" style="display:inline;" value="edit" id="edit_button<?php echo $row['bat_id'];?>" onclick="edit_row('<?php echo $row['bat_id'];?>');">
   <input type='button' class="save_button btn btn-success" style="display:none;" id="save_button<?php echo $row['bat_id'];?>" value="save" onclick="save_row('<?php echo $row['bat_id'];?>');">
   <input type='button' class="delete_button btn btn-danger" style="display:inline;" id="delete_button<?php echo $row['bat_id'];?>" value="delete" onclick="delete_row('<?php echo $row['bat_id'];?>');">
  </td>
 </tr>
 <?php
}
?>

<tr id="new_row">
 
 <td><input type="text" id="new_run" style="width:120px;"></td></td>
 <td><input type="text" id="new_status" style="width:100px;"></td></td>
 <td><input type="text" id="new_runs" style="width:100px;"></td></td>
  <td><input type="text" id="new_ball" style="width:100px;"></td></td>
 <td><input type="text" id="new_fr" onfocus="new1()" style="width:100px;"></td></td>
 <td><input type="text" id="new_sx" style="width:100px;"></td></td>
 <td><input type="text" id="new_sr" style="width:100px;"></td></td>
 
 <td><input type="button" class="edit_button btn btn-normal"  value="Insert Row" onclick="insert_row();"></td>
</tr>
</table>            
<input type="submit" class="delete_button" name="submit1" value="Counting">
<?php
if(isset($_REQUEST['submit1']))
{
 $str11="select sum(runs),team_id,match_id from battinglivetbl where match_id='$matchid' and team_id='$team1id' ";
 $result11=mysqli_query($con,$str11);
 $row11=mysqli_fetch_array($result11);
 
 $wicket="select count(status) from battinglivetbl where status='out'  and match_id='$matchid' and team_id='$team1id'";
 $reswic=mysqli_query($con,$wicket);
 $rowwic=mysqli_fetch_array($reswic);
 
 $over="select round(sum(over),1) from bowlinglivetbl where match_id='$matchid' and team_id='$team2id'";
 $resover=mysqli_query($con,$over);
 $rowover=mysqli_fetch_array($resover);
 
 if($rowwic[0]==2 || $rowover[0]==5.0)
 {
	 $st="insert into totalscoretbl(match_id,team_id,totalrun,over,wicket,inning) values('$matchid','$team1id','$row11[0]','$rowover[0]','$rowwic[0]','$inning1')";
	 $rs=mysqli_query($con,$st);
	 
	 $st1="insert into scorecardbatting select * from battinglivetbl where match_id='$matchid'";
	 $rs1=mysqli_query($con,$st1);
	 
	 $st2="insert into scorecardbowling select * from bowlinglivetbl where match_id='$matchid'";
	 $rs2=mysqli_query($con,$st2);
 }
 
 
?>

 Total runs:<input type="text" name="totrun" id="totrun" value="<?php  echo $row11[0];?>" style="width:50px;" disabled /> 
 
 Total wicket:<input type="text" name="totwicket" id="totwicket" value="<?php echo $rowwic[0];?>" style="width:50px;"
	 disabled />
	 
 Total over:<input type="text" name="totover" id="totover" value="<?php echo $rowover[0];?>" style="width:50px;" disabled /> 	 
 <?php
 $str11="select sum(runs) from battinglivetbl group by match_id,team_id";
 $result11=mysqli_query($con,$str11);
 $i=0;
 $run1="";
 $wic1="";
 $ovr1="";
 while($rowrun=mysqli_fetch_array($result11))
 {
 /* echo $_SESSION["runs$i"]=$rowrun[0];
  $i++;*/
  
  $run1.=$rowrun[0] . " " ;
  
 }
 $run2=explode(" ",$run1);
 $_SESSION['count']=count($run2);
for($i=0;$i<count($run2)-1;$i++)
{
	$_SESSION["c$i"]=$run2[$i];
	
}
 
 
 $wicket1="select count(status) from battinglivetbl where status='out'  group by match_id,team_id";
 $reswic1=mysqli_query($con,$wicket1);
 while($rowwic1=mysqli_fetch_array($reswic1))
 {
	$wic1.=$rowwic1[0] . " " ; 
 }
 $wic2=explode(" ",$wic1);
 $_SESSION['count1']=count($wic2);
for($i=0;$i<count($wic2)-1;$i++)
{
	$_SESSION["c1$i"]=$wic2[$i];
	
}
 
 $over1="select round(sum(over),1) from bowlinglivetbl group by match_id,team_id";
 $resover1=mysqli_query($con,$over1);
 while($rowover1=mysqli_fetch_array($resover1))
 {
	 $ovr1.=$rowover1[0] . " " ;
 }
 $ovr2=explode(" ",$ovr1);
 $_SESSION['count2']=count($ovr2);
for($i=0;$i<count($ovr2)-1;$i++)
{
	$_SESSION["c2$i"]=$ovr2[$i];
	
}
 
 
 
}//submit1 button closing
?>
	
 
<?php

$strball="SELECT * FROM bowlinglivetbl where match_id='$matchid' and team_id='$team2id'";
$select1 =mysqli_query($con,$strball);


?>
<br>
<br>
<h2>LIVE BOWLING</h2>
<table  border="1" id="scoretb1" class="table table-striped table-bordered " >
<tr>
<th style="width:120px;">bowler</th>
<th style="width:80px;">over</th>
<th style="width:80px;">maiden</th>
<th style="width:80px;">runs</th>
<th style="width:80px;">wicket</th>
<th style="width:80px;">nb</th>
<th style="width:80px;">wd</th>
<th style="width:80px;">eco</th>
<th>action</th>
</tr>
<?php
while ($row1=mysqli_fetch_array($select1)) 
{
 ?>
 <tr id="row1<?php echo $row1['bowl_id'];?>">
  
    <td id="bowl_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['bowler'];?></td>
	<td id="over_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['over'];?></td>
    <td id="madien_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['maiden'];?></td>
	<td id="rn_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['runs'];?></td>
    <td id="wicket_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['wicket'];?></td>
	<td id="nb_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['nb'];?></td>
	<td id="wd_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['wd'];?></td>
	<td id="eco_val<?php echo $row1['bowl_id'];?>"><?php echo $row1['eco'];?></td>
	
  <td>
   <input type='button' class="edit_button btn btn-info" style="display:inline;" value="edit" id="edit1_button<?php echo $row1['bowl_id'];?>" onclick="edit1_row('<?php echo $row1['bowl_id'];?>');">
   <input type='button' class="save_button btn btn-success" style="display:none;" id="save1_button<?php echo $row1['bowl_id'];?>" value="save" onclick="save1_row('<?php echo $row1['bowl_id'];?>');">
   <input type='button' class="delete_button btn btn-danger" style="display:inline;" id="delete1_button<?php echo $row1['bowl_id'];?>" value="delete" onclick="delete1_row('<?php echo $row1['bowl_id'];?>');">
  </td>
 </tr>
 <?php
}
?>

<tr id="new_row">
 
 <td><input type="text" id="new_bowl" style="width:120px;"></td>
 <td><input type="text" id="new_over" style="width:80px;"></td>
 <td><input type="text" id="new_madien" style="width:80px;"></td>
 <td><input type="text" id="new_rn" style="width:80px;"></td>
 <td><input type="text" id="new_wicket" onfocus="new2()" style="width:80px;"></td>
 <td><input type="text" id="new_nb" style="width:80px;"></td>
 <td><input type="text" id="new_wd" style="width:80px;"></td>
 <td><input type="text" id="new_eco" style="width:80px;"></td>
 
 <td><input type="button" class="edit_button btn btn-normal" value="Insert Row" onclick="insert1_row();"></td>
</tr>
</table>


  
<script>
function new1()
{
  var run=document.getElementById("new_runs").value;
  var ball=document.getElementById("new_ball").value;
  var sr=run/ball*100;
  var sr1=sr.toFixed(2);
  document.getElementById("new_sr").value=sr1;
}

function new2()
{
  var r1=document.getElementById("new_rn").value;
  var o1=document.getElementById("new_over").value;
  var eco=r1/o1;
  var eco1=eco.toFixed(2);
  document.getElementById("new_eco").value=eco1;
}

</script>        

						
						            
					</div>

				</div><!--/span-->

			</div><!--/row-->
 </div>			



</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
	<div class="clearfix"></div>
	
	<!-- start: JavaScript-->
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
     <script type="text/javascript" src="modify_records.js"></script>   <!--ajax live score js -->
	<script type="text/javascript" src="modify_records1.js"></script>   <!--ajax live score js -->
		
	
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
        <!--<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="js/jquery-ui-sliderAccess.js"></script>
		<script type="text/javascript" src="js/script.js"></script>-->
	<!-- end: JavaScript-->
	<!--calendar-->
			
			<script src="js/jquery-ui.js"></script>  
			
			
	<!--end calendar-->
</form>	
</body>
</html>
