<?php
session_start();
$con=mysqli_connect("localhost","root","","suratcricups");
$oid=$_SESSION["sd"];
$str="select * from orgtbl where org_id='$oid'";
$result=mysqli_query($con,$str);
$row=mysqli_fetch_row($result);
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
	<link rel="stylesheet" href="profile_org.css">
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
		
</head>		
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
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
						  
						 
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Organizer		<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="../index.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
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
				&lt;div class="alert alert-block span10"&gt;
					&lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
					&lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
				&lt;/div&gt;
			</noscript>
		

		
<div class="container">
<h3 class="h1"><u>Organizer Profile</u></h3>
<h3 class="name"><?php echo $row[1] ; ?></h3>

<div class="bgbox">
  <table class="table">
    <thead>
      <tr>
        <th class="p1">Profile</th>
     </tr>
    </thead>
    <tbody class="r1">
      <tr>
        <td>Organizer Name </td>
		<td><?php echo $row[1] ; ?></td>
      <tr>
        <td>City</td>
		<td><?php echo $row[2] ; ?></td>
        
      </tr>
      <tr>
        <td>Caste</td>
		<td><?php echo $row[3] ; ?></td>
		     
      </tr>
	  <tr>
        <td>Email-ID</td>
		<td><?php echo $row[4] ; ?></td>
        
     </tr>
    <tr>
        <td>Phone Number</td>
		<td><?php echo $row[6] ; ?></td>
        
    </tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
	  
    </tbody>
  </table>
</div>

</div>
</div><br><br><br><br><br><br>
<div style="text-align:right">
	<a class="btn btn-primary" href="edit-profile.php?oid=<?php echo $oid;?>">EDIT ACCOUNT DETAILS</a>
 </div>

</body>
</html>