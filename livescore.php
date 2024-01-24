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
        <title>livescore</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
        <link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
        <link href="css/media.css" rel="stylesheet" type="text/css">
		
		<!--<link rel="stylesheet" href="css/main.css">-->
	     <link rel="stylesheet" href="css/core.css">
	     <link rel="stylesheet" href="css/components.css">
		
        
    </head>
    
    <body>
        <!-- SUB MENU -->
        <section id="submenu-container">
            <a id="mobile-menu" href="#">SubMenu</a>
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
                                <a href="#">
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
                                <a href="single-gallery.php">
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
                        <a href="login.php">
                            <span>Login</span>
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </section>
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE TITLE -->
            <div class="page-title">LiveScore</div>
            
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
              <?php
   include('connection.php');
$str="select match_id from matchtbl where match_id in(select bat.match_id from battinglivetbl bat,bowlinglivetbl ball,matchtbl m where bat.match_id=ball.match_id)";
				
				$result=mysqli_query($con,$str);
				
				
			if(isset($_SESSION['count']))
			{
				
				for($i=0;$i<$_SESSION['count']-1;$i++)
				{
				$row1=mysqli_fetch_array($result);
				$team1=$row1[0];
				//$team2=$row1[12];
				$tm="select team1_id,team2_id from matchtbl where match_id='$team1'";
				$tmrs=mysqli_query($con,$tm);
				$rowtm=mysqli_fetch_array($tmrs);
				
				//$team1id=$rowtm[0];
				//$team2id=$rowtm[1];
				
				$str1="select logo,team_name from teamtbl where team_id='$rowtm[0]'";
				$r1=mysqli_query($con,$str1);
				$row3=mysqli_fetch_array($r1);
				
				$str2="select logo,team_name from teamtbl where team_id=$rowtm[1]";
				$r2=mysqli_query($con,$str2);
				$row4=mysqli_fetch_array($r2);
				
?>



																							         		
					  
					
                          		  
                           <div class="col-md-4 card-box widget-two-danger">
							
							<div>
							<h4>
						
							<a style="color:indigo;" href="#" ><?php echo $row3[1] ; ?> VS <?php echo $row4[1] ; ?> </a></h4>


							</div><br>
							
							
							<div style="color:black;"> 
							<a href="scorecard1.php?matchid=<?php echo $team1 ; ?>&team1id=<?php echo $row3[1] ; ?>&team2id=<?php echo $row4[1] ; ?>"><?php echo $row3[1] ; ?></a>
							 <?php  if(isset($_SESSION["c$i"]))
 								    { 
								    echo $_SESSION["c$i"]; ?>/
									<?php if(isset($_SESSION["c1$i"]))
 								    {  echo $_SESSION["c1$i"];}?> (
									<?php if(isset($_SESSION["c2$i"]))
									 { echo $_SESSION["c2$i"]; } ?> Ovs) 
									<?php }?>
							 <br> 
							 <a style="color:grey;" href="scorecard2.php?matchid=<?php echo $team1 ; ?>&team1id=<?php echo $row4[1] ; ?>&team2id=<?php echo $row3[1] ; ?>"> <?php echo $row4[1] ; ?></a> 
							 <?php if(isset($_SESSION["j$i"]))
							 {	 
							 echo $_SESSION["j$i"];?>/
							 <?php if(isset($_SESSION["j1$i"]))
	                           {	 echo $_SESSION["j1$i"];}?> (
						   <?php if(isset($_SESSION["j2$i"]))
								{	 echo $_SESSION["j2$i"];}?> Ovs) 
							<?php } ?>
							<br><br>
							 <nav  style="color:blue;">
							 
							 <a href="scorecard.php?matchid=<?php echo $team1 ; ?>&team1id=<?php echo $row3[1] ; ?>&team2id=<?php echo $row4[1] ; ?>">Scorecard</a>
							 
							 </nav>
							 </div> 
							 </div> 
							 
							 
							
							
      				
                           
               <?php } 
				}
			else
            {
               echo "no  live score match is found" ;
			}		
			?> 
                
            </section>
            <div class="clear"></div>
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
                        <h5 >Contact Form</h5>
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
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14881.464685995963!2d72.808723!3d21.177608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaae6fb4cb31ad325!2sEastern+Techno+Solutions!5e0!3m2!1sen!2sin!4v1495098779168" width="330px" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            <!-- BACK TO TOP BUTTON -->
            <a href="#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/home2.jpg");
            });
        </script>
        <!-- VERTICAL TABS -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>