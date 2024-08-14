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
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Blog</h2>
				
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


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="row">
		<div class="col-md-8">

			<!-- Post -->
			<div class="post-container margin-bottom-30">
				<div class="post-img"><a href="#" class="img-hover"><img src="images/blog-post-01.jpg" alt=""></a></div>
				<div class="post-content no-border">
					<a href="#"><h3>Tackle These Simple Home Repairs </h3></a>
					<div class="meta-tags">
						<span>March 10, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
				<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>

					<div class="post-quote">
						<span class="icon"></span>
						<blockquote>
							Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum.
						</blockquote>
					</div>

					<p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.</p>
					<p class="margin-reset">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio. </p>

				</div>
			</div>

			<!-- Comments -->
			<section class="comments">
			<h4 class="headline with-border margin-bottom-30">Comments <span class="comments-amount">(2)</span></h4>

				<ul>
					<li>
						<div class="avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by"><h5>Kathy Brown</h5><span class="date">12th, June 2015</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
						</div>
					</li>

					<li>
						<div class="avatar"><img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by"><h5>John Doe</h5><span class="date">15th, May 2015</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
						</div>

					</li>
				 </ul>
			</section>


			<div class="clearfix"></div>
			<div class="margin-top-35"></div>


			<!-- Add Comment -->
			<h4 class="headline with-border margin-bottom-30">Add Comment</h4>
			
			<!-- Add Comment Form -->
			<form id="add-comment" class="add-comment">

				<div>
					<label>Name:</label>
					<input type="text" value=""/>
				</div>
					
				<div>
					<label>Email: <span>*</span></label>
					<input type="text" value=""/>
				</div>

				<div>
					<label>Comment: <span>*</span></label>
					<textarea cols="40" rows="3"></textarea>
				</div>


				<a href="#" class="button color">Add Comment</a>
				<div class="clearfix"></div>
				<div class="margin-bottom-20"></div>

			</form>

		</div>


	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="col-md-4 extra-gutter-left">

		<!-- Search -->
		<div class="widget">
			<h4>Search</h4>
			<div class="search">
				<div class="input"><input class="search-field" type="text" placeholder="To search type and hit enter" value=""/></div>
			</div>
		</div>

		<!-- Tabs -->
		<div class="widget">

			<ul class="tabs-nav blog">
				<li class="active"><a href="#tab1">Popular</a></li>
				<li><a href="#tab2">Featured</a></li>
				<li><a href="#tab3">Recent</a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">
					
					<!-- Recent Posts -->
					<ul class="widget-tabs">
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-01.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Tackle These Simple Home Repairs </a></h5>
								<span>March 12, 2016</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Crown Molding for Cabinets</a></h5>
								<span>January 10, 2016</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Creative Uses for Power Tools</a></h5>
								<span>December 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
		
				</div>

				<div class="tab-content" id="tab2">
				
					<!-- Featured Posts -->
					<ul class="widget-tabs">
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-01.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Tackle These Simple Home Repairs </a></h5>
								<span>March 12, 2016</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Creative Uses for Power Tools</a></h5>
								<span>December 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>	
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Crown Molding for Cabinets</a></h5>
								<span>January 10, 2016</span>
							</div>
							<div class="clearfix"></div>

						</li>
					</ul>
				</div>

				<div class="tab-content" id="tab3">
				
					<!-- Recent Posts -->
					<ul class="widget-tabs">
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Crown Molding for Cabinets</a></h5>
								<span>January 10, 2016</span>
							</div>
							<div class="clearfix"></div>

						</li>

						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-01.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Tackle These Simple Home Repairs </a></h5>
								<span>March 12, 2016</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-post-page.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="blog-post-page.html">Creative Uses for Power Tools</a></h5>
								<span>December 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
				
			</div>
		</div>


		<div class="widget">
			<h4>Social</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>

		</div>
		
		<div class="clearfix"></div>
		<div class="margin-bottom-40"></div>
	</div>
	</div>
	<!-- Widgets / End -->


</div>


<?php
include("footer.php"); 
?>

</div>
<!-- Wrapper / End -->

</body>

<!-- Mirrored from www.vasterad.com/themes/skynet/blog-post-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:21:40 GMT -->
</html>