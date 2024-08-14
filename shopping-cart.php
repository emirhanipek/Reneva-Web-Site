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

                        <h2>Shopping Cart</h2>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li>Shopping Cart</li>
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
                <div class="col-md-12">
                    <!-- Cart -->
                    <table class="cart-table responsive-table">

                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>

                        <!-- Item #1 -->
                        <tr>
                            <td><img src="images/shop-widget-02.jpg" alt="" /></td>
                            <td class="cart-title"><a href="#">Angle Grinder</a></td>
                            <td>$99.00</td>
                            <td>
                                <form action='#' class="qty-btns">
                                    <div class="qtyminus"></div>
                                    <input type='text' name="quantity" value='1' class="qty" />
                                    <div class="qtyplus"></div>
                                </form>
                            </td>
                            <td class="cart-total">$99.00</td>
                            <td><a href="#" class="cart-remove"></a></td>
                        </tr>

                    </table>

                    <!-- Buttons -->
                    <table class="cart-table bottom">
                        <tr>
                            <th>
                                <a href="#" class="button color ">Proceed to Checkout</a>
                                <a href="#" class="button gray">Update Cart</a>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="row">

                <div class="col-md-6">
                    <!-- Cart Totals -->
                    <div class="cart-totals">
                        <h4 class="headline with-border margin-bottom-30">Cart Totals</h4>

                        <table class="cart-table margin-top-5">

                            <tr>
                                <th>Cart Subtotal</th>
                                <td><strong>$99.00</strong></td>
                            </tr>

                            <tr>
                                <th>Shipping and Handling</th>
                                <td>Free Shipping</td>
                            </tr>

                            <tr>
                                <th>Order Total</th>
                                <td><strong>$99.00</strong></td>
                            </tr>

                        </table>

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

<!-- Mirrored from www.vasterad.com/themes/skynet/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:21:30 GMT -->

</html>
