<!DOCTYPE html>
<html lang="en">
    
    

<head>
<style>

</style>

        <title>player registration</title>
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
        <link rel="stylesheet" type="text/css" href="regicss.css">
	   
	   
		
		
		
	   <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
		
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
                        <a href="#">Contact</a>
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
        
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE TITLE -->
			
           <form class="well form-horizontal" method="post"  id="contact_form" enctype="multipart/form-data">
			<fieldset>

			<!-- Form Name -->
			<legend><center><h2><b>cricket playing Form</b></h2></center></legend><br>

			<!-- Text input-->

			
			<div class="form-group">
					<label class="col-md-4 control-label">Playing Role</label>
					<div class="col-md-4">
						<div class="radio">
							<label>
								<input type="radio" name="playing" value="Batting" />Batting
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="playing" value="Bowling" />Bowling
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="playing" value="Allrounder" />All rounder
							</label>
						</div>
					</div>
				</div>
             			<div class="form-group">
					<label class="col-md-4 control-label">Bowling Arm</label>
					<div class="col-md-4">
						<div class="radio">
							<label>
								<input type="radio" name="arm" value="Left arm" />Left Arm
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="arm" value="right arm" />Right Arm
							</label>
						</div>
						
					</div>
				</div>
				  <div class="form-group">
					<label class="col-md-4 control-label">Bowling Pace</label>
					<div class="col-md-4">
						<div class="radio">
							<label>
								<input type="radio" name="pace" value="med pace" />Med pace
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pace" value="off spinner" />off spinner
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pace" value="leg spinner" />leg spinner
							</label>
						</div>
					</div>
				</div>
							
					<div class="form-group">
					<label class="col-md-4 control-label">Batting</label>
					<div class="col-md-4">
						<div class="radio">
							<label>
								<input type="radio" name="bat" value="Right hand" />Right hand
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="bat" value="Left hand" />Left hand
							</label>
						</div>
						
					</div>
				</div>

			

			  
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label"></label>
			  <div class="col-md-4"><br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit1" class="btn btn-primary" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSubmit <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
			  </div>
			</div>
			<?php
session_start();
if(isset($_POST["submit1"]))
{
	$v1=$_SESSION["n1"];
	$doa=date('Y-m-d',strtotime($v1));
	$pic=$_SESSION["n2"];
	$v3=$_SESSION["n3"];
	$v4=$_SESSION["n4"];
	$v5=$_SESSION["n5"];
	$v6=$_SESSION["n6"];
	$v7=$_SESSION["n7"];
	$v8=$_SESSION["n8"];
	$v9=$_SESSION["n9"];
	$v10=$_SESSION["n10"];

	$v11=$_POST["playing"];
	$v12=$_POST["arm"];
	$v13=$_POST["pace"];
	$v14=$_POST["bat"];
	
	include('connection.php');
	$str="insert into playertbl(date_of_app,photo,player_name,dob,phno,address,player_emailid,password,gender,caste,playingrole,bowlingarm,bowlingpace,batting,status) values('$doa','$pic','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14',0)";
	$result=mysqli_query($con,$str);
	header("location:login.php");
}
?>
			</fieldset>
			</form>
			   
            
            <div class="clear"></div>
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
                        <a href="#">
                            <img class="social-icon" src="images/social-icons/facebook.png" alt="Facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="social-icon" src="images/social-icons/twitter.png" alt="Twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="social-icon" src="images/social-icons/flickr.png" alt="Flickr" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="social-icon" src="images/social-icons/linkedin.png" alt="Linked in" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="social-icon" src="images/social-icons/google%2b.png" alt="Google+" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="social-icon" src="images/social-icons/vimeo.png" alt="Vimeo" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
                jQuery('body').backstretch("images/photos/c1.jpg");
            });
        </script>
        <!-- FILTERS -->
        
        
	
	
	<script type="text/javascript"> 


	
		$(document).ready(function(){
		$('#contact_form').bootstrapValidator({
       
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			playing: {
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    }
                }
            },
			arm: {
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    }
                }
            },       
            pace: {
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    }
                }
            },        
            bat: {
                validators: {
                    notEmpty: {
                        message: 'The field is required'
                    }
                }
            }    
            
            }
        })
            // Use Ajax to submit form data

});
</script>
    </body>



</html>