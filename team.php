<!DOCTYPE html>
<html lang="en">
    
    

<head>
        <title>Our Team</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- CSS FILES -->
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/grid.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
        <link href="css/media.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>
        <!-- SUB MENU -->
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
                        <a href="login.php">
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
                                <a href="#">
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
            <div class="page-title">Our Team</div>
            <!-- FEATURED IMAGE -->
            <div class="page-img">
			
                <img src="images/photos/squad.jpg" alt="" />
            </div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
                <div class="grid">
                    <!-- GOOLKEEPERS -->
                    <div class="unit one-quarter teamlist">
					<?php
					include('connection.php');
					$str="select team_name,team_id from teamtbl";
					$res=mysqli_query($con,$str);
					$row=mysqli_fetch_array($res);
					$team1=$row[1];
					
					
					?>
					
                        <h3><?php echo $row[0] ;?></h3>
                        
						<?php 
                               $str1="select p.player_name,p.photo from selectiontbl s,playertbl p where p.player_id=s.player_id and team_id='$team1'";
					           $res1=mysqli_query($con,$str1);
					           while($row1=mysqli_fetch_array($res1))
							   {	   
						         ?>
								 <ul>
                                <li>
                                <a  class="popup-with-zoom-anim"><?php echo $row1[0] ;?> </a>
                                
                                
                                 </li>
                                 </ul>
							   <?php } ?>
                    </div>
                    <!-- DEFENDERS -->
                    <div class="unit one-quarter teamlist">
					<?php
					include('connection.php');
					$str1="select team_name,team_id from teamtbl limit 1,1";
					$res1=mysqli_query($con,$str1);
					$row1=mysqli_fetch_array($res1);
				    $team2=$row1[1];
					?>
                        <h3><?php echo $row1[0] ;?></h3>
                        <?php 
                               $str2="select p.player_name,p.photo from selectiontbl s,playertbl p where p.player_id=s.player_id and team_id='$team2'";
					           $res2=mysqli_query($con,$str2);
					           while($row2=mysqli_fetch_array($res2))
							   {	   
						         ?>
						
                        <ul>
                            <li>
                                <a  class="popup-with-zoom-anim"><?php echo $row2[0] ;?></a>
                                
                                
                            </li>
                            
                        </ul>
							   <?php } ?>
                    </div>
                    <!-- MIDFIELDERS -->
                    <div class="unit one-quarter teamlist">
                        <?php
					include('connection.php');
					$str3="select team_name,team_id from teamtbl limit 2,2";
					$res3=mysqli_query($con,$str3);
					$row3=mysqli_fetch_array($res3);
					$team3=$row3[1];
					?>
                        <h3><?php echo $row3[0] ;?></h3>
						<?php 
                               $str3="select p.player_name,p.photo from selectiontbl s,playertbl p where p.player_id=s.player_id and team_id='$team3'";
					           $res3=mysqli_query($con,$str3);
					           while($row3=mysqli_fetch_array($res3))
							   {	   
						         ?>
                        <ul>
                            <li>
                                <a  class="popup-with-zoom-anim"><?php echo $row3[0] ;?></a>
                               
                            </li>
                            
                        </ul>
						<?php } ?>
                    </div>
                    <!-- STRIKERS -->
                    <div class="unit one-quarter teamlist">
                           <?php
					include('connection.php');
					$str4="select team_name,team_id from teamtbl limit 3,3";
					$res4=mysqli_query($con,$str4);
					$row4=mysqli_fetch_array($res4);
					$team4=$row4[1];
					?>
                        <h3><?php echo $row4[0] ;?></h3>
						<?php 
                               $str5="select p.player_name,p.photo from selectiontbl s,playertbl p where p.player_id=s.player_id and team_id='$team4'";
					           $res5=mysqli_query($con,$str5);
					           while($row5=mysqli_fetch_array($res5))
							   {	   
						         ?>
                        <ul>
                            <li>
                                <a  class="popup-with-zoom-anim"><?php echo $row5[0] ;?></a>
                                
                            </li>
                            
                        </ul>
						<?php } ?>
                    </div>
                </div>
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
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/home2.jpg");
            });
        </script>
        
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>