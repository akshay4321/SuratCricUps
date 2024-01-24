<!DOCTYPE html>
<html lang="en">
<?php 
$con=mysqli_connect("localhost","root","","suratcricups");
$str1="select bowler,eco from scorecardbowling order by eco asc";
		$result1=mysqli_query($con,$str1);
		
		
		$str2="select batsman,sr from scorecardbatting order by sr desc";
		$result2=mysqli_query($con,$str2);
			
			
			$str3="select bt.batsman,bt.sr,bo.eco from scorecardbatting bt,scorecardbowling bo where bt.batsman=bo.bowler order by eco asc,sr desc";
		$result3=mysqli_query($con,$str3);
			

			?>    
    
<!-- Mirrored from sporty.wp4life.com/features.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2017 06:42:37 GMT -->
<head>
        <title>Top Performance</title>
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
                                <a href="team.php">
                                    <span>Our Team</span>
                                </a>
                            </li>
                           
                            <li>
                                <a href="#">    <!--layout page mathi design -->
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
            <div class="page-title">BEST PLAYER PERFORMANCE LAYOUT</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer using-grid">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <h2>Slider</h2>
                        <!-- SLIDER-->
                        <ul class="bxslider">
                            <li>
                                <img src="images/photos/large1.jpg" alt="" />
                            </li>
                            <li>
                                <img src="images/photos/large2.jpg" alt="" />
                            </li>
                            <li>
                                <img src="images/photos/large3.jpg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <!--horizontal Tabs-->
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li>Best Bowler</li>
                                <li>Best Bastman</li>
                                <li>Best AllRounder</li>
                            </ul>
                            <div class="resp-tabs-container">
                                <div class="box-content">
						             <h3>Best Bowler</h3>
						        <table class="table table-striped table-bordered bootstrap-datatable datatable">
																							         		
						        <thead>
							    <tr>
                                  <th>player_name</th>
                                  <th>Strike rate</th>
								  
							    </tr>
						        </thead>   
						        <tbody>
                                <?php  while($row1=mysqli_fetch_array($result1))
                                { ?>			  
                                <tr>  
								<td><?php echo $row1[0] ; ?></td>  
								<td><?php echo $row1[1] ; ?></td>  
								</tr>
							<?php } ?>
							</tbody>
							</table>
                           </div>	
                                <div class="box-content">
						             <h3>Best Batsman</h3>
						        <table class="table table-striped table-bordered bootstrap-datatable datatable">
																							         		
						        <thead>
							    <tr>
                                  <th>player_name</th>
                                  <th>Strike rate</th>
								  
							    </tr>
						        </thead>   
						        <tbody>
                                <?php  while($row2=mysqli_fetch_array($result2))
                                { ?>			  
                                <tr>  
								<td><?php echo $row2[0] ; ?></td>  
								<td><?php echo $row2[1] ; ?></td>  
								</tr>
							<?php } ?>
							</tbody>
							</table>
                           </div>							
                                <div class="box-content">
						             <h3>Best AllRounder</h3>
						        <table class="table table-striped table-bordered bootstrap-datatable datatable">
																							         		
						        <thead>
							    <tr>
                                  <th>player_name</th>
                                  <th>Strike rate</th>
								  <th>Economy rate</th>
								  
							    </tr>
						        </thead>   
						        <tbody>
                                <?php  while($row3=mysqli_fetch_array($result3))
                                { ?>			  
                                <tr>  
								<td><?php echo $row3[0] ; ?></td>  
								<td><?php echo $row3[1] ; ?></td>  
								<td><?php echo $row3[1] ; ?></td> 
								</tr>
							<?php } ?>
							</tbody>
							</table>
                           </div>
                            </div>
                        </div>
                    </div>
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
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/home2.jpg");
            });
        </script>
        <!-- SLIDER -->
        <script type="text/javascript">
            jQuery('.bxslider').bxSlider({
                pager: false
            });
        </script>
        
        <!-- HORIZONTAL TABS -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#horizontalTab').easyResponsiveTabs({
                    type: 'default',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <!-- POPUP BOXES -->
        
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>