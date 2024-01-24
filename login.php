<!DOCTYPE html>
<html lang="en">
    
    

<head>
<style>

</style>

        <title>login</title>
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
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
		
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   



<script>
function fun(str)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("t2").value=this.responseText;
		}
	};
	xmlhttp.open("GET","remem.php?c="+str,true);
	xmlhttp.send();
}
</script>
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
            <div class="page-title">Login page</div>
            <!-- PAGE CONTAINER -->
            <section class="pagecontainer">
               
				
				<form class="well form-horizontal" name="f1" method="post"  id="contact_form" >
				<div class="d1"><br>
				<center><img src="1480623034_lock.png" alt="login" class="icon-login">
				<fieldset>

				<!-- Form Name -->
				<legend><h2><b>Login</b></h2></legend></center><br>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" ></label>
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input name="n1" id="t1" style="width:150px;" placeholder="user EmailID" class="form-control"  type="text" onblur="fun(this.value)">
					</div>
				  </div>
				</div>

				<div class="form-group">
				 <label class="col-md-4 control-label" ></label> 
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				  <input name="n2"  id="t2" style="width:150px;" placeholder="Password" class="form-control"  type="password">
					</div>
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" ></label> 
					<div class="col-md-4 inputGroupContainer">
					<div class="input-group">
				  <input type="checkbox" name="ch1" value="ch1">Remember<br><br>
					</div>
					<span id="error8" class="e8"></span>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label"></label>
				  <div class="col-md-4">
				  <button name="submit" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogin<span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
				  </div>
				</div>
				<?php
				session_start();
				$hostname="localhost";
				$username="root";
				$passwrd="";
				$dbname="suratcricups";
				$con=mysqli_connect($hostname,$username,$passwrd,$dbname);

				if(isset($_POST['submit']))
				{
					$nm=$_POST['n1'];
					$ps=$_POST['n2'];
					
					if(isset($_REQUEST['ch1']))
					{
						setcookie("c1","$nm",time()+(86400*30));
						setcookie("c2","$ps",time()+(86400*30));
					}
					if(empty($nm) || empty($ps))
					{
						echo "<span style='color:red;'>userEmailID or password field is required.</span>";
					}
					
					else
					{
						$str="select * from playertbl where player_emailid='$nm' and password='$ps'";
						$result=mysqli_query($con,$str);
						$row=mysqli_fetch_row($result);
						if($row[7]==$nm && $row[8]==$ps)
						{
							$_SESSION['sd']=$row[0];
							header("location:profile_player.php");
						}
						else 
						{
						$str="select * from orgtbl where org_emailid='$nm' and org_password='$ps'";
						$result=mysqli_query($con,$str);
						$row=mysqli_fetch_row($result);
						if($row[4]==$nm && $row[5]==$ps)
						{
							$_SESSION['sd']=$row[0];
							header("location:org_template/index.php");
						}
						else
						{
							$str="select * from admintbl where admin_email='$nm' and admin_pass='$ps'";
						$result=mysqli_query($con,$str);
						$row=mysqli_fetch_row($result);
						if($row[2]==$nm && $row[3]==$ps)
						{
							$_SESSION['sd']=$row[0];
							header("location:admin_template/index.php");
						}
						else
						{
							echo "<span style='color:red;'>userEmailID or password  may be wrong.</span>";
						}
						}
						
						}
					}
				}
				?>
				<br>if you are not registered?<a href="pregi.php"><b>Click here for player registration</b></a>
				<br>if you are not registered?<a href="oregi.php"><b>Click here for organizer registration</b></a>

				</form>
				</center>
			   
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
        
        <script src="js/custom.js" type="text/javascript"></script>
    </body>



</html>