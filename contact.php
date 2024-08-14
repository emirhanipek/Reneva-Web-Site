<?php
include("header.php"); 
?>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header
================================================== -->

<?php
include("navbar.php"); 
?>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background-image: url('images/titlebar-parallax-03.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Contact</h2>
				
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Contact</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Contact
================================================== -->

<!-- Container / Start -->
<div class="container">

	<div class="row">
		<div class="col-md-12">

			<!-- Google Maps -->
			<section class="google-map-container">
				<div id="googlemaps" class="google-map google-map-full"></div>
			</section>
			<!-- Google Maps / End -->
		</div>
	</div>

	<div class="row">

		<!-- Contact Details -->
		<div class="col-md-3">
			<!-- text box -->
			<div class="sidebar-textbox">
				<h4>Our Office</h4>
				<span class="margin-bottom-10">45 Park Avenue, Apt. 303 </br>New York, NY 10016</span>
				Phone: <span>(123) 123-456 </span> <br>
				E-Mail: <span><a href="http://www.vasterad.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aec1c8c8c7cdcbeecbd6cfc3dec2cb80cdc1c3">[email&#160;protected]</a></span> <br>
			</div>

			<ul class="social-icons margin-bottom-30">
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				<div class="clearfix"></div>
			</ul>
		</div>

		<!-- Contact Form -->
		<div class="col-md-9">

			<section id="contact">
				<h4 class="headline with-border margin-top-10 margin-bottom-35">Let’s get in touch</h4>

				<div id="contact-message"></div> 

					<form method="post" action="http://www.vasterad.com/themes/skynet/contact.php" name="contactform" id="contactform" autocomplete="on">

					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Your Name" required="required" />
							</div>
							
							<div>
								<input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
						
						<div class="col-md-6">
							<div>
								<input name="phone" type="tel" id="phone" size="30" placeholder="Phone number (optional)" />
							</div>

							<div>
								<select name="subject" id="subject" required="required">
									<option value="">Select Subject</option>
									<option value="Painting">Painting</option>
									<option value="Repair">Repair</option>
									<option value="Carpentry">Carpentry</option>
									<option value="Plumbing">Plumbing</option>
									<option value="Remodeling">Remodeling</option>
									<option value="Electrical">Electrical</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
					</div>

					<div>
						<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit" class="submit" id="submit" value="Submit" />

					</form>
			</section>
		</div>

	</div>

</div>
<!-- Container / End -->


<?php
include("footer.php"); 
?>


</div>
<!-- Wrapper / End -->

</body>

<!-- Mirrored from www.vasterad.com/themes/skynet/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:18:31 GMT -->
</html>