<!DOCTYPE html>
<html lang="en">
 
 <?php
session_start();
if(isset($_SESSION['count']))
{
for($i=0;$i<$_SESSION['count']-1;$i++)
  {
	 if(isset($_SESSION["c$i"]))
	 {
	 $run[$i] =  $_SESSION["c$i"]; 
	 }	
	 if(isset($_SESSION["c1$i"]))
	 {	 
	 $wic[$i] =  $_SESSION["c1$i"];
	 }
	 if(isset($_SESSION["c2$i"]))
	 {	
	 $ovr[$i] =  $_SESSION["c2$i"];
	 }
	 if(isset($_SESSION["j$i"]))
	 {
	 $run1[$i] =  $_SESSION["j$i"];
	 }
	 if(isset($_SESSION["j1$i"]))
	 {	
	 $wic1[$i] =  $_SESSION["j1$i"];
	 }
	 if(isset($_SESSION["j2$i"]))
	 {	
	 $ovr1[$i] =  $_SESSION["j2$i"];
	 }	
  }
}
else
{
	echo "" ;
}


?>     

    

<head>
        <title>scorecard</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
		<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
     	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">	
	
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/grid.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
        <link href="css/media.css" rel="stylesheet" type="text/css">
		 <link rel="stylesheet" href="css/main.css">
	     <link rel="stylesheet" href="css/core.css">
	     <link rel="stylesheet" href="css/components.css">
		
        
        
    </head>
    <section id="submenu-container">
            <a id="mobile-menu" href="#">Sub Menu</a>
            <nav id="submenu">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="galleries.php">Gallery</a>
                    </li>
                    <li>
                        <a href="#btm">Contact</a>
                    </li>
                </ul>
            </nav>
           
            
        </section>
        <div class="clear"></div>
        <!-- HEADER -->
        <header id="header">
            <div class="logo">
                <img src="images/logo.png" alt="" />
                <span>SuratCricUps</span>
            </div>
        </header>
        <div class="clear"></div>
        <!-- MAIN MENU -->
        <section id="mainmenu-container">
            <a class="toggleMenu" href="#">Menu</a>
            <nav>
                <ul id="mainmenu">
                    <li>
                        <a href="index.php">
                            <span>Homepage</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="#">
                            <span>Pages</span>
                        </a>
                        <ul>
                            <li>
                                <a href="livescore.php">
                                    <span>LiveScore</span>
                                </a>
                            </li>
                            <li>
                                <a href="team.php">
                                    <span>Our Team</span>
                                </a>
                            </li>

                            <li>
                                <a href="performance.php">    <!--layout page mathi design -->
                                    <span>Top Performance</span>
                                </a>
                            </li>
                            <li>
                                <a href="fixtures.php">
                                    <span>Fixtures</span>
                                </a>
                            </li>
                            <li>
                                <a href="result.php">
                                    <span>Match Result</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="galleries.php">
                            <span>Gallery</span>
                        </a>
                        <ul>
                            <li>
                                <a href="galleries.php">
                                    <span>Galleries</span>
                                </a>
                            </li>
                            <li>
                                <a href="single-gallery.html">
                                    <span>Single Gallery</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>Register</span>
                        </a>
                        <ul>
                            <li>
                                <a href="p_register.php">
                                    <span>Player</span>
                                </a>
                            </li>
                            <li>
                                <a href="o_register.php">
                                    <span>Organization</span>
                                </a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="#">
                            <span>Login</span>
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </section>
   
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE TITLE -->
            <div class="page-title">live scorecard match</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
               
			<?php
				$con=mysqli_connect("localhost","root","","suratcricups");
				 $mid=$_GET['matchid'];
				 $team1=$_GET['team1id'];
				$team2=$_GET['team2id'];
				$str1="select team_id from teamtbl where team_name = '$team1' ";
				$str2="select team_id from teamtbl where team_name = '$team2' ";
				$result1=mysqli_query($con,$str1);
				$result2=mysqli_query($con,$str2);
				$row1=mysqli_fetch_row($result1);
				$row2=mysqli_fetch_row($result2);



				$string1="select DISTINCT bt.batsman,bt.status,bt.runs,bt.balls,bt.4s,bt.6s,bt.sr from battinglivetbl bt where bt.match_id='$mid' and bt.team_id='$row1[0]'";
				$string2="select DISTINCT bo.bowler,bo.over,bo.maiden,bo.runs,bo.wicket,bo.nb,bo.wd,bo.eco from bowlinglivetbl bo where bo.match_id='$mid' and bo.team_id='$row2[0]'";
				$res1=mysqli_query($con,$string1);
				$res2=mysqli_query($con,$string2);




				?>

						
				<table class="table table-striped table-bordered bootstrap-datatable datatable">

				<h3 style="font-weight:bold"><?php echo $team1; ?>&nbsp; Innings</h3>
				<thead>
				<tr class="danger">
				<th>Batsman</th>
				<th>Status</th>
				<th>Runs</th>
				<th>Balls</th>
				<th>Fours</th>
				<th>Sixes</th>
				<th>Strike Rate</th>
				</tr>
				</thead>
				<?php while($row3=mysqli_fetch_array($res1))
				{?>
				<tbody>
				<tr>
				<td><?php echo $row3[0];?></td>
				<td><?php echo $row3[1];?></td>
				<td><?php echo $row3[2];?></td>
				<td><?php echo $row3[3];?></td>
				<td><?php echo $row3[4];?></td>
				<td><?php echo $row3[5];?></td>
				<td><?php echo $row3[6];?></td>
				
				</tr>
				</tbody>
				
				
				<?php } ?>
				</table>
				
                
			    <hr>
				<table class="table table-striped table-bordered bootstrap-datatable datatable">

				<h3 style="font-weight:bold"><?php echo $team2; ?>&nbsp;Innings</h3>

				<thead>
				<tr class="danger">
				<th>Bowler</th>
				<th>Over</th>
				<th>Maiden</th>
				<th>Runs</th>
				<th>Wicket</th>
				<th>No Balls</th>
				<th>Wide Balls</th>
				<th>Economy</th>

				</tr>
				</thead>
				<?php while($row4=mysqli_fetch_array($res2))
				{?>
				<tbody>
				<tr>
				<td><?php echo $row4[0];?></td>
				<td><?php echo $row4[1];?></td>
				<td><?php echo $row4[2];?></td>
				<td><?php echo $row4[3];?></td>
				<td><?php echo $row4[4];?></td>
				<td><?php echo $row4[5];?></td>
				<td><?php echo $row4[6];?></td>
				<td><?php echo $row4[7];?></td>
				</tr>
				</tbody>
				<?php  }?>
				</table>

			
            <div class="clear"></div>
            
            <!-- BACK TO TOP BUTTON -->
            <a href="#" class="back-to-top"></a>
        
		  </section>
		<!-- FOOTER -->
            <footer id="footer">
                <div id="footer-widgets">
                    <!-- WIDGET 1 -->
                    <div class="footer-widget first-clmn">
                        <h5 id="btm">Contact Us</h5>
                        <ul>
                           <li>
                                <strong>Address: </strong> C-1116 Rudra Enclave,Althan</li><br>
							 <li>
                                <strong>Email: </strong> uperiaakshay1592@gmail.com</li><br>	
                            <li>
                                <strong>Phone: </strong> +8141185003</li><br>
                            
                        </ul>
                    </div>
                    <!-- WIDGET 2 -->
                    <div class="footer-widget second-clmn">
                        <h5>Contact Form</h5>
                        <form id="contactForm" action="http://sporty.wp4life.com/processform.php" method="post">
                            <label>Your Name:</label>
                            <input type="text" name="senderName" id="senderName" required="required" maxlength="40" />
                            <label>Your Email:</label>
                            <input type="email" name="senderEmail" id="senderEmail" required="required" maxlength="50" />
                            <label>Your Message:</label>
                            <textarea name="message" id="message" required="required"></textarea>
                            <input type="submit" id="sendMessage" name="sendMessage" class="button" value="Send Message" />
                        </form>
                    </div>
                    <!-- WIDGET 3 -->
                    <div class="footer-widget third-clmn">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14881.464685995963!2d72.808723!3d21.177608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaae6fb4cb31ad325!2sEastern+Techno+Solutions!5e0!3m2!1sen!2sin!4v1495098779168" width="370px" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="clear"></div>
                
                <!-- SOCIAL ICONS -->
                <ul class="social-icons">
                    <li>
                        <a href="https://www.facebook.com/">
                            <img class="social-icon" src="images/social-icons/facebook.png" alt="Facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/">
                            <img class="social-icon" src="images/social-icons/twitter.png" alt="Twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.flickr.com/">
                            <img class="social-icon" src="images/social-icons/flickr.png" alt="Flickr" />
                        </a>
                    </li>
                    <li>
                        <a href="https://in.linkedin.com/">
                            <img class="social-icon" src="images/social-icons/linkedin.png" alt="Linked in" />
                        </a>
                    </li>
                    <li>
                        <a href="https://gsuite.google.com">
                            <img class="social-icon" src="images/social-icons/google%2b.png" alt="Google+" />
                        </a>
                    </li>
                    <li>
                        <a href="https://vimeo.com/">
                            <img class="social-icon" src="images/social-icons/vimeo.png" alt="Vimeo" />
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/">
                            <img class="social-icon" src="images/social-icons/youtube.png" alt="YouTube" />
                        </a>
                    </li>
                </ul>
            </footer>
			</section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/c1.jpg");
            });
        </script>
        
        
        <script src="js/custom.js" type="text/javascript"></script>
    </body>


</html>



