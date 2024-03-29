<header class="header-section header-section-two">
    <div class="top-bar" id="d-hide">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="top-bar-contact d-flex align-items-center">
                <ul class="d-flex align-items-center">
                    <li><a href="#"><i class="fa-solid fa-phone"></i>
                            <?php echo constant('siteContact'); ?>
                        </a></li>
                    <li><a href="#"><i class="fa-regular fa-envelope"></i>
                            <?php echo constant('siteEmail'); ?>
                        </a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i>Locate Our Shop</a></li>
                </ul>
            </div>

            <div class="top-bar-social d-flex align-items-center">
                <ul class="view-switcher d-flex align-items-center">
                    <!-- <li>
                        <span>usd<i class="fa-solid fa-angle-down"></i></span>
                        <ul class="evani-curency">
                            <li><a href="#">euro</a></li>
                            <li><a href="#">tk</a></li>
                            <li><a href="#">usd</a></li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <span>en<i class="fa-solid fa-angle-down"></i></span>
                        <ul class="evani-curency">
                            <li><a href="#">english</a></li>
                            <li><a href="#">bangla</a></li>
                            <li><a href="#">jerman</a></li>
                        </ul>
                    </li> -->
                </ul>
                <ul class="social-icon d-flex align-items-center" style="padding:10px;">
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="header-middle sticky-header">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="header-middle-left">
                <div class="evani-brand">
                    <a href="index-2.php">
                        <img src="images/header/logo/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="header-middle-right d-flex align-items-center">
                <div class="mega-menu-wrapper">
                    <div class="container">
                        <div class="wrapper-items">
                            <!-- menu start here -->
                            <div class="header-item item-left">
                                <div class="menu-overlay">
                                </div>
                                <nav class="nav-menu">
                                    <div class="mobile-menu-head">
                                        <div class="go-back"><i class="fa fa-angle-left"></i></div>
                                        <div class="current-menu-title"></div>
                                        <div class="mobile-menu-close"><i class="fa-solid fa-x"></i></div>
                                    </div>
                                    <ul class="menu-items">
                                        <li class="menu-item-has-children">
                                            <a href="./index.php" class="nav-link  <?php if ($PageIndex == 'home') {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?> ">Home <i class="fa fa-angle-down"></i></a>
                                            <!-- <div class="sub-menu single-column-menu">
                                                <ul>
                                                    <li><a href="index-2.php">Home One</a></li>
                                                    <li><a href="index_2.php">Home two</a></li>
                                                    <li><a href="index_3.php">Home three</a></li>
                                                </ul>
                                            </div> -->
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#" class="nav-link <?php if ($PageIndex == 'shop') {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">Shop <i
                                                    class="fa fa-angle-down nav-icon d-lg-none d-md-block"></i></a>
                                            <div class="sub-menu mega-menu mega-menu-column-4">
                                                <div class="list-item">
                                                    <h4 class="title">Men's Fashion</h4>
                                                    <ul>
                                                        <li><a href="shop-with-sidebar.php">Men's T-Shirt</a></li>
                                                        <li><a href="shop-with-sidebar.php">Men's Suit</a></li>
                                                        <li><a href="shop-with-sidebar.php">Casual Shirts</a></li>
                                                        <li><a href="shop-with-sidebar.php">Men's Jeans</a></li>
                                                        <li><a href="shop-with-sidebar.php">Men's shoes</a></li>
                                                    </ul>
                                                    <h4 class="title">Men's Beauty</h4>
                                                    <ul>
                                                        <li><a href="shop-with-sidebar.php">Face Care</a></li>
                                                        <li><a href="shop-with-sidebar.php">Hair care</a></li>
                                                        <li><a href="shop-with-sidebar.php">Body care</a></li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <h4 class="title">Women's Fashion</h4>
                                                    <ul>
                                                        <li><a href="shop-with-sidebar.php">Night Gown</a></li>
                                                        <li><a href="shop-with-sidebar.php">Soft Towel</a></li>
                                                        <li><a href="shop-with-sidebar.php">Fashion Dress</a></li>
                                                        <li><a href="shop-with-sidebar.php">Women's Bag</a></li>
                                                    </ul>
                                                    <h4 class="title">Women's Beauty</h4>
                                                    <ul>
                                                        <li><a href="shop-with-sidebar.php">Face Care</a></li>
                                                        <li><a href="shop-with-sidebar.php">Lip Make-up</a></li>
                                                        <li><a href="shop-with-sidebar.php">Hand care</a></li>
                                                        <li><a href="shop-with-sidebar.php">Cross-body Bags</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <h4 class="title">Home, Kitchen</h4>
                                                    <ul>
                                                        <li><a href="shop-with-sidebar.php">Kitchen Appliances</a>
                                                        </li>
                                                        <li><a href="shop-with-sidebar.php">Lights & Electrical</a>
                                                        </li>
                                                        <li><a href="shop-with-sidebar.php">Basket & Bucket</a>
                                                        </li>
                                                        <li><a href="shop-with-sidebar.php">Kitchen Accessories</a>
                                                        </li>
                                                        <li><a href="shop-with-sidebar.php">Box & Container</a>
                                                        </li>
                                                        <li><a href="shop-with-sidebar.php">Disposables</a></li>
                                                        <li><a href="shop-with-sidebar.php">Rack & Organizer</a>
                                                        </li>
                                                        <li><a href="shop-with-sidebar.php">Gardening</a></li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <img src="images/header/shop/shape-1.png" alt="shop">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#" class="nav-link <?php if ($PageIndex == 'collections') {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">Collections <i
                                                    class="fa fa-angle-down nav-icon  d-lg-none d-md-block"></i></a>
                                            <div class="sub-menu mega-menu mega-menu-column-4">
                                                <div class="list-item text-center">
                                                    <a href="collections.php">
                                                        <img src="images/header/collection/shape-1.png" alt="header">
                                                        <h4 class="title">Men's T-Shirt</h4>
                                                    </a>
                                                </div>
                                                <div class="list-item text-center">
                                                    <a href="collections.php">
                                                        <img src="images/header/collection/shape-2.png" alt="header">
                                                        <h4 class="title">Women's Bag</h4>
                                                    </a>
                                                </div>
                                                <div class="list-item text-center">
                                                    <a href="collections.php">
                                                        <img src="images/header/collection/shape-3.png" alt="header">
                                                        <h4 class="title">Ball Gown</h4>
                                                    </a>
                                                </div>
                                                <div class="list-item text-center">
                                                    <a href="collections.php">
                                                        <img src="images/header/collection/shape-4.png" alt="header">
                                                        <h4 class="title">Night Gown</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#" class="nav-link <?php if ($PageIndex == 'pages') {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">Pages <i
                                                    class="fas fa-angle-down nav-icon d-lg-none d-md-block"></i></a>
                                            <div class="sub-menu mega-menu mega-menu-column-4">
                                                <div class="list-item">
                                                    <h4 class="title">Home Page</h4>
                                                    <ul>
                                                        <li><a href="index.php">Home One</a></li>
                                                        <!-- <li><a href="index_2.php">Home Two</a></li>
                                                        <li><a href="index_3.php">Home Three</a></li> -->
                                                    </ul>
                                                    <h4 class="title">Shop Page</h4>
                                                    <ul>
                                                        <li><a href="shop.php">Shop</a></li>
                                                        <li><a href="shop-with-sidebar.php">Shop With Sidebar</a>
                                                        </li>
                                                        <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <h4 class="title">Collection Page</h4>
                                                    <ul>
                                                        <li><a href="collections.php">Collections</a></li>
                                                        <li><a href="all-collections.php">All Collections</a></li>
                                                    </ul>
                                                    <h4 class="title">Product Page</h4>
                                                    <ul>
                                                        <li><a href="single-product.php">Single Product</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="wishlist.php">Wishlist</a></li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <h4 class="title">Blog Page</h4>
                                                    <ul>
                                                        <li><a href="recent-blog.php">Recent Blog</a></li>
                                                        <li><a href="recent-blog-two.php">Recent Blog Two</a></li>
                                                        <li><a href="single-blog.php">Single Blog</a></li>
                                                    </ul>
                                                </div>
                                                <div class="list-item">
                                                    <img src="images/header/product/shape-1.png" alt="product">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="contact-us.php" class="nav-link <?php if ($PageIndex == 'contact') {
                                                echo "active";
                                            } else {
                                                echo "";
                                            } ?>">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- menu end here -->
                            <div class="header-item item-right">
                                <div class="mobile-menu-trigger">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner-wrapper text-end">
                    <ul class="d-flex align-items-center">
                        <li class="search-popup">
                            <a class="header-popup d-flex align-items-center" id="header-popup" href="#"><span
                                    class="log-in-text"></span><i class="fa-solid fa-magnifying-glass"></i></a>
                            <div class="popup-wraper">
                                <div class="view-popup">
                                    <label class="close-btn fas fa-times popup-label"></label>
                                    <label class="la-search-pr">Search Product</label>
                                    <form class="search-product d-flex align-items-center justify-content-between"
                                        method="GET">
                                        <input type="text" name="search" placeholder="Type to search i.e “sunglass”...">
                                        <button type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="log-in header-popup log-in-btn d-flex align-items-center" id="header-popup1"
                                href="#"><span class="log-in-text">log in</span><i class="fa-solid fa-user"></i></a>
                            <div class="popup-wraper1">
                                <div class="view-popup">
                                    <label class="close-btn fas fa-times popup-label"></label>
                                    <h6>Login</h6>

                                    <form action="https://ethemestudio.com/demo/evani/login.php" method="POST">
                                        <div class="d-block">
                                            <label>Username:</label>
                                            <input type="text" name="username" required>
                                        </div>
                                        <div class="d-block">
                                            <label>Password:</label>
                                            <input type="text" name="password" required>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="check-box d-flex align-items-center">
                                                <input type="checkbox" name="remember">
                                                <label>Remember me</label>
                                            </div>
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                        <div class="popup-btn">
                                            <button class="popup-link" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="sign-up header-popup d-flex align-items-center" id="header-popup2" href="#"><span
                                    class="log-in-text">sign up</span></a>
                            <div class="popup-wraper2">
                                <div class="view-popup">
                                    <label class="close-btn fas fa-times popup-label"></label>
                                    <h6>Sign Up</h6>

                                    <form>
                                        <div class="d-block">
                                            <label>Username:</label>
                                            <input type="text" name="username" required>
                                        </div>
                                        <div class="d-block">
                                            <label>Password:</label>
                                            <input type="text" name="password" required>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="check-box d-flex align-items-center">
                                                <input type="checkbox" name="remember">
                                                <label>Remember me</label>
                                            </div>
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                        <div class="popup-btn">
                                            <button class="popup-link" type="submit">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                        <li class="product-cart">
                            <a href="#" class="cart-icon" id="toggleButton"><i
                                    class="fa-solid fa-cart-shopping"></i><span class="cart-number">0</span></a>
                            <div class="view-cart content" id="content">
                                <div class="cart-title d-flex align-items-center justify-content-between">
                                    <span class="product-item">1 ITEM</span>
                                    <a href="shopping-cart.php">View cart</a>
                                </div>
                                <div class="product-item d-flex justify-content-between">
                                    <div class="product-inner">
                                        <a href="#" class="d-block">Brown Bag</a>
                                        <span>1*199.00</span>
                                    </div>
                                    <div class="product-img">
                                        <img src="images/header/cart/shape-1.png" alt="cart">
                                        <a href="#">
                                            <span><i class="fa-solid fa-x"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-item d-flex justify-content-between">
                                    <div class="product-inner">
                                        <a href="#" class="d-block">Brown Bag</a>
                                        <span>1*199.00</span>
                                    </div>
                                    <div class="product-img">
                                        <img src="images/header/cart/shape-2.png" alt="cart">
                                        <a href="#">
                                            <span><i class="fa-solid fa-x"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="sub-total d-flex align-items-center justify-content-between">
                                    <span>Subtotal:</span>
                                    <span>$199.00</span>
                                </div>
                                <div class="popup-btn">
                                    <a href="#" class="popup-link">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>