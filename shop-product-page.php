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

                        <h2>Shop Page</h2>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Shop Page</li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>


        <!-- Content
================================================== -->
        <div class="container">
            <div class="row">

                <!-- Product -->
                <div class="col-md-9 col-sm-7 extra-gutter-right">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="simple-slider shop">
                                <ul class="slides">
                                    <li><img src="images/shop-09a.jpg" alt="" /></li>
                                    <li><img src="images/shop-09b.jpg" alt="" /></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="product-details">
                                <h4>Angle Grinder</h4>
                                <span class="price"><del>$129</del> <mark>$99</mark></span>
                                <span class="divider"></span>
                                <p>Etiam lobortis dolor eros sed lorem sodales imperdiet dapibus. Maecenas faucibus urna sed turpis lacinia consectetur. Mauris dolor bibendum nibh consectetuer.</p>

                                <br>
                                <form action="#">
                                    <div class="qtyminus"></div>
                                    <input type="text" name="quantity" value='1' class="qty" />
                                    <div class="qtyplus"></div>
                                </form>

                                <div class="clearfix"></div>

                                <a href="#" class="button">Add to Cart</a>

                            </div>

                        </div>
                    </div>

                    <div class="margin-top-35"></div>

                    <div class="row">
                        <div class="col-md-12">

                            <!-- Tabs Navigation -->
                            <ul class="tabs-nav">
                                <li class="active"><a href="#tab1">Description</a></li>
                                <li><a href="#tab2">Additional Information</a></li>
                            </ul>

                            <!-- Tabs Content -->
                            <div class="tabs-container">
                                <div class="tab-content" id="tab1">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>


                                    <ul class="list-1 alt margin-bottom-20">
                                        <li>Justo duo dolores et ea rebum</li>
                                        <li>Duis autem vel eum iriure dolor</li>
                                        <li>Stet clita kasd gubergren</li>
                                    </ul>


                                    <p>In hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait.</p>

                                </div>

                                <div class="tab-content" id="tab2">
                                    <table class="basic-table">

                                        <tr>
                                            <td>Maximum RPM</td>
                                            <td>11 000</td>
                                        </tr>

                                        <tr>
                                            <td>Adjustable Handle Position</td>
                                            <td>Yes</td>
                                        </tr>

                                        <tr>
                                            <td>Switch Type</td>
                                            <td>Paddle</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>


                            <!-- Related Products -->
                            <h4 class="headline with-border margin-top-50 margin-bottom-35">Related Products</h4>
                            <div class="row">

                                <!-- Product -->
                                <div class="col-md-4">
                                    <div class="shop-item">
                                        <figure>
                                            <a href="#"><img src="images/shop-01.jpg" alt="" /></a>
                                            <figcaption class="item-description">
                                                <a href="product-page.html">
                                                    <h5>Measuring Tape</h5>
                                                </a>
                                                <span class="sale"><del>$9</del> <mark>$6</mark></span>
                                                <a href="#" class="button gray">Add to Cart</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Product -->
                                <div class="col-md-4">
                                    <div class="shop-item">
                                        <figure>
                                            <a href="#"><img src="images/shop-02.jpg" alt="" /></a>
                                            <figcaption class="item-description">
                                                <a href="product-page.html">
                                                    <h5>Cordless Screwdriver</h5>
                                                </a>
                                                <span class="sale">$59</span>
                                                <a href="#" class="button gray">Add to Cart</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <!-- Product -->
                                <div class="col-md-4">
                                    <div class="shop-item">
                                        <figure>
                                            <a href="#"><img src="images/shop-03.jpg" alt="" /></a>
                                            <figcaption class="item-description">
                                                <a href="product-page.html">
                                                    <h5>Hammer</h5>
                                                </a>
                                                <span class="sale">$3</span>
                                                <a href="#" class="button gray">Add to Cart</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <!-- Product -->


                <!-- Widgets -->
                <div class="col-md-3 col-sm-5">

                    <!-- Search -->
                    <div class="widget margin-bottom-50">
                        <h4>Search</h4>
                        <div class="search">
                            <div class="input"><input class="search-field" type="text" placeholder="To search type and hit enter" value="" /></div>
                        </div>
                    </div>


                    <!-- Cart -->
                    <div class="widget">
                        <div class="headline no-margin">
                            <h4>Shopping Cart</h4>
                        </div>
                        <div id="cart">

                            <ul class="cart-items">
                                <li>
                                    <a href="#" class="cart-item-title">Angle Grinder</a>
                                    <span class="cart-item-amount"><a class="item-remove" href="#"><i class="fa fa-remove"></i></a> 1 x $99</span>
                                </li>
                            </ul>

                            <span class="cart-subtotal">Subtotal: <strong>$99</strong></span>

                            <a href="#" class="button gray">View Cart</a>
                            <a href="#" class="button margin-top-5">Checkout</a>
                        </div>
                    </div>


                    <!-- Recent Posts -->
                    <div class="widget margin-bottom-50">
                        <h4>Popular Products</h4>
                        <ul class="widget-tabs shop">

                            <!-- Post #1 -->
                            <li>
                                <div class="widget-thumb">
                                    <a href="#"><img src="images/shop-widget-01.jpg" alt="" /></a>
                                </div>

                                <div class="widget-text">
                                    <h5><a href="#">Pliers</a></h5>
                                    <span><del>$10</del> <mark>$5</mark></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>

                            <!-- Post #2 -->
                            <li>
                                <div class="widget-thumb">
                                    <a href="#"><img src="images/shop-widget-02.jpg" alt="" /></a>
                                </div>

                                <div class="widget-text">
                                    <h5><a href="#">Angle Grinder</a></h5>
                                    <span><del>$129</del> <mark>$99</mark></span>
                                </div>
                                <div class="clearfix"></div>

                            </li>

                            <!-- Post #3 -->
                            <li>
                                <div class="widget-thumb">
                                    <a href="#"><img src="images/shop-widget-03.jpg" alt="" /></a>
                                </div>

                                <div class="widget-text">
                                    <h5><a href="#">Screwdriver</a></h5>
                                    <span>$1</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
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

<!-- Mirrored from www.vasterad.com/themes/skynet/shop-product-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:21:29 GMT -->

</html>
