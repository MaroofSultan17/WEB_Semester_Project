<?php
include ("./libraries/variables.php");
include ("./helper/db-config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Single Product | <?php echo (constant('siteTitle')); ?>
    </title>
    <?php require ("./components/links.php"); ?>
</head>

<body>
    <header class="header-section header-section-two">
        <div class="top-bar" id="d-hide">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="top-bar-contact d-flex align-items-center">
                    <ul class="d-flex align-items-center">
                        <li><a href="#"><i class="fa-solid fa-phone"></i>+123 456 7890</a></li>
                        <li><a href="#"><i class="fa-regular fa-envelope"></i>hello@evani.com</a></li>
                        <li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i>Locate Our Shop</a></li>
                    </ul>
                </div>
                <div class="top-bar-social d-flex align-items-center">
                    <ul class="view-switcher d-flex align-items-center">
                        <li>
                            <span>usd<i class="fa-solid fa-angle-down"></i></span>
                            <ul class="evani-curency">
                                <li><a href="#">euro</a></li>
                                <li><a href="#">tk</a></li>
                                <li><a href="#">usd</a></li>
                            </ul>
                        </li>
                        <li>
                            <span>en<i class="fa-solid fa-angle-down"></i></span>
                            <ul class="evani-curency">
                                <li><a href="#">english</a></li>
                                <li><a href="#">bangla</a></li>
                                <li><a href="#">jerman</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="social-icon d-flex align-items-center">
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
                        <a href="index-2.html">
                            <img src="images/header/logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="header-middle-right d-flex align-items-center">
                    <div class="mega-menu-wrapper">
                        <div class="container">
                            <div class="wrapper-items">
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
                                                <a href="#" class="nav-link  active ">Home <i
                                                        class="fa fa-angle-down"></i></a>
                                                <div class="sub-menu single-column-menu">
                                                    <ul>
                                                        <li><a href="index-2.html">Home One</a></li>
                                                        <li><a href="index_2.html">Home two</a></li>
                                                        <li><a href="index_3.html">Home three</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#" class="nav-link">Shop <i
                                                        class="fa fa-angle-down nav-icon d-lg-none d-md-block"></i></a>
                                                <div class="sub-menu mega-menu mega-menu-column-4">
                                                    <div class="list-item">
                                                        <h4 class="title">Men's Fashion</h4>
                                                        <ul>
                                                            <li><a href="shop-with-sidebar.html">Men's T-Shirt</a></li>
                                                            <li><a href="shop-with-sidebar.html">Men's Suit</a></li>
                                                            <li><a href="shop-with-sidebar.html">Casual Shirts</a></li>
                                                            <li><a href="shop-with-sidebar.html">Men's Jeans</a></li>
                                                            <li><a href="shop-with-sidebar.html">Men's shoes</a></li>
                                                        </ul>
                                                        <h4 class="title">Men's Beauty</h4>
                                                        <ul>
                                                            <li><a href="shop-with-sidebar.html">Face Care</a></li>
                                                            <li><a href="shop-with-sidebar.html">Hair care</a></li>
                                                            <li><a href="shop-with-sidebar.html">Body care</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-item">
                                                        <h4 class="title">Women's Fashion</h4>
                                                        <ul>
                                                            <li><a href="shop-with-sidebar.html">Night Gown</a></li>
                                                            <li><a href="shop-with-sidebar.html">Soft Towel</a></li>
                                                            <li><a href="shop-with-sidebar.html">Fashion Dress</a></li>
                                                            <li><a href="shop-with-sidebar.html">Women's Bag</a></li>
                                                        </ul>
                                                        <h4 class="title">Women's Beauty</h4>
                                                        <ul>
                                                            <li><a href="shop-with-sidebar.html">Face Care</a></li>
                                                            <li><a href="shop-with-sidebar.html">Lip Make-up</a></li>
                                                            <li><a href="shop-with-sidebar.html">Hand care</a></li>
                                                            <li><a href="shop-with-sidebar.html">Cross-body Bags</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-item">
                                                        <h4 class="title">Home, Kitchen</h4>
                                                        <ul>
                                                            <li><a href="shop-with-sidebar.html">Kitchen Appliances</a>
                                                            </li>
                                                            <li><a href="shop-with-sidebar.html">Lights & Electrical</a>
                                                            </li>
                                                            <li><a href="shop-with-sidebar.html">Basket & Bucket</a>
                                                            </li>
                                                            <li><a href="shop-with-sidebar.html">Kitchen Accessories</a>
                                                            </li>
                                                            <li><a href="shop-with-sidebar.html">Box & Container</a>
                                                            </li>
                                                            <li><a href="shop-with-sidebar.html">Disposables</a></li>
                                                            <li><a href="shop-with-sidebar.html">Rack & Organizer</a>
                                                            </li>
                                                            <li><a href="shop-with-sidebar.html">Gardening</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-item">
                                                        <img src="images/header/shop/shape-1.png" alt="shop">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#" class="nav-link">Collections <i
                                                        class="fa fa-angle-down nav-icon  d-lg-none d-md-block"></i></a>
                                                <div class="sub-menu mega-menu mega-menu-column-4">
                                                    <div class="list-item text-center">
                                                        <a href="collections.html">
                                                            <img src="images/header/collection/shape-1.png"
                                                                alt="header">
                                                            <h4 class="title">Men's T-Shirt</h4>
                                                        </a>
                                                    </div>
                                                    <div class="list-item text-center">
                                                        <a href="collections.html">
                                                            <img src="images/header/collection/shape-2.png"
                                                                alt="header">
                                                            <h4 class="title">Women's Bag</h4>
                                                        </a>
                                                    </div>
                                                    <div class="list-item text-center">
                                                        <a href="collections.html">
                                                            <img src="images/header/collection/shape-3.png"
                                                                alt="header">
                                                            <h4 class="title">Ball Gown</h4>
                                                        </a>
                                                    </div>
                                                    <div class="list-item text-center">
                                                        <a href="collections.html">
                                                            <img src="images/header/collection/shape-4.png"
                                                                alt="header">
                                                            <h4 class="title">Night Gown</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="contact-us.html" class="nav-link">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
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
                                            <input type="text" name="search"
                                                placeholder="Type to search i.e â€œsunglassâ€...">
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
                                <a class="sign-up header-popup d-flex align-items-center" id="header-popup2"
                                    href="#"><span class="log-in-text">sign up</span></a>
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
                                        <a href="shopping-cart.html">View cart</a>
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
    <section class="hero-section ev-common-hero" style="background-image: url(images/common-banner/shape-1.png);">
        <div class="container-fluid">
            <div class="ev-hero-content">
                <h2>Single Product</h2>
                <span><a href="index-2.html">Home</a> > <a href="all-collections.html"> product ></a> Single</span>
            </div>
        </div>
    </section>
    <section class="single-product-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="product-img-glarry">
                        <div class="product-glarry-slider">
                            <div class="slider__flex">
                                <div class="slider__col">
                                    <div class="slider__thumbs">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="slider__image"><img
                                                            src="images/single-product/products/shape-1.png"
                                                            alt="products"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="slider__image"><img
                                                            src="images/single-product/products/shape-2.png"
                                                            alt="products"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="slider__image"><img
                                                            src="images/single-product/products/shape-3.png"
                                                            alt="products"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="slider__image"><img
                                                            src="images/single-product/products/shape-4.png"
                                                            alt="products"></div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="slider__image"><img
                                                            src="images/single-product/products/shape-5.png"
                                                            alt="products"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider__images">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="slider__image"><img
                                                        src="images/single-product/products/shape-1.png" alt="products">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image"><img
                                                        src="images/single-product/products/shape-2.png" alt="products">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image"><img
                                                        src="images/single-product/products/shape-3.png" alt="products">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image"><img
                                                        src="images/single-product/products/shape-4.png" alt="products">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slider__image"><img
                                                        src="images/single-product/products/shape-5.png"
                                                        alt="products "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="product-summery">
                        <div class="single-product-inner">
                            <h6><a href="#">Fashion, Sports</a></h6>
                            <h3><a href="#">Preo mens red polo shirt</a></h3>
                            <ul class="single-product-price d-flex">
                                <li>
                                    <h3>$108</h3>
                                </li>
                                <li>
                                    <h4> $120</h4>
                                </li>
                            </ul>
                            <div class="product-review d-flex justify-content-between">
                                <ul class="d-flex">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><a href="#">33 Review</a></li>
                                </ul>
                                <div class="product-available"><span> Available : </span> <span>12</span></div>
                            </div>
                            <p class="product-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusncididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco </p>
                            <ul class="product-color d-flex align-items-center">
                                <li><span>Color</span></li>
                                <li>
                                    <p></p>
                                </li>
                                <li>
                                    <p></p>
                                </li>
                                <li>
                                    <p></p>
                                </li>
                            </ul>
                            <ul class="product-size d-flex align-items-center">
                                <li><span>Size</span></li>
                                <li><a href="#"><span>S</span></a></li>
                                <li><a href="#"><span>M</span></a></li>
                                <li><a href="#"><span>L</span></a></li>
                                <li><a href="#"><span>XL</span></a></li>
                            </ul>
                            <ul class="product-add-cart d-flex align-items-center">
                                <li>
                                    <div class="pro-counter d-flex align-items-center justify-content-between">
                                        <button data-decrease class="counter-button">-</button>
                                        <input data-value type="text" class="counter-input" id="quantity" value="0"
                                            min="0" readonly>
                                        <button data-increase class="counter-button">+</button>
                                    </div>
                                </li>
                                <li class="btn_box add-cart-btn">
                                    <a href="#">Add to Cart <i class="fa-solid fa-cart-shopping"></i></a>
                                </li>
                                <li class="btn_box heart-btn">
                                    <a href="#"><i class="fa-solid fa-heart"></i></a>
                                </li>
                                <li class="btn_box arrow-btn">
                                    <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                                </li>
                            </ul>
                            <ul class="product-tag d-flex align-items-center">
                                <li>
                                    <h6>Share</h6>
                                </li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Girls</a></li>
                            </ul>
                            <ul class="product-social d-flex align-items-center">
                                <li>
                                    <h6>Share</h6>
                                </li>
                                <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="https://www.google.com/"><i class="fa-brands fa-google-plus-g"></i></a>
                                </li>
                                <li><a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tabs">
                <div class="menu-fulter">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"><a href="#" class="nav-link active" id="pills-home-tab"
                                data-bs-toggle="tab" data-bs-target="#pills-home" role="tab" aria-selected="true">Item
                                Description</a></li>
                        <li class="nav-item" role="presentation"><a href="#" class="nav-link" id="pills-profile-tab"
                                data-bs-toggle="tab" data-bs-target="#pills-profile" role="tab"
                                aria-selected="true">Item information</a></li>
                        <li class="nav-item" role="presentation"><a href="#" class="nav-link " id="pills-contact-tab"
                                data-bs-toggle="tab" data-bs-target="#pills-contact" role="tab"
                                aria-selected="true">Item Review</a></li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="product-discription">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proiden</p>
                            <ul class="single-product-features">
                                <li>
                                    <h6>Share</h6>
                                </li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Sed ut perspiciatis unde omnis iste
                                        natus error sit voluptatem accusantium doloremque laudantium </span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Letotam rem aperiam, eaque ipsa quae
                                        ab illo inventore veritatis et quasi architecto beatae </span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit </span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Lesed quia consequuntur magni dolores
                                        eos qui ratione voluptatem sequi nesciunt. </span></li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Neque porro quisquam est, qui dolorem
                                        ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non </span>
                                </li>
                                <li><i class="fa-solid fa-angles-right"></i><span>Rumquam eius modi tempora incidunt
                                        utritatis et quasi architecto beat labore et dolore magnam aliquam quaerat
                                        voluptatem.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="product-information">
                            <div class="product-info">
                                <h3>Product Name</h3>
                                <p><strong>Category:</strong> Mens T-shirt ;</p>
                                <p><strong>Price: </strong> $99 ;</p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget mauris urna.
                                </p>
                                <p><strong>Available Colors:</strong> Red ;</p>
                                <p><strong>Available Sizes:</strong> XL ;</p>
                                <button class="add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="review-form">
                            <div class="ev-comments">
                                <div class="comment-wrapper">
                                    <div class="comment-headding">
                                        <h3>20 Review</h3>
                                    </div>
                                    <div class="comment-inner  d-lg-flex d-md-block">
                                        <div class="comment-img">
                                            <img src="images/single-product/review/shape-1.png" alt="product">
                                        </div>
                                        <div class="comment-text">
                                            <ul class="comment-top d-flex justify-content-between">
                                                <li>
                                                    <h6>Sarah Pulmar</h6>
                                                    <span>April 21, 2021 10.40 Pm</span>
                                                </li>
                                                <li><a href="#" class="reply-btn">reply</a></li>
                                            </ul>
                                            <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor
                                                sit amet,
                                                consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna
                                                aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="comment-inner  d-lg-flex d-md-block">
                                        <div class="comment-img">
                                            <img src="images/single-product/review/shape-2.png" alt="product">
                                        </div>
                                        <div class="comment-text">
                                            <ul class="comment-top d-flex justify-content-between">
                                                <li>
                                                    <h6>Juwel Khan</h6>
                                                    <span>April 21, 2021 10.40 Pm</span>
                                                </li>
                                                <li><a href="#" class="reply-btn">reply</a></li>
                                            </ul>
                                            <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor
                                                sit amet,
                                                consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna
                                                aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="comment-inner d-lg-flex d-md-block">
                                        <div class="comment-img">
                                            <img src="images/single-product/review/shape-3.png" alt="product">
                                        </div>
                                        <div class="comment-text">
                                            <ul class="comment-top d-flex justify-content-between">
                                                <li>
                                                    <h6>Mike Harnandez</h6>
                                                    <span>April 21, 2021 10.40 Pm</span>
                                                </li>
                                                <li><a href="#" class="reply-btn">reply</a></li>
                                            </ul>
                                            <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor
                                                sit amet,
                                                consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna
                                                aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="comment-inner d-lg-flex d-md-block">
                                        <div class="comment-img">
                                            <img src="images/single-product/review/shape-4.png" alt="product">
                                        </div>
                                        <div class="comment-text">
                                            <ul class="comment-top d-flex justify-content-between">
                                                <li>
                                                    <h6>Sanjida Ema</h6>
                                                    <span>April 21, 2021 10.40 Pm</span>
                                                </li>
                                                <li><a href="#" class="reply-btn">reply</a></li>
                                            </ul>
                                            <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor
                                                sit amet,
                                                consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna
                                                aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-form">
                                <h3>Add Review</h3>
                                <form>
                                    <input type="text" name="name" placeholder="Your Name" required>
                                    <input type="email" name="email" placeholder="Your Email" required>
                                    <input type="text" name="date" placeholder="Date of Purchase" required>
                                    <div class="overall-rating">
                                        <div class="rating-wrapper d-flex align-content-center justify-content-between">
                                            <select class="inner-rating">
                                                <option>Overall experience:</option>
                                                <option>1 - Poor</option>
                                                <option>2 - Fair</option>
                                                <option>3 - Good</option>
                                                <option>4 - Very Good</option>
                                                <option>5 - Excellent</option>
                                            </select>
                                            <span><i class="fa-solid fa-angle-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="overall-review d-flex align-items-center">
                                        <div class="review-comment">
                                            <label>Overall Review :</label>
                                        </div>
                                        <div class="review-container">
                                            <button class="star"><span class="stararea">â˜…</span></button>
                                            <button class="star"><span class="stararea">â˜…</span></button>
                                            <button class="star"><span class="stararea">â˜…</span></button>
                                            <button class="star"><span class="stararea">â˜…</span></button>
                                            <button class="star"><span class="stararea">â˜…</span></button>
                                        </div>
                                    </div>
                                    <div class="user-comment">
                                        <textarea id="comments" name="comments" rows="5"
                                            placeholder="Write your review here"></textarea>
                                    </div>
                                    <button class="submit-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-product-section single-popular-product-section">
        <div class="container">
            <div class="heading-text">
                <h3>Related Items</h3>
            </div>
            <div class="swiper products single-product-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide product single-slide">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/single-product/popular-product/shape-1.png" alt="product">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Original desi jeans</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide product single-slide">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/single-product/popular-product/shape-2.png" alt="product">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Bag for woman</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide product single-slide">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/single-product/popular-product/shape-3.png" alt="product">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Blue keds for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide product single-slide">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/single-product/popular-product/shape-4.png" alt="product">
                            </a>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Original desi jeans</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide product single-slide">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/single-product/popular-product/shape-5.png" alt="product">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-offer">-51%</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Bag for woman</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide product single-slide">
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="images/single-product/popular-product/shape-6.png" alt="product">
                            </a>
                            <div class="product-labels d-flex justify-content-between">
                                <span class="ev-hot">hot</span>
                            </div>
                            <div class="p-option">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                    <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-text">
                            <ul class="product-stars d-flex">
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                            </ul>
                            <h2 class="product-title"><a href="single-product.html">Blue keds for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <?php require ("./components/footer.php"); ?>
    <div class="footer_iconTop">
        <a href="#" id="button"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <?php require ("./components/script.php"); ?>
</body>

</html>