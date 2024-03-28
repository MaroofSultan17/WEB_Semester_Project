<?php include ("./libraries/variables.php"); ?>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex justify-content-between">
                <div class="widgets-item">
                    <div class="footer-logo">
                        <a href="index-2.php">
                            <img src="images/footer/logo/shape-1.png" alt="footer">
                        </a>
                    </div>
                    <div class="widgets-contacts">
                        <ul>
                            <li><a href="#" class="d-flex"><i class="fa-solid fa-location-dot"></i><span>
                                        <?php echo constant('address'); ?>
                                    </span></a></li>
                            <li><a href="#" class="d-flex"><i class="fa-solid fa-envelope"></i>
                                    <?php echo constant('siteEmail'); ?>
                                </a>
                            </li>
                            <li><a href="#" class="d-flex"><i class="fa-solid fa-phone"></i>
                                    <?php echo constant('siteContact'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widgets-social">
                        <ul class="d-flex align-items-center">
                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex justify-content-between">
                <div class="widgets-item widgets-p-top d-sm-flex d-block justify-content-around ">
                    <div class="widgets-link-items">
                        <h6>Links</h6>
                        <ul>
                            <li><a href="#">Customer</a></li>
                            <li><a href="#">Visitor</a></li>
                            <li><a href="#">Webmaster</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                    <div class="widgets-link-items">
                        <h6>Help</h6>
                        <ul>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Doc File</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex justify-content-between">
                <div class="widgets-item widgets-p-top">
                    <h6>Recent Posts</h6>
                    <div class="recent-posts d-flex align-items-center">
                        <div class="author-img">
                            <a href="single-blog.php">
                                <img src="images/footer/post/shape-1.png" alt="footer">
                            </a>
                        </div>
                        <div class="author-info">
                            <span>April 15, 2021</span>
                            <br>
                            <a href="single-blog.php">Dalia enim ad minim veniam quis</a>
                        </div>
                    </div>
                    <div class="recent-posts d-flex align-items-center">
                        <div class="author-img">
                            <a href="single-blog.php">
                                <img src="images/footer/post/shape-2.png" alt="footer">
                            </a>
                        </div>
                        <div class="author-info">
                            <span>April 15, 2021</span>
                            <br>
                            <a href="single-blog.php">Dalia enim ad minim veniam quis</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
                <div class="widgets-item widgets-p-top">
                    <div class="news-letter">
                        <h6>Newsletter</h6>
                        <p>Ut enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip modo
                        </p>
                        <form class="widgets-form d-flex align-items-center justify-content-between"
                            action="https://ethemestudio.com/submit" method="POST">
                            <input type="email" id="email" name="email" placeholder="Your email here" required>
                            <button type="submit"><i class="fa-regular fa-envelope"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div
                    class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-lg-start justify-content-center pb-3">
                    <div class="footer-bottom-left">
                        <span>Designed with love © <a href="#"> <?php echo constant('siteAuthor'); ?></a> </span>
                    </div>
                </div>
                <div
                    class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-lg-end justify-content-center">
                    <div class="footer-bottom-right">
                        <ul class="d-flex">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Legal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>