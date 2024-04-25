<?php
include ("./libraries/variables.php");
include ("./helper/db-config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Contact Us | <?php echo (constant('siteTitle')); ?> </title>
    <?php require ("./components/links.php"); ?>
</head>

<body>
    <?php require ("./components/header_collection.php"); ?>
    <section class="hero-section ev-common-hero" style="background-image: url(images/common-banner/shape-1.png);">
        <div class="container-fluid">
            <div class="ev-hero-content">
                <h2>Contact Us</h2>
                <span><a href="index-2.php">Home</a> > Blog</span>
            </div>
        </div>
    </section>
    <section class="ev-contact-us-section">
        <div class="container">
            <div class="ev-top-content justify-content-md-center justify-content-sm-start">
                <span>Contact Us</span>
                <h2>Stay Connected</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="contact-left">
                        <div class="contact-inner" style="text-align: justify;">
                            <p>Stay connected with us! Whether you have questions, feedback, or simply want to say
                                hello, we're here to listen. Reach out through our contact form or connect with us on
                                social media to stay updated on the latest news, promotions, and exciting updates. Your
                                voice matters, and we're always eager to hear from you. Let's stay connected and
                                continue building meaningful relationships together.
                            <ul>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <div class="inner-text">
                                            <h6>Address</h6>
                                            <span><?php echo constant('address'); ?></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <div class="inner-text">
                                            <h6>Call us</h6>
                                            <span><?php echo constant('siteContact'); ?></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-regular fa-envelope"></i>
                                        <div class="inner-text">
                                            <h6>Email Us</h6>
                                            <span><?php echo constant('siteEmail'); ?></span>
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
                        <form class="contuct-form" id="evani-contact" method="POST" action="./helper/contactus.php">
                            <div class="row form-group">
                                <div class="col-12">
                                    <label for="inputName" class="form-label visually-hidden">Name</label>
                                    <input placeholder="Your name" name="contactusname" id="inputName" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label visually-hidden">Email</label>
                                    <input type="email" placeholder="Your email" name="contactusemail" id="inputEmail"
                                        required>
                                </div>
                                <div class="col-12">
                                    <label for="inputPhone" class="form-label visually-hidden">Phone</label>
                                    <input placeholder="Your phone" name="contactusphno" id="inputPhone">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label visually-hidden">Subject</label>
                                    <input type="text" placeholder="Your Subject" name="contactussubject" id="subject"
                                        required>
                                </div>
                                <div class="col-12">
                                    <label for="inputMessage" class="form-label visually-hidden">Message</label>
                                    <textarea class="input-textarea" name="contactusmessage" rows="5" cols="30"
                                        id="inputMessage" placeholder="Write your message here" required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="common-btn submit-btn">
                                        <button type="submit" value="Submit Payment" name="contactus">Submit
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-section">
        <div class="container">
            <div class="map-heading">
                <h2>Evani theme</h2>
            </div>
            <div id="map"></div>
        </div>
    </div>
    <?php require ("./components/footer.php"); ?>
    <div class="footer_iconTop">
        <a href="#" id="button"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <?php require ("./components/script.php"); ?>
</body>

</html>