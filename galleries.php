<!DOCTYPE html>
<html lang="en">
    
    

<head>
        <title>Galleries</title>
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
                        <a href="#">Gallery</a>
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
                        <a href="#">
                            <span>Gallery</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
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
            <div class="page-title">Galleries</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!--vertical Tabs-->
                <div id="verticalTab">
                    <ul class="resp-tabs-list">
                        <li>Gallery</li>
                        <li>Another Gallery</li>
                        <li>Gallery without filters</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div>
                            <!-- FILTERS -->
                            <ul id="filters1" class="filters">
                                <li>
                                    <a href="#" data-filter="all" class="active">All</a>
                                </li>
                                <li>
                                    <a href="#" data-filter="photos">Photos</a>
                                </li>
                                <li>
                                    <a href="#" data-filter="videos">Videos</a>
                                </li>
                                <li>
                                    <a href="#" data-filter="links">Links</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <!-- GALLERY -->
                            <ul id="gridbox1" class="team-gallery">
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l4.jpg" data-rel="photos">
                                        <img src="images/photos/s4.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                        <img src="images/photos/t4.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://player.vimeo.com/video/70301553">
                                        <img src="images/photos/t5.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l6.jpg" data-rel="photos">
                                        <img src="images/photos/s6.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="links">
                                    <a class="clb-link" href="http://www.themeforest.com/" target="_blank">
                                        <img src="images/photos/t6.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l5.jpg" data-rel="photos">
                                        <img src="images/photos/s5.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <!-- FILTERS 2 -->
                            <ul id="filters2" class="filters">
                                <li>
                                    <a href="#" data-filter="all" class="active">All</a>
                                </li>
                                <li>
                                    <a href="#" data-filter="photos">Photos</a>
                                </li>
                                <li>
                                    <a href="#" data-filter="videos">Videos</a>
                                </li>
                                <li>
                                    <a href="#" data-filter="links">Links</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <!-- GALLERY 2 -->
                            <ul id="gridbox2" class="team-gallery">
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l1.jpg" data-rel="photos2">
                                        <img src="images/photos/s1.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                        <img src="images/photos/t1.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l2.jpg" data-rel="photos2">
                                        <img src="images/photos/s2.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="videos">
                                    <a class="clb-iframe" href="http://www.dailymotion.com/embed/video/x143vp2">
                                        <img src="images/photos/t2.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="photos">
                                    <a class="clb-photo" href="images/photos/l3.jpg" data-rel="photos2">
                                        <img src="images/photos/s3.jpg" alt="" />
                                    </a>
                                </li>
                                <li data-filter="links">
                                    <a class="clb-link" href="http://www.themeforest.com/" target="_blank">
                                        <img src="images/photos/t3.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <!-- GALLERY WITHOUT FILTERS -->
                            <ul class="team-gallery">
                            <li>
                                <a class="clb-photo" href="images/photos/l15.jpg" data-rel="photos3">
                                    <img src="images/photos/s15.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                    <img src="images/photos/t1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l13.jpg" data-rel="photos3">
                                    <img src="images/photos/s13.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://player.vimeo.com/video/70301553">
                                    <img src="images/photos/t5.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l16.jpg" data-rel="photos3">
                                    <img src="images/photos/s16.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-link" href="http://www.themeforest.com/" target="_blank">
                                    <img src="images/photos/t3.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                        </div>
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
        <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
        <script type="text/javascript" src="js/gallery.js"></script>
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
        <!-- FILTERS 1 -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("#filters1").dysaniagrid({
                    galleryid: "#gridbox1"
                });
            });
        </script>
        <!-- FILTERS 2 -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("#filters2").dysaniagrid({
                    galleryid: "#gridbox2"
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>