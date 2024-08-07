<?php
include ("./libraries/variables.php");
include ("./helper/db-config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main | <?php echo (constant('siteTitle')); ?> </title>
    <?php require ("./components/links.php"); ?>
</head>

<body>
    <header class="header-section">
        <div class="top-bar">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="top-bar-contact d-flex align-items-center">
                    <ul class="d-flex align-items-center">
                        <li><a href="#"><i class="fa-solid fa-phone"></i>
                                <?php echo constant('siteContact'); ?>
                            </a></li>
                        <li><a href="#"><i class="fa-regular fa-envelope"></i>
                                <?php echo constant('siteEmail'); ?>

                            </a></li>
                        <li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i>
                                <?php echo constant('address'); ?>
                            </a></li>
                    </ul>
                </div>
                <div class="top-bar-social d-flex align-items-center">
                    <ul class="social-icon d-flex align-items-center">
                        <li><a href="<?php echo constant('facebook'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li><a href="<?php echo constant('twitter'); ?>"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="<?php echo constant('linkedin'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li><a href="<?php echo constant('youtube'); ?>"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-wrapper">
            <div class="header-middle">
                <div class="container d-flex align-items-center justify-content-between">
                    <div class="evani-brand">
                        <a href="index-2.php">
                            <img src="images/header/logo/logo.png" alt="header">
                        </a>
                    </div>
                    <div class="evani-search-form">
                        <form class="search-product d-flex align-items-center justify-content-between"
                            id="search-product" action="#" method="GET">
                            <input type="text" name="query" placeholder="Type to search i.e “sunglass”...">
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <div class="inner-wrapper">
                        <ul class="d-flex align-items-center">
                            <li class="search-popup">
                                <a class="header-popup d-flex align-items-center" id="header-popup" href="#"><span
                                        class="log-in-text"><i class="fa-solid fa-magnifying-glass"></i></span></a>
                                <div class="popup-wraper">
                                    <div class="view-popup">
                                        <label class="close-btn fas fa-times popup-label"></label>
                                        <label class="la-search-pr">Search Product</label>
                                        <form class="search-product d-flex align-items-center justify-content-between"
                                            action="#" method="GET">
                                            <input type="text" name="query"
                                                placeholder="Type to search i.e “sunglass”...">
                                            <button type="submit">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <?php require ('login.php'); ?>
                            <?php require ('signup.php'); ?>
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
                                            <img src="images/header/cart/shape-1.png" alt="header">
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
                                            <img src="images/header/cart/shape-2.png" alt="header">
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
            <div class="mega-menu-wrapper">
                <div class="container">
                    <div class="wrapper-items d-flex align-items-center">
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
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" class="nav-link">Shop <i class="fa fa-angle-down"></i></a>
                                        <div class="sub-menu mega-menu mega-menu-column-4">
                                            <div class="list-item">
                                                <h4 class="title">Men's Fashion</h4>
                                                <ul>
                                                    <li><a href="shops.php">Men's T-Shirt</a></li>
                                                    <li><a href="shops.php">Men's Suit</a></li>
                                                    <li><a href="shops.php">Casual Shirts</a></li>
                                                    <li><a href="shops.php">Men's Jeans</a></li>
                                                    <li><a href="shops.php">Men's shoes</a></li>
                                                </ul>
                                                <h4 class="title">Men's Beauty</h4>
                                                <ul>
                                                    <li><a href="shops.php">Face Care</a></li>
                                                    <li><a href="shops.php">Hair care</a></li>
                                                    <li><a href="shops.php">Body care</a></li>
                                                </ul>
                                            </div>
                                            <div class="list-item">
                                                <h4 class="title">Women's Fashion</h4>
                                                <ul>
                                                    <li><a href="shops.php">Night Gown</a></li>
                                                    <li><a href="shops.php">Soft Towel</a></li>
                                                    <li><a href="shops.php">Fashion Dress</a></li>
                                                    <li><a href="shops.php">Women's Bag</a></li>
                                                </ul>
                                                <h4 class="title">Women's Beauty</h4>
                                                <ul>
                                                    <li><a href="shops.php">Face Care</a></li>
                                                    <li><a href="shops.php">Lip Make-up</a></li>
                                                    <li><a href="shops.php">Hand care</a></li>
                                                    <li><a href="shops.php">Cross-body Bags</a></li>
                                                </ul>
                                            </div>
                                            <div class="list-item">
                                                <h4 class="title">Home, Kitchen</h4>
                                                <ul>
                                                    <li><a href="shops.php">Kitchen Appliances</a></li>
                                                    <li><a href="shops.php">Lights & Electrical</a></li>
                                                    <li><a href="shops.php">Basket & Bucket</a></li>
                                                    <li><a href="shops.php">Kitchen Accessories</a></li>
                                                    <li><a href="shops.php">Box & Container</a></li>
                                                    <li><a href="shops.php">Disposables</a></li>
                                                    <li><a href="shops.php">Rack & Organizer</a></li>
                                                    <li><a href="shops.php">Gardening</a></li>
                                                </ul>
                                            </div>
                                            <div class="list-item">
                                                <img src="images/header/shop/shape-1.png" alt="header">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" class="nav-link">Collections <i class="fa fa-angle-down"></i></a>
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
                                    <li>
                                        <a href="contact-us.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-item item-right">
                            <a href="#"><i class="fa-solid fa-headset"></i>Help & Support</a>
                            <div class="mobile-menu-trigger">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
    require ("./components/banner.php");
    ?>
    <section class="intro-section">
        <div class="container">
            <div class="intro-items">
                <div class="single-intro animate__animated animate__fadeInUp">
                    <div class="intro-icons">
                        <div class="single-icon">
                            <img src="./assets/images/intro/shipping.png" alt="intro">
                        </div>
                    </div>
                    <div class="intro-text">
                        <h5>Free Shipping</h5>
                        <p>Worldwide Free Shipping! Elevate your shopping with hassle-free delivery. Shop now!
                        </p>
                    </div>
                </div>
                <div class="single-intro animate__animated animate__fadeInUp">
                    <div class="intro-icons">
                        <div class="single-icon">
                            <img src="./assets/images/intro/delivey.png" alt="intro">
                        </div>
                    </div>
                    <div class="intro-text">
                        <h5>24 Hours Delivery</h5>
                        <p>24-Hour Delivery Guarantee! Shop now for swift service, ensuring prompt delivery.
                        </p>
                    </div>
                </div>
                <div class="single-intro animate__animated animate__fadeInUp">
                    <div class="intro-icons">
                        <div class="single-icon">
                            <img src="./assets/images/intro/return.png" alt="intro">
                        </div>
                    </div>
                    <div class="intro-text">
                        <h5>Easy Return</h5>
                        <p>Simple Returns! Shop worry-free with our hassle-free return policy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories-section">
        <div class="container">
            <div class="ev-top-content">
                <span>Explore Them All</span>
                <h2>Top Categories</h2>
                <p>Explore a world of possibilities in our top categories. Shop now for a satisfying experience!</p>

            </div>
            <div class="categories-grid">
                <?php
                $Query = "SELECT categories, items, image FROM topcategories1 WHERE status = 1 ";
                $result = mysqli_query($conn, $Query);
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="single-categorie">
                            <a href="shops.php" class="categorie-link">
                                <div class="categorie-img">
                                    <img src="<?php echo $row['image']; ?>" alt="categories">
                                </div>
                                <div class="categorie-text">
                                    <h5>
                                        <?php echo $row['categories']; ?>
                                    </h5>
                                    <span>
                                        <?php echo $row['items']; ?> items
                                    </span>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo "No Record Found";
                }
                ?>
            </div>
            <a href="shops.php" class="view-all">View All</a>
        </div>
    </section>
    <section class="collection-section">
        <div class="container">
            <div class="ev-top-content">
                <span>Get Yours Today!</span>
                <h2>Products Are on Sale</h2>
                <p>Explore unbeatable deals on top-quality products! Shop now and elevate
                    your experience!</p>
            </div>
            <div class="collection-items">
                <div class="collection-column">
                    <div class="single-collection">
                        <a href="#" class="ev-overlay">
                            <div class="collection-img">
                                <img src="./assets/images/collection/mensCollection.png" alt="collection">
                            </div>
                            <div class="collection-inner mens-collection">
                                <h6>Mens Collection</h6>
                                <span>Free Shipping</span>
                            </div>
                        </a>
                    </div>
                    <div class="single-collection">
                        <a href="#" class="ev-overlay">
                            <div class="collection-img">
                                <img src="./assets/images/collection/CasualShirts.png" alt="collection">
                            </div>
                            <div class="collection-inner shirt-collection">
                                <h6>Casual Shirts</h6>
                            </div>
                        </a>
                    </div>
                    <div class="single-collection">
                        <a href="#" class="ev-overlay">
                            <div class="collection-img">
                                <img src="./assets/images/collection/bags.png" alt="collection">
                            </div>
                            <div class="collection-inner bags-collection">
                                <h6>Casual Bags</h6>
                            </div>
                        </a>
                    </div>
                    <div class="single-collection">
                        <a href="#" class="ev-overlay">
                            <div class="collection-img">
                                <img src="./assets/images/collection/womenShoes.png" alt="collection">
                            </div>
                            <div class="collection-inner w-showes-collection d-flex align-items-center">
                                <div class="limited-time">
                                    <span>Limited time</span>
                                    <h6>Womans Shoes</h6>
                                </div>
                                <span class="offer">70% Off</span>
                            </div>
                            <div class="collection-inner time-collection">
                                <span class="ends-text">Ends in</span>
                                <ul class="timer">
                                    <li>
                                        <span id="days1"></span>
                                        <p>Days</p>
                                    </li>
                                    <li>
                                        <span id="hours1"></span>
                                        <p>Hours</p>
                                    </li>
                                    <li>
                                        <span id="minutes1"></span>
                                        <p>Mins</p>
                                    </li>
                                    <li>
                                        <span id="seconds1"></span>
                                        <p>Secs</p>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="single-collection">
                        <a href="#" class="ev-overlay">
                            <div class="collection-img">
                                <img src="./assets/images/collection/Leaghter.png" alt="collection">
                            </div>
                            <div class="collection-inner leaghter-collection">
                                <span>30% Off</span>
                                <h6>Leaghter Collection</h6>
                            </div>
                        </a>
                    </div>
                    <div class="single-collection">
                        <a href="#" class="ev-overlay">
                            <div class="collection-img">
                                <img src="./assets/images/collection/WomanCollection.png" alt="collection">
                            </div>
                            <div class="collection-inner woman-collection">
                                <span>Special Offer</span>
                                <h6>Woman Collection</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-section">
        <div class="container">
            <div class="ev-top-content">
                <span>Grab Yours Now</span>
                <h2 style="text-align: center;">Don't Miss Out <br> on Our Sale</h2>
                <p>Turn up the savings! Shop now for irresistible deals.</p>
            </div>
            <div class="menu-fulter">
                <ul class=" justify-content-center nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link active" id="pills-home-tab"
                            data-bs-toggle="tab" data-bs-target="#pills-home" role="tab" aria-selected="true">Recent
                            Listed</a></li>
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link" id="pills-profile-tab"
                            data-bs-toggle="tab" data-bs-target="#pills-profile" role="tab" aria-selected="true">Popular
                            Pets</a></li>
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link " id="pills-contact-tab"
                            data-bs-toggle="tab" data-bs-target="#pills-contact" role="tab" aria-selected="true">Top
                            Featured</a></li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="products ev-products">
                        <?php
                        $Query = "SELECT * FROM sale WHERE catageory = 'recent'";
                        $result = mysqli_query($conn, $Query);
                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="single-product.php">
                                            <img src="<?php echo $row['image']; ?>" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-
                                                <?php echo $row['percentoff']; ?>%
                                            </span>
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i
                                                            class="fa-solid fa-cart-shopping"></i></a></li>
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
                                        <h2 class="product-title"><a href="single-product.php">
                                                <?php echo $row['title']; ?>
                                            </a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>$
                                                    <?php echo $row['priceonoff']; ?>
                                                </span></li>
                                            <li><span>$
                                                    <?php echo $row['totalprice']; ?>
                                                </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo 'Data Not Found';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="products ev-products">
                        <?php
                        $Query = "SELECT * FROM sale WHERE catageory = 'popular'";
                        $result = mysqli_query($conn, $Query);
                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="single-product.php">
                                            <img src="<?php echo $row['image']; ?>" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-
                                                <?php echo $row['percentoff']; ?>%
                                            </span>
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i
                                                            class="fa-solid fa-cart-shopping"></i></a>
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
                                        <h2 class="product-title"><a href="single-product.php">
                                                <?php echo $row['title']; ?>
                                            </a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>$
                                                    <?php echo $row['priceonoff']; ?>
                                                </span></li>
                                            <li><span>$
                                                    <?php echo $row['totalprice']; ?>
                                                </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo 'Data Not Found';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="products ev-products">
                        <?php
                        $Query = "SELECT * FROM sale WHERE catageory = 'top'";
                        $result = mysqli_query($conn, $Query);
                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="single-product.php">
                                            <img src="<?php echo $row['image']; ?>" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-
                                                <?php echo $row['percentoff']; ?>%
                                            </span>
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i
                                                            class="fa-solid fa-cart-shopping"></i></a>
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
                                        <h2 class="product-title"><a href="single-product.php">
                                                <?php echo $row['title']; ?>
                                            </a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>$
                                                    <?php echo $row['priceonoff']; ?>
                                                </span></li>
                                            <li><span>$
                                                    <?php echo $row['totalprice']; ?>
                                                </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo 'Data Not Found';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <a href="shops.php" class="view-all">View All</a>
        </div>
    </section>
    <section class="featured-product-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-7 col-12 d-flex align-items-center">
                    <div class="pr-featured-left">
                        <h6>50% Discount Running</h6>
                        <h2>Double Protection Face Mask</h2>
                        <p>Introducing our Double Protection Face Mask, designed to provide an extra layer of defense in
                            today's challenging environment. Crafted with premium materials and innovative technology,
                            this mask offers dual-layer protection to safeguard you against airborne particles and
                            germs.
                        </p>
                        <ul class="d-flex align-items-center">
                            <li><span>$5</span></li>
                            <li><span>$10</span></li>
                        </ul>
                        <div class="btn_box">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-5 col-12 ">
                    <div
                        class="pr-featured-right d-flex align-items-center justify-content-lg-end justify-content-center">
                        <div class="pr-featured-img featured-img1">
                            <img src="images/index-1/featured/shape-1.png" alt="featured">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-collection-section">
        <div class="container-fluid">
            <div class="collection-grid">
                <div class="featured-collection-left">
                    <a href="#" class="ev-overlay">
                        <div class="featured-collection-img">
                            <img src="images/index-1/featured-collection/shape-1.png" alt="featured">
                        </div>
                        <div class="summer-collection">
                            <span>30% Off</span>
                            <h2>Summer Collection 2021</h2>
                        </div>
                    </a>
                </div>
                <div class="featured-collection-right">
                    <a href="#" class="ev-overlay">
                        <div class="featured-collection-img">
                            <img src="images/index-1/featured-collection/shape-2.png" alt="featured">
                        </div>
                        <div class="featured-collection-text">
                            <span>Buy one get one free</span>
                            <h2>Men’s Casual Outfit 2021</h2>
                            <h5>Starts From $100</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-product-section">
        <div class="container">
            <div class="ev-top-content">
                <span>Find One from Here</span>
                <h2>Top Products</h2>
                <p>Discover our handpicked Top Products for excellence in style, quality, and performance.</p>
            </div>
            <div class="swiper products">
                <div class="product-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product single-slide">
                            <div class="product-img">
                                <a href="single-product.php">
                                    <img src="images/index-1/popular-product/shape-1.png" alt="popular-product">
                                </a>
                                <div class="product-labels d-flex justify-content-between">
                                    <span class="ev-offer">-51%</span>
                                </div>
                                <div class="p-option">
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i
                                                    class="fa-solid fa-cart-shopping"></i></a></li>
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
                                <h2 class="product-title"><a href="single-product.php">Original desi jeans</a></h2>
                                <ul class="d-flex align-items-center">
                                    <li><span>$99</span></li>
                                    <li><span>$200</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide product single-slide">
                            <div class="product-img">
                                <a href="single-product.php">
                                    <img src="images/index-1/popular-product/shape-2.png" alt="popular-product">
                                </a>
                                <div class="product-labels d-flex justify-content-between">
                                    <span class="ev-offer">-51%</span>
                                    <span class="ev-hot">hot</span>
                                </div>
                                <div class="p-option">
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i
                                                    class="fa-solid fa-cart-shopping"></i></a></li>
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
                                <h2 class="product-title"><a href="single-product.php">Bag for woman</a></h2>
                                <ul class="d-flex align-items-center">
                                    <li><span>$99</span></li>
                                    <li><span>$200</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide product single-slide">
                            <div class="product-img">
                                <a href="single-product.php">
                                    <img src="images/index-1/popular-product/shape-3.png" alt="popular-product">
                                </a>
                                <div class="p-option">
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i
                                                    class="fa-solid fa-cart-shopping"></i></a></li>
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
                                <h2 class="product-title"><a href="single-product.php">Blue keds for men</a></h2>
                                <ul class="d-flex align-items-center">
                                    <li><span>$99</span></li>
                                    <li><span>$200</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide product single-slide">
                            <div class="product-img">
                                <a href="single-product.php">
                                    <img src="images/index-1/popular-product/shape-4.png" alt="popular-product">
                                </a>
                                <div class="product-labels d-flex justify-content-between">
                                    <span class="ev-offer">-51%</span>
                                </div>
                                <div class="p-option">
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i
                                                    class="fa-solid fa-cart-shopping"></i></a></li>
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
                                <h2 class="product-title"><a href="single-product.php">Original desi jeans</a></h2>
                                <ul class="d-flex align-items-center">
                                    <li><span>$99</span></li>
                                    <li><span>$200</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide product single-slide">
                            <div class="product-img">
                                <a href="single-product.php">
                                    <img src="images/index-1/popular-product/shape-5.png" alt="popular-product">
                                </a>
                                <div class="product-labels d-flex justify-content-between">
                                    <span class="ev-offer">-51%</span>
                                    <span class="ev-hot">hot</span>
                                </div>
                                <div class="p-option">
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i
                                                    class="fa-solid fa-cart-shopping"></i></a></li>
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
                                <h2 class="product-title"><a href="single-product.php">Bag for woman</a></h2>
                                <ul class="d-flex align-items-center">
                                    <li><span>$99</span></li>
                                    <li><span>$200</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-slide product single-slide">
                            <div class="product-img">
                                <a href="single-product.php">
                                    <img src="images/index-1/popular-product/shape-6.png" alt="popular-product">
                                </a>
                                <div class="p-option">
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                        <li class="anim-hidden"><a href="#"><i
                                                    class="fa-solid fa-cart-shopping"></i></a></li>
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
                                <h2 class="product-title"><a href="single-product.php">Blue keds for men</a></h2>
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
        </div>
    </section>
    <section class="brand-section">
        <div class="container">
            <div class="brand-heading">
                <h2>Brand title</h2>
            </div>
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-2.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-3.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-4.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-5.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-6.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-7.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-8.png" alt="brand">
                        </div>
                    </div>
                    <div class="swiper-slide brand-slide">
                        <div class="brand-img">
                            <img src="images/index-1/brand/shape-9.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container">
            <div class="ev-top-content">
                <span>Testimonials</span>
                <h2>What People Say About us</h2>
                <p>See what others are saying about us!</p>
            </div>
            <div class="swiper testimonial-slider testimonial-items">
                <div class="swiper-wrapper">
                    <?php
                    $Query = "SELECT * FROM review LEFT JOIN customer ON review.cid = customer.cid";
                    $result = mysqli_query($conn, $Query);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="swiper-slide single-testimonial">
                                <div class="testimonial-author d-flex align-items-center justify-content-between">
                                    <div class="author-bio d-flex align-items-center">
                                        <div class="author-img">
                                            <img src="<?php echo $row['authorimage']; ?>" alt="testimonial">
                                        </div>
                                        <div class="author-text">
                                            <h6>
                                                <?php echo strtoupper($row['fullname']); ?>
                                            </h6>
                                            <span>
                                                <?php echo $row['subject']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="<?php echo $row['quoteimage']; ?>" alt="testimonial">
                                    </div>
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        <?php echo $row['description']; ?>
                                    </p>
                                </div>
                            </div>

                        <?php }
                    } else {
                        echo "Data Not FOund";
                    }
                    ?>
                </div>
                <div class="swiper-button-next hero-slide-btn testimonial-slide-btn">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="swiper-button-prev hero-slide-btn testimonial-slide-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="news-section">
        <div class="container">
            <div class="ev-top-content">
                <span>Latest News</span>
                <h2>From Our Blog</h2>
                <p>Stay updated with the latest insights and trends. Dive into our blog for fresh perspectives and
                    expert advice.</p>
            </div>
            <div class="swiper news-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide single-post">
                        <div class="news-img">
                            <a href="single-blog.php">
                                <img src="images/index-1/blog/shape-1.png" alt="news">
                            </a>
                        </div>
                        <div class="inner-article">
                            <span>May 3, 2021</span>
                            <h6><a href="single-blog.php">Lets make the begging to save the world again</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide single-post">
                        <div class="news-img">
                            <a href="single-blog.php">
                                <img src="images/index-1/blog/shape-2.png" alt="news">
                            </a>
                        </div>
                        <div class="inner-article">
                            <span>May 3, 2021</span>
                            <h6><a href="single-blog.php">Lets make the begging to save the world again</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide single-post">
                        <div class="news-img">
                            <a href="single-blog.php">
                                <img src="images/index-1/blog/shape-3.png" alt="news">
                            </a>
                        </div>
                        <div class="inner-article">
                            <span>May 3, 2021</span>
                            <h6><a href="single-blog.php">Lets make the begging to save the world again</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide single-post">
                        <div class="news-img">
                            <a href="single-blog.php">
                                <img src="images/index-1/blog/shape-4.png" alt="news">
                            </a>
                        </div>
                        <div class="inner-article">
                            <span>May 3, 2021</span>
                            <h6><a href="single-blog.php">Lets make the begging to save the world again</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide single-post">
                        <div class="news-img">
                            <a href="single-blog.php">
                                <img src="images/index-1/blog/shape-5.png" alt="news">
                            </a>
                        </div>
                        <div class="inner-article">
                            <span>May 3, 2021</span>
                            <h6><a href="single-blog.php">Lets make the begging to save the world again</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide single-post">
                        <div class="news-img">
                            <a href="single-blog.php">
                                <img src="images/index-1/blog/shape-6.png" alt="news">
                            </a>
                        </div>
                        <div class="inner-article">
                            <span>May 3, 2021</span>
                            <h6><a href="single-blog.php">Lets make the begging to save the world again</a></h6>
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