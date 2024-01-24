<!DOCTYPE html>
<html lang="en">

    

<head>
        <title>Result</title>
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
                        <a href="contact.html">Contact</a>
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
            <div class="page-title">Match Result</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
               
            <div class="container">
			<?php
			include('connection.php');
			$str="select match_id,matchdate from matchtbl where match_id in(select ts.match_id from matchtbl m,totalscoretbl ts where m.match_id=ts.match_id)";
			$res=mysqli_query($con,$str);

			while($row=mysqli_fetch_array($res))
			{	

				$match=$row[0];
				
				$str1="select * from totalscoretbl where match_id='$match' and inning=1";
				$res1=mysqli_query($con,$str1);
				$row1=mysqli_fetch_array($res1);
				
				$str2="select * from totalscoretbl where match_id='$match' and inning=2";
				$res2=mysqli_query($con,$str2);
				$row2=mysqli_fetch_array($res2);
				
				
				
				 $innig1= $row1[3];
				 $innig2= $row2[3];
				 $wkt1= $row1[5];
				 $wkt2= $row2[5];
				 $team1=$row1[2];
				 $team2=$row2[2];
				 
				$str3="select team_name from teamtbl where team_id='$team1' ";
				$res3=mysqli_query($con,$str3);
				$row3=mysqli_fetch_array($res3);

				$str4="select team_name from teamtbl where team_id='$team2' ";
				$res4=mysqli_query($con,$str4);
				$row4=mysqli_fetch_array($res4);
				
				echo "<div class='col-md-4 card-box widget-two-success'>";
				echo "&nbsp; Date :" .$row[1]."<br>" ;
				echo "<br><div class='col-md-6'>";echo $row3[0];echo "</div><div class='col-md-6'>"; echo $innig1."/" ; echo $row1[5]. "</div><br>";
				echo "<div class='col-md-6'>";echo $row4[0];echo "</div><div class='col-md-6'>"; echo $innig2."/" ; echo $row2[5]. "</div><br>";
				if($innig1 < $innig2)
				{
					echo "<br><div class='col-md-12 text-primary'>";echo $row4[0] ; echo " won by " ; echo 10 - $wkt2 ; echo " wicket</div>";
				}
				else
				{
					echo "<br><div class='col-md-12 text-primary'>";echo $row3[0] ; echo " won by"; echo  $innig1 - $innig2;  echo " Runs</div>";
				}
				
				echo "</div>";
			}
			?>

							

			</div>             
			 
              
            <div class="clear"></div>
            
            <!-- BACK TO TOP BUTTON -->
            <a href="#" class="back-to-top"></a>
        
		  </section>
		<!-- FOOTER -->
            <footer id="footer">
                <div id="footer-widgets">
                    <!-- WIDGET 1 -->
                    <div class="footer-widget first-clmn">
                        <h5>Contact Us</h5>
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
                jQuery('body').backstretch("images/photos/home2.jpg");
            });
        </script>
        
        <!-- POPUP BOXES -->
        
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>