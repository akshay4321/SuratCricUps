<!DOCTYPE html>
<html lang="en">
    
    

<head>
        <title>Homepage</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
        <meta name="description" content="">
        <meta name="keywords" content="">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
			<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
		 <script>
            $(function() {
                $( "#search" ).autocomplete({
                    source:"comp1.php"
                });
            });
        </script>
        <!-- CSS FILES -->
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/colors.css" rel="stylesheet" type="text/css">
        <link href="css/colorbox.css" rel="stylesheet" type="text/css">
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link href="css/media.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/modernizr.js"></script>
       
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
                        <a href="#">
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
                        <a href="login.php">
                            <span>Login</span>
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </section>
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- FLEXSLIDER -->
            <section class="flex-wrapper">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="flex-title">
                                <h3>SuratCricUps</h3>
                                <p>Cricket civilises people and creates <br>
                            good gentlemen</p>
                            </div>
                            <img src="images/photos/1 (3).jpg" alt="" />
                        </li>
                        <li>
                            <div class="flex-title">
                                <h3>SuratCricUps</h3>
                                <p>Cricket is the most wonderful <br>
                            entertainment in the world</p>
                            </div>
                            <img src="images/photos/match.jpg" alt="" />
                        </li>
                        <li>
                            <div class="flex-title">
                                <h3>SuratCricUps</h3>
                                <p>The greatest game that the wit <br>
                            of man has yet devised</p>
                            </div>
                            <img src="images/photos/1.jpg" alt="" />
                        </li>
                    </ul>
                </div>
            </section>
            <div class="clear"></div>
            <!-- FIXTURE TITLE -->
            <div class="scores-title">Upcoming Matches</div>
            <!-- FIXTURE SLIDER -->
            <section class="transparent-bg">
                <div id="fixture">
                    <div class="slide-content">
                        <div class="match-results">
						<?php
						$con=mysqli_connect("localhost","root","","suratcricups") or die('sorry') ;
						$str="SELECT * FROM `matchtbl` order by matchdate desc , matchtime asc";
						$res=mysqli_query($con,$str);
						$row1=mysqli_fetch_array($res);
						
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

						?>
                            <span><?php echo $row3[0] ; ?></span>
                            <span class="score">? - ?</span>
                            <span><?php echo $row4[0] ; ?></span>
                        </div>
                        <div class="match-place">
                            <span><?php echo $row1[4] ; ?> - <?php echo $row1[5] ; ?> at <?php echo $row5[0] ; ?></span>
                            
                        </div>
                    </div>
                    <div class="slide-content">
                        <div class="match-results">
						<?php
						$con=mysqli_connect("localhost","root","","suratcricups") or die('sorry') ;
						$str="SELECT * FROM matchtbl ORDER BY matchdate DESC, matchtime asc LIMIT 1,1";
						$res=mysqli_query($con,$str);
						$row1=mysqli_fetch_array($res);
						
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

						?>
                            <span><?php echo $row3[0] ; ?></span>
                            <span class="score">? - ?</span>
                            <span><?php echo $row4[0] ; ?></span>
                        </div>
                        <div class="match-place">
                            <span><?php echo $row1[4] ; ?> - <?php echo $row1[5] ; ?> at <?php echo $row5[0] ; ?></span>

                        </div>
                    </div>
                    <div class="slide-content">
                        <div class="match-results">
						<?php
						$con=mysqli_connect("localhost","root","","suratcricups") or die('sorry') ;
						$str="SELECT * FROM matchtbl ORDER BY matchdate DESC, matchtime asc LIMIT 2,2";
						$res=mysqli_query($con,$str);
						$row1=mysqli_fetch_array($res);
						
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

						?>
                            <span><?php echo $row3[0] ; ?></span>
                            <span class="score">? - ?</span>
                            <span><?php echo $row4[0] ; ?></span>
                        </div>
                        <div class="match-place">
                            <span><?php echo $row1[4] ; ?> - <?php echo $row1[5] ; ?> at <?php echo $row5[0] ; ?></span>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </section>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
                <!-- LEFT CONTAINER -->
                <section class="leftcontainer">
                    <h1>Format of The Game</h1>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/blog1.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">May,25 2017</div>
                            </figcaption>
                        </figure>
                        <p>A cricket match is divided into periods called innings. It is decided before the match whether the teams have to played 20 over match each. During an innings one team fields and the other bats. The two teams switch between fielding and batting after each innings.
                            
                        </p>
                    </article>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/blog2.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">may,25 2017</div>
                            </figcaption>
                        </figure>
                        <p>All eleven members of the fielding team take the field, but only two members of the batting team (two batsmen) are on the field at any given time. The order of batsmen is usually announced just before the match, but it can be varied.
                            <a href="single-post.html">Read more...</a>
                        </p>
                    </article>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/blog3.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">May,25 2017</div>
                            </figcaption>
                        </figure>
                        <p>A cricket field is a large grassy ground on which the game of cricket is played. Although generally oval in shape, there is a wide variety within this: some are almost perfect circles, some elongated ovals and some entirely irregular shapes with little or no symmetry – but they will have entirely curved boundaries, almost without exception.
                            
                        </p>
                    </article>
                    <hr/>
                    <article class="post">
                        <figure>
                            <a href="single-post.html">
                                <img src="images/photos/local.jpg" alt="" />
                            </a>
                            <figcaption>
                                <h2>Post Title</h2>
                                <div class="post-date">may,24 2017</div>
                            </figcaption>
                        </figure>
                        <p>Cricket is the most popular sport in India.It is played by many people throughout the country.The Indian national cricket team won the 1983 Cricket World Cup, the 2007 ICC World Twenty20, the 2011 Cricket World Cup, the 2013 ICC Champions Trophy, and shared the 2002 ICC Champions Trophy with Sri Lanka. Domestic competitions include the Ranji Trophy, the Duleep Trophy, the Vijay Hazare Trophy, the Deodhar Trophy, the Irani Trophy and the NKP Salve Challenger Trophy. In addition, BCCI conducts the Indian Premier League, a Twenty20 competition.
                           
                        </p>
                    </article>
                    <hr/>
                    <!-- PAGER -->
                    <div class="blogpager">
                        <div class="previous">
                            <a href="#" class="button next-prev">&#8249; Older Posts</a>
                        </div>
                        <div class="next">
                            <a href="#" class="button next-prev">Newer Posts &#8250;</a>
                        </div>
                    </div>
                </section>
                <!-- RIGHT CONTAINER -->
                <section class="rightcontainer">
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>Search</h3>
                        <form id="searchform" class="searchbox">
                            <input type="text" name="tags1" id="search" class="field searchtext" placeholder="Keyword..." />
                            <input type="submit" class="button" name="submit" value="Go" />
							<?php
					session_start();
					if(isset($_REQUEST["submit"]))
					{
						$pnm=$_REQUEST["tags1"];
						$_SESSION["pname"]=$pnm;
						header("location:playerview.php");
					}
					?>
                        </form>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>Welcome to Our Website</h3>
                        <p>Welcome to SuratCricUps
                            Get livescore update of current matches 
                            and result of past matches 
                            which are held in surat 
                            <a href="#<!--club.html-->">Read More...</a>
                        </p>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <div class="sidebarbox-title">
                            <h3>Fixture</h3>
                        </div>
                         <?php
							include('connection.php');
							$string="select * from matchtbl where matchdate>=now() order by matchdate desc,matchtime asc;";
							$result=mysqli_query($con,$string);
							while($rowfix=mysqli_fetch_array($result))
							{
								$team1=$rowfix[2];
								$team2=$rowfix[3];
								$ground=$rowfix[1];
								$str1="select t.team_name from matchtbl m ,teamtbl t where m.team1_id=t.team_id and m.team1_id='$team1'";
								$r1=mysqli_query($con,$str1);
								$row3=mysqli_fetch_array($r1);
								
								$str2="select t.team_name from matchtbl m ,teamtbl t where m.team2_id=t.team_id and m.team2_id='$team2'";
								$r2=mysqli_query($con,$str2);
								$row4=mysqli_fetch_array($r2);

								?>
								
								<div class="fixture-row">
                            <a href="fixtures.php">
                                <div class="fixture-row-left"><?php echo $row3[0];?>
                                    <div>?</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>?</div><?php echo $row4[0];?></div>
                            </a>
							</div>
                        
								
						<?php	}
							
                          ?>
                         </div>						  
                                            <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <div class="sidebarbox-title">
                            <h3>Gallery</h3>
                        </div>
                        <!-- GALLERY -->
                        <ul class="team-gallery">
                            <li>
                                <a class="clb-photo" href="images/photos/l1.jpg">
                                    <img src="images/photos/s1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                    <img src="images/photos/t1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l2.jpg">
                                    <img src="images/photos/s2.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.dailymotion.com/embed/video/x143vp2">
                                    <img src="images/photos/t2.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l3.jpg">
                                    <img src="images/photos/s3.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-link" href="http://www.themeforest.com/">
                                    <img src="images/photos/t3.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                        <a href="galleries.html" class="button button-widget">View All</a>
                    </div>
                </section>
            </section>
            <div class="clear"></div>
            <!-- SPONSORS TITLE -->
            <div class="logos-title">Sponsors</div>
            <!-- SPONSORS SLIDER -->
            <section class="transparent-bg">
                <div id="logos">
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/themeforest.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/codecanyon.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/photodune.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/activeden.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/audiojungle.png" alt="" />
                        </a>
                    </div>
                </div>
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
                        <form id="contactForm" action="processform.php" method="post">
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
            <!-- BACK TO TOP BUTTON -->
            <a href="#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/home2.jpg");
            });
        </script>
        <!-- SPONSORS SLIDER -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#logos').bxSlider({
                    slideWidth: 235,
                    pager: false,
                    minSlides: 2,
                    maxSlides: 5,
                    infiniteLoop: false,
                    hideControlOnEnd: true,
                    slideMargin: 10
                });
            });
        </script>
        <!-- FIXTURE SLIDER -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                "use strict";
                jQuery('#fixture').bxSlider({
                    pager: false,
                    infiniteLoop: false,
                    hideControlOnEnd: true
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>