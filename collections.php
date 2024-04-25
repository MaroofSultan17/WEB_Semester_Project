<?php
include ("./libraries/variables.php");
include ("./helper/db-config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Collections | <?php echo (constant('siteTitle')); ?>
    </title>
    <?php require ("./components/links.php"); ?>

</head>

<body>
    <?php require ("./components/header_collection.php"); ?>
    <section class="hero-section ev-common-hero" style="background-image: url(images/common-banner/shape-1.png);">
        <div class="container-fluid">
            <div class="ev-hero-content">
                <h2>Collections</h2>
                <span><a href="index-2.php">Home</a> > Collections</span>
            </div>
        </div>
    </section>
    <section class="product-section product-section-two product-collection-section">
        <div class="container">
            <div class="product-top d-md-flex align-items-end justify-content-between d-sm-block">
                <h6>Best Seller’s Collections</h6>
                <a href="all-collections.php" class="view-all-two">View All</a>
            </div>
            <div class="products collection-items">
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-1.png" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">polo shirt for men</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-2.png" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Girls night gown</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-3.png" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Mens stylish T-shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-4.png" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Simple soft towel</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-top d-md-flex align-items-end justify-content-between d-sm-block">
                <h6>Best Seller’s Collections</h6>
                <a href="all-collections.php" class="view-all-two">View All</a>
            </div>
            <div class="products collection-items">
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-5.png" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">polo shirt for men</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-6.png" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Girls night gown</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-7.png" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Mens stylish T-shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-8.png" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Simple soft towel</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-top d-md-flex align-items-end justify-content-between d-sm-block">
                <h6>Best Seller’s Collections</h6>
                <a href="all-collections.php" class="view-all-two">View All</a>
            </div>
            <div class="products collection-items">
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-9.png" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">polo shirt for men</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-10.png" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Girls night gown</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-11.png" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Mens stylish T-shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product">
                    <div class="product-img">
                        <a href="single-product.php">
                            <img src="images/collection/shape-12.png" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                        <h2 class="product-title"><a href="single-product.php">Simple soft towel</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="collection-btn d-flex align-items-center justify-content-center">
            <a href="#" class="view-all-two">Load More</a>
        </div>
    </section>
    <?php require ("./components/footer.php"); ?>
    <div class="footer_iconTop">
        <a href="#" id="button"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <?php require ("./components/script.php"); ?>
</body>

</html>