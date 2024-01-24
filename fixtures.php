<!DOCTYPE html>
<html lang="en">
    
    

<head>
        <title>Fixtures</title>
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
        <link href="css/media.css" rel="stylesheet" type="text/css">
        
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel = "stylesheet" href = "css/res-timeline.css"/>
		<script type = "text/javascript" src = "js/jquery.min.js"></script>	
	<script type = "text/javascript" src="js/res-timeline.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	
	
	
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
                                <a href="performance.php">    
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
            <div class="page-title">Fixtures</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
               <div class = "jflatTimeline" style="background-color:#fff;">

		<div class = "timeline-wrap">
		
			
		
			<?php
			     include('connection.php');
				$str="select * from matchtbl";
				$result=mysqli_query($con,$str);
				
				while($row1=mysqli_fetch_array($result))
				{
				
				$team1=$row1[2];
				$team2=$row1[3];
				$ground=$row1[1];
				$str1="select t.team_name from matchtbl m ,teamtbl t where m.team1_id=t.team_id and m.team1_id='$team1'";
				$r1=mysqli_query($con,$str1);
				$row3=mysqli_fetch_array($r1);
				
				$str2="select t.team_name from matchtbl m ,teamtbl t where m.team2_id=t.team_id and m.team2_id='$team2'";
				$r2=mysqli_query($con,$str2);
				$row4=mysqli_fetch_array($r2);
				
				$str3="select g.ground_name from groundtbl g,matchtbl m where m.ground_id=g.ground_id and m.ground_id='$ground'";
				$r3=mysqli_query($con,$str3);
				$row5=mysqli_fetch_array($r3);
				
				
				/*$str4="select venue from fixtbl";
				$r4=mysqli_query($con,$str4);
				$row6=mysqli_fetch_array($r4);*/
				
				?>
			
					
			    <div class = "event"  data-date="<?php echo $row1['matchdate'] ; ?>"><div class="box-content">
						
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
																							         		
						  <thead>
							 <tr>
                                  <th>First Team Name</th>
								  <th>Second Team Name</th>
								  <th>Match Date</th>
								  <th>Match Time</th>
								  <th>Ground Name</th>
								  <th>Venue</th>
							  </tr>
						    </thead>   
						  <tbody>
                          		  
                              <tr>  
								<td><?php echo $row3[0] ; ?></td>  
								<td><?php echo $row4[0] ; ?></td>  
								<td><?php echo $row1[4] ; ?></td>  
								<td><?php echo $row1[5] ; ?></td>
             			        <td><?php echo $row5[0] ; ?></td>
								<td><?php echo $row1[6] ; ?></td>
								
                           </tr>
                               							  
						  </tbody>
					  </table>            
					</div>
</div>
				
				<?php  } ?>
				
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
        <script type="text/javascript" src="js/gallery.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/home2.jpg");
            });
        </script>
        <!-- FILTERS -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("#filters1").dysaniagrid({
                    galleryid: "#gridbox1"
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>
