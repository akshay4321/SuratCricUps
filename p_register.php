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
        
        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <!-- PAGE TITLE -->
			
           <form class="well form-horizontal" method="post"  id="contact_form" enctype="multipart/form-data">
			<fieldset>

			<!-- Form Name -->
			<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label">Date of Application</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			  <input  name="date1" id="f1"  class="form-control"  type="text">
			  <script>
							var d = new Date();
							var days = ["January","Feberuary","March","April","May","June","July","August","September","October","November","December"];
							document.getElementById("f1").value =  d.getDate() + "-" + days[d.getMonth()] + "-" + d.getFullYear();
			</script>
			  
			  
			  </div>
				<span id="error1" class="e1"></span>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label" >Player Photo</label> 
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
			  <input name="file1" id="f2" class="form-control"  type="file">
				</div>
			  </div>
			</div>


			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label" >Player Name</label> 
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input name="fname" id="f22" placeholder="Player Name" class="form-control"  type="text">
				</div>
				<span id="error22" class="e22"></span>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label">Date Of Birth(DD/MM/YYYY)</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			  <input  name="date2" id="f3" placeholder="(DD/MM/YYYY)" class="form-control"  type="text">
			  </div>
				<span id="error3" class="e3"></span>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label">Age</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
			  <span id="age" class="e4" style=" position: relative; bottom:-10px;"></span>
			  </div>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label">Contact No.</label>  
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
			  <input name="contact_no" id="f4" placeholder="(10)" class="form-control" type="text">
				</div>
				<span id="error5" class="e5"></span>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label">Residential Address</label>  
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					<textarea name="addr" id="f5" class="form-control"></textarea>
				</div>
				<span id="error6" class="e6"></span>
			  </div>
			</div>

			<!-- Text input-->
				   <div class="form-group">
			  <label class="col-md-4 control-label">E-Mail</label>  
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			  <input name="email" id="f6" placeholder="E-Mail Address" class="form-control"  type="text">
				</div>
				<span id="error7" class="e7"></span>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label" >Password</label> 
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			  <input name="user_password"  id="f7" placeholder="Password" class="form-control"  type="password">
				</div>
				<span id="error8" class="e8"></span>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label" >Confirm Password</label> 
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			  <input name="confirm_password" id="f8" placeholder="Confirm Password" class="form-control"  type="password">
				</div>
				<span id="error9" class="e9"></span>
			  </div>
			</div>

			<div class="form-group">
					<label class="col-md-4 control-label">Gender</label>
					<div class="col-md-4">
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="male" />Male
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="female" /> Female
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="other" /> Other
							</label>
						</div>
					</div>
				</div>


			  <div class="form-group"> 
			  <label class="col-md-4 control-label">Caste</label>
				<div class="col-md-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				<select name="selectcaste"  id="selectcaste" class="form-control selectpicker">
				  <option ></option>
				  <?php 
				  include('connection.php');
											$str="select * from orgtbl";
											$result=mysqli_query($con,$str);
											while($row=mysqli_fetch_array($result))
											{
												?>
												<option value="<?php echo $row['caste'] ?>"><?php echo $row['caste'] ?></option>
				  
												<?php } ?>
				</select>
			  </div>
			  <span id="error10" class="e10"></span>
			</div>
			</div>
			  
			 <div class="form-group">
			  <label class="col-md-4 control-label" >Enter Below Code</label> 
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
			  <input name="capcode" id="capt" placeholder="Code of below" class="form-control"  type="password">
				</div>
			  </div>
			</div>
			 
			 <div class="form-group">
			  <label class="col-md-4 control-label" >Confirm Code</label> 
				<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
			  <img src="captcha.php" />
				</div>
			  </div>
			</div>

			  
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label"></label>
			  <div class="col-md-4"><br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNEXT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
			  </div>
			</div>
			<?php
			session_start();

			if(isset($_POST["capcode"]))
			{
			  if($_SESSION["code"]==$_POST["capcode"])
			   {
				$v1=$_POST["date1"];
				$pic=$_FILES['file1']['name'];
				$tmp=$_FILES['file1']['tmp_name'];
				$path="upload/$pic";

				move_uploaded_file($tmp,$path);
				$v3=$_POST["fname"];
				$v4=$_POST["date2"];
				$v5=$_POST["contact_no"];
				$v6=$_POST["addr"];
				$v7=$_POST["email"];
				$v8=$_POST["user_password"];
				$v9=$_POST["gender"];
				$v10=$_POST["selectcaste"];

				$_SESSION["n1"]=$v1;
				$_SESSION["n2"]=$pic;
				$_SESSION["n3"]=$v3;
				$_SESSION["n4"]=$v4;
				$_SESSION["n5"]=$v5;
				$_SESSION["n6"]=$v6;
				$_SESSION["n7"]=$v7;
				$_SESSION["n8"]=$v8;
				$_SESSION["n9"]=$v9;
				$_SESSION["n10"]=$v10;
				header("location:pregi1.php");
			   }
			   else
			   {
				   echo "<span style='color:red ; position:relative ; left:240px ; bottom:120px ;' class='spany'> code is  not matched </span>" ;
			   }
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
            <!-- BACK TO TOP BUTTON -->
            <a href="#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
		<script src="js/dob.js"></script>
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


	
		$(document).ready(function(){
		$('#contact_form').bootstrapValidator({
       
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			date1: {
                validators: {
                     stringLength: {
                        min:3
                    }
                   
                    
                }
            },
            file1: {
                validators: {
                        stringLength: {
						extension:'jpeg,jpg,png',	
                        type:'image/jpeg,image/png,image/jpg',
						maxsize:2097152,
						message:'The selected file is not valid'
                    },
                        notEmpty: {
                        message: 'Please select the player profile'
                    }
                }
            },
             fname: {
                validators: {
                     stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter player name'
                    }
                }
            },
			 contact_no: {
                validators: {
                  stringLength: {
                        min: 7, 
                        max: 10,
				  },
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
             addr: {
                validators: {
                  stringLength: {
                        min: 7, 
                     
				  },
                    notEmpty: {
                        message: 'Please enter address.'
                     }
                }
            },   
			email: {
                validators: {
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    },
					notEmpty:{
						message:'please enter email'
					}
                }
            },
           user_password: {
			   validators: {
                  stringLength: {
                        min: 6,
						max: 10,
                     
				  },
                    notEmpty: {
                        message: 'Please enter password.'
                     }
                }
            },   
			confirm_password: {
			   validators: {
				   identical:{
					   field:'user_password',
					   message:'The password and confirm password are not matched'
				   },
                  stringLength: {
                        min: 6,
						max: 10,
                     
				  },
                    notEmpty: {
                        message: 'Please enter confirm password.'
                     }
                }
            },  
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
			date2: {
                validators: {
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'The value is not a valid date'
                    },
					notEmpty: {
                        message: 'Please enter birth date.'
                     }
                }
            },
			selectcaste: {
                    validators: {
                        notEmpty: {
                            message: 'Please select your native language.'
                        }
                    }
                },
			capcode: {
                validators: {
                     stringLength: {
                        min:5
                    },
                    notEmpty: {
                        message: 'Please enter captcha code.'
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