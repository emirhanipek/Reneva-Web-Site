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

                        <h2>Project Page</h2>
                        <!-- <span>Tagline</span> -->

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Projects</a></li>
                                <li>Project Page</li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>


        <!-- Content
================================================== -->
        <div class="container">
            <div class="row sticky-wrapper">

                <!-- Photos -->
                <div class="col-md-8">
                    <div class="project-photos">
                        <a href="images/single-project-01a.jpg" class="mfp-gallery img-hover" title="This is a caption"><img src="images/single-project-01.jpg" alt=""></a>
                        <a href="images/single-project-02a.jpg" class="mfp-gallery img-hover" title="Another caption"><img src="images/single-project-02.jpg" alt=""></a>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-md-4">
                    <div class="project-details sticky">
                        <h4 class="headline with-border">Project Name</h4>
                        <p>Nulla congue magna varius pellentesque.Entesque habitant morbi tristique senectus lorem et netus et malesuada fames ac turpis egestas.</p>
                        <p>Vestibulum quis ipsum ipsum. Maecenas ullamcorper nibh sed justo iaculis lacinia. Nam eu arcu facilisis, condimentum urna et, tempor erat.</p>

                        <ul class="details">
                            <li><span>Date:</span> 11 January 2016</li>
                            <li><span>Location:</span> London</li>
                            <li><span>Category:</span> <a href="#">Kitchens</a>, <a href="#">Carpentry</a></li>
                        </ul>

                        <ul class="project-nav">
                            <li><a href="#" class="button border"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                            <li><a href="#" class="button border">Next <i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <?php
include("footer.php"); 
?>


    </div>
    <!-- Wrapper / End -->

</body>

<!-- Mirrored from www.vasterad.com/themes/skynet/single-project-content-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:19:35 GMT -->

</html>
