<!DOCTYPE html>
<html lang="en">
<head>
	
<!--===============================================================================================-->
</head>
<body>
<style>

</style>
<?php $conn = new mysqli("localhost","root", "", "project"); ?>
<?php require('../config/autoload.php'); 
include("./header.php");?>
<div class="breadcrumbs-w3l">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.php">Home</a>
				<span>Login </span>
			</span>
		</div>
	</div>
<?php
$dao=new DataAccess();






$elements=array("cust_email"=>"","password"=>"");
$form=new FormAssist($elements,$_POST);
$rules=array(
    'cust_email'=>array('required'=>true),
    'password'=>array('required'=>true),
);
$validator=new FormValidator($rules);

if(isset($_POST['login']))
{
    if($validator->validate($_POST))
    {
    


        $data=array('cust_email'=>$_POST['cust_email'],'password'=>$_POST['password']);
        if($info=$dao->login($data,'customer'))
        {
           
            $_SESSION['cust_email']=$info['cust_email'];
            $_SESSION['cust_id']=$info['cust_id'];
            $_SESSION['cust_firstname']=$info['cust_firstname'];

$a=$_SESSION['cust_email'];
$b=$_SESSION['cust_id'];
$d=$_SESSION['cust_firstname'];



	echo "<script> alert('Welcome $a to the  HOME SERVICE Family...');</script> ";	
		
   echo"<script> location.replace('profile.php'); </script>";
			
           
       


 }
        else{
            $msg="invalid username or password";
			
				echo "<script> alert('Invalid username or password');</script> ";
        }
    }

    



}

?>



	
	<div class="jumbotron">
		<div class="container">
		<center>
		<img src="find_user.png" class="user-image img-responsive" alt="centered image" /></center>

			<div id="news" class="w3ls-section">
		<div class="container">
			<h4 class="main-title" class="text-center p-5"> Account Login </h4><br>

			<form action="" method="POST">
			<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="contact-form-text" style="color:black">Email</label>
					<input type="text" name="cust_email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Must be a valid email" placeholder="xxx@xx.com" class="form-control">
				</div>
			</div>
				<div class="col-md-6">
				<div class="form-group">
					<label for="" class="contact-form-text" style="color:black">Password</label>
					
					<input type="password" name="password" class="form-control">
					
						
					</span>
				</div>
			</div>
				</div><br>
				<br>

				<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					
					<input type="submit" name="login" value="Sign in" class="btn btn-success btn-block" class="text-center p-5">
				</div>
			</div>

<div class="col-md-6">
				<div class="form-group">
					<label for="">Forgot</label>
					<a href="forgotpassword.php">Your Password ? </a>
				</div>
			</div></div><br>
			<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Are You a new User?</label>
					<a href="cust_registration.php">Sign Up </a>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Are You a employee?</label>
					<a href="emp_register.php">Account Login</a>
				</div>
			</div></div>
				</form></div></div>
		</div>
	</div>
	
	

	
<div class="footer-main-w3_agile">
		<div class="footer-dot">
			<div class="container">
				<div class="footer-bottom">
					<div class="col-md-4 col-sm-6 col-xs-6 footer-grid1 address">
						<h4>Contact Info</h4>
						<ul>
							<li>
								<span class="fa fa-home" aria-hidden="true"></span>
								<p>1234k Avenue,block-4,New York City.</p>
							</li>
							<li>
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<a href="mailto:info@example.com">info@example.com</a>
							</li>
							<li>
								<span class="fa fa-phone" aria-hidden="true"></span>
								<p>+1234 567 892</p>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-grid1 res">
						<h4>services</h4>
						<ul>
							<li>
								<a href="#">appliance repair</a>
							</li>
							<li>
								<a href="#">home improvement</a>
							</li>
							<li>
								<a href="#">home maintenance</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-grid1 ftr-img">
						<h4>latest Posts</h4>
						<ul>
							<li>
								<a href="single.html">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t3.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t4.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t3.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t4.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-6 footer-grid1">
						<h4>legal</h4>
						<ul>
							<li>
								<a href="privacy.html">privacy policy</a>
							</li>
							<li>
								<a href="#">licence info</a>
							</li>
							<li>
								<a href="terms.html">terms of use</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="agileinfo-subscribe-grid text-center">
					<img src="images/mail.png" alt="">
					<h4>stay upto date with our newsletter!</h4>
					<p>Sign up to receive helpful Q&A, info on upcoming services and more.</p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="cpy-footer">
		<div class="container">
			<div class="footer-top">
				<div class="logo-nav-left footer-top1">
					<h2>
						<a href="index.html">
							<span class="fa fa-home logo-ftr"></span>a2z
							<span class="logo-title">home services</span>
						</a>
					</h2>
				</div>
				<div class="footer-social">
					<h4>connect with us</h4>
					<ul>
						<li>
							<a href="#">
								<span class="fa fa-facebook icon_facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter icon_twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-dribbble icon_dribbble"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus icon_g_plus"></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="cpy-text">
			<p>© 2017 A2Z. All rights reserved | Design by
				<a href="http://w3layouts.com/">W3layouts</a>
				<a href="../admin/index.php">.............................Admin Login</a>
			</p>
		</div>

	</div>
	<!--//footer  -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- start-smooth-scrolling -->
	<script  src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script> 
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script> 
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script  src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>