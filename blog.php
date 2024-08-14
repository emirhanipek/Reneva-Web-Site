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
			<div class="post-container">
				<div class="post-img"><a href="blog-post-page.html" class="img-hover"><img src="images/blog-post-01.jpg" alt=""></a></div>
				<div class="post-content">
					<a href="#"><h3>Tackle These Simple Home Repairs </h3></a>
					<div class="meta-tags">
						<span>March 10, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>
					<a class="button" href="blog-post-page.html">Read More</a>
				</div>
			</div>

			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="blog-post-page.html" class="img-hover"><img src="images/blog-post-02.jpg" alt=""></a></div>
				<div class="post-content">
					<a href="#"><h3>How to Make the Most of a Small Kitchen </h3></a>
					<div class="meta-tags">
						<span>January 10, 2016</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>
					<a class="button" href="blog-post-page.html">Read More</a>
				</div>
			</div>

			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="blog-post-page.html" class="img-hover"><img src="images/blog-post-03.jpg" alt=""></a></div>
				<div class="post-content">
					<a href="#"><h3>Creative Uses for Tools</h3></a>
					<div class="meta-tags">
						<span>December 27, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae, tempus sed augue. Curabitur quis lectus quis augue dapibus facilisis. Vivamus tincidunt orci est, in vehicula nisi eleifend ut. Vestibulum sagittis varius orci vitae.</p>
					<a class="button" href="blog-post-page.html">Read More</a>
				</div>
			</div>

			<!-- Pagination -->
			<div class="pagination-container">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"></div>

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

<!-- Mirrored from www.vasterad.com/themes/skynet/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:21:40 GMT -->
</html>