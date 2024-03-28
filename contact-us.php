<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links  -->
    <?php
    echo require ("./components/links.php");
    ?>
    <!-- Links -->

</head>

<body>

    <!-- HEADER-SECTION START  -->

    <?php require ("./components/header_collection.php"); ?>


    <!-- HEADER-SECTION END  -->

    <!-- BANNER-SECTION START  -->

    <section class="hero-section ev-common-hero" style="background-image: url(images/common-banner/shape-1.png);">
        <div class="container-fluid">
            <div class="ev-hero-content">
                <h2>Contact Us</h2>
                <span><a href="index-2.php">Home</a> > Blog</span>
            </div>
        </div>
    </section>

    <!-- BANNER-SECTION END  -->


    <!--  CONTACT-US-SECTION START  -->

    <section class="ev-contact-us-section">
        <div class="container">
            <div class="ev-top-content justify-content-md-center justify-content-sm-start">
                <span>Contact Us</span>
                <h2>Stay Connected</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="contact-left">
                        <div class="contact-inner">
                            <p>Kimod tempoer incididunt onomes sundo ritoma amar korem ipsum
                                dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor inci didunt </p>
                            <ul>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <div class="inner-text">
                                            <h6>Address</h6>
                                            <span>20, Mountain Street, Dhaka</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <div class="inner-text">
                                            <h6>Call us</h6>
                                            <span>+880 1234 567890</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-regular fa-envelope"></i>
                                        <div class="inner-text">
                                            <h6>Email Us</h6>
                                            <span>hello@evani.com</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6  col-md-6 col-12">
                    <div class="contact-right">
                        <div class="form-message">
                            <p></p>
                        </div>
                        <form class="contuct-form" id="evani-contact" method="POST"
                            action="https://ethemestudio.com/demo/evani/php/form-handler.php">
                            <div class="row form-group">
                                <div class="col-12">
                                    <label for="inputName" class="form-label visually-hidden">Name</label>
                                    <input placeholder="Your name" name="inputName" id="inputName" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label visually-hidden">Email</label>
                                    <input type="email" placeholder="Your email" name="inputEmail" id="inputEmail"
                                        required>
                                </div>
                                <div class="col-12">
                                    <label for="inputPhone" class="form-label visually-hidden">Phone</label>
                                    <input placeholder="Your phone" name="inputPhone" id="inputPhone">
                                </div>
                                <div class="col-12">
                                    <label for="inputMessage" class="form-label visually-hidden">Message</label>
                                    <textarea class="input-textarea" name="inputMessage" rows="5" cols="30"
                                        id="inputMessage" required>Write your message here</textarea>
                                </div>
                                <div class="col-12">
                                    <div class="common-btn submit-btn">
                                        <button type="submit" value="Submit Payment" name="submit">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  CONTACT-US-SECTION END  -->


    <!-- CONTACT-MAP-SECTION START  -->

    <div class="map-section">
        <div class="container">
            <div class="map-heading">
                <h2>Evani theme</h2>
            </div>
            <div id="map"></div>
        </div>
    </div>

    <!-- CONTACT-MAP-SECTION START  -->


    <!--    FOOTER-SECTION START -->

    <?php require ("./components/footer.php"); ?>

    <!--    FOOTER-SECTION END  -->


    <!-- FOOTER-ICONTOP START  -->

    <div class="footer_iconTop">
        <a href="#" id="button"><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- FOOTER-ICONTOP END  -->


    <!-- JS-SCRIPT START  -->

    <script src="js/jquery-min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrop-min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/script.js"></script>

    <script>



    </script>

    <!-- JS-SCRIPT END  -->


</body>



</html>