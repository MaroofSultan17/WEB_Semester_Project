<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Title -->
    <title>Uena - Django Restaurant Admin Dashboard Template </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords"
        content="	admin dashboard, admin template, administration, analytics, bootstrap, cafe admin, elegant, food, health, kitchen, modern, responsive admin dashboard, restaurant dashboard">
    <meta name="description"
        content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">

    <meta property="og:title" content="Uena - Django Restaurant Admin Dashboard Template">
    <meta property="og:description"
        content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">
    <meta property="og:image" content="../social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <?php require ('./components/nav-header.php'); ?>
        <?php require ('./components/chatbox.php'); ?>
        <?php require ('./components/header.php'); ?>
        <?php require ('./components/sidebar.php'); ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Plugins</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">UI Slider</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic slider</h4>
                            </div>
                            <div class="card-body">
                                <div id="basic-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stepping and snapping to values</h4>
                            </div>
                            <div class="card-body">
                                <div class="stepping-slider">
                                    <div id="slider-step"></div>
                                    <span class="example-val" id="slider-step-value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider margin</h4>
                            </div>
                            <div class="card-body">
                                <div class="margin-slider">
                                    <div id="slider-margin"></div>
                                    <span class="example-val" id="slider-margin-value-min"></span>
                                    <span class="example-val" id="slider-margin-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider limit</h4>
                            </div>
                            <div class="card-body">
                                <div class="limit-slider">
                                    <div id="slider-limit"></div>
                                    <span class="example-val" id="slider-limit-value-min"></span>
                                    <span class="example-val" id="slider-limit-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider padding</h4>
                            </div>
                            <div class="card-body">
                                <div class="padding-slider">
                                    <div id="slider-padding"></div>
                                    <span class="example-val" id="slider-padding-value-min"></span>
                                    <span class="example-val" id="slider-padding-value-max"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider tooltip</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-tooltip ">
                                    <div id="slider-tooltips"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider behaviour (Drag)</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-behaviour">
                                    <div id="behaviour"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider behaviour (Tap)</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-behaviour">
                                    <div id="tap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider behaviour (Fixed dragging)</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-behaviour">
                                    <div id="drag-fixed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider behaviour (Snap)</h4>
                            </div>
                            <div class="card-body">
                                <div class="snap">
                                    <div id="snap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider behaviour (hover)</h4>
                            </div>
                            <div class="card-body">
                                <div class="snap">
                                    <div id="hover"></div>
                                    <span class="example-val mt-4 d-inline-block" id="hover-val"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider behaviour (unconstrained)</h4>
                            </div>
                            <div class="card-body">
                                <div class="unconstrained">
                                    <div id="unconstrained" class="mb-4"></div>
                                    <span class="example-val" id="unconstrained-values"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider behaviour (combined)</h4>
                            </div>
                            <div class="card-body">
                                <div class="combined">
                                    <div id="combined"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider range (left to right)</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-range  mb-5 me-4">
                                    <div id="pips-range"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider range (right to left)</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-range  mb-5 ms-4">
                                    <div id="pips-range-rtl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider range Vertical (top to bottom)</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-range ">
                                    <div id="pips-range-vertical" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider range Vertical (bottom to top)</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-range ">
                                    <div id="pips-range-vertical-rtl" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pip positions</h4>
                            </div>
                            <div class="card-body">
                                <div class="pip-position mb-5 me-4">
                                    <div id="pips-positions"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pip position stepped</h4>
                            </div>
                            <div class="card-body">
                                <div class="pip-position mb-5 me-4">
                                    <div id="pips-positions-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pips count</h4>
                            </div>
                            <div class="card-body">
                                <div class="pips-count mb-5 me-4">
                                    <div id="pips-count"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pips count (stepped)</h4>
                            </div>
                            <div class="card-body">
                                <div class="pips-count mb-5 me-4">
                                    <div id="pips-count-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pips value</h4>
                            </div>
                            <div class="card-body">
                                <div class="pips-values mb-5">
                                    <div id="pips-values"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pips values (stepped)</h4>
                            </div>
                            <div class="card-body">
                                <div class="pips-values mb-5">
                                    <div id="pips-values-stepped"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disabling a slider</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-disabled">
                                    <div id="disable1" class="mb-4"></div>
                                    <label>
                                        <input class="me-1 form-check-input" type="checkbox" id="checkbox1">
                                        Disable slider
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disabling a slider</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-disabled">
                                    <div id="disable2"></div>
                                    <label>
                                        <input type="checkbox" class="form-check-input me-1" id="checkbox2">
                                        Disable handle 1
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" class="form-check-input me-1" id="checkbox3">
                                        Disable handle 2
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Updating a slider</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-update ">
                                    <div id="slider-update"></div>
                                    <span class="example-val d-block my-4" id="slider-update-value"></span>
                                    <button class="update-button btn btn-primary btn-sm mb-2" id="update-1">Set range
                                        [20, 50]</button>
                                    <button class="update-button btn btn-primary btn-sm mb-2" id="update-2">Set range
                                        [10, 40]</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Keyboard slider</h4>
                            </div>
                            <div class="card-body">
                                <!--  <h4 class="card-title mb-3 mb-xl-4"></h4> -->
                                <div id="keyboardslider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Working with dates</h4>
                            </div>
                            <div class="card-body">
                                <div class="date-slider">
                                    <div id="slider-date"></div>
                                    <div class="example-val my-4" id="event-start"></div>
                                    <div class="example-val" id="event-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Using HTML5 input elements</h4>
                            </div>
                            <div class="card-body">
                                <div class="input-element">
                                    <div id="html5"></div>
                                    <div class="inputs mt-4">
                                        <select class="form-control my-4" id="input-select"></select>
                                        <input class="form-control" type="number" min="-20" max="40" step="1"
                                            id="input-number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Non linear slider</h4>
                            </div>
                            <div class="card-body">
                                <div class="nonlinear-slider">
                                    <div id="nonlinear"></div>
                                    <div class="outputs mt-4">
                                        <span class="example-val" id="lower-value"></span>
                                        <span class="example-val" id="upper-value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Snapping between steps</h4>
                            </div>
                            <div class="card-body">
                                <div class="nonlinear-slider">
                                    <div id="slider-snap"></div>
                                    <span class="example-val" id="slider-snap-value-lower"></span>
                                    <span class="example-val" id="slider-snap-value-upper"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stepping in non-linear sliders</h4>
                            </div>
                            <div class="card-body">
                                <div class="nonlinear-slider">
                                    <div id="slider-non-linear-step"></div>
                                    <span class="example-val" id="slider-non-linear-step-value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Number formatting</h4>
                            </div>
                            <div class="card-body">
                                <div class="format-slider">
                                    <div id="slider-format"></div>
                                    <input class="mt-4 form-control" title="Formatted number" id="input-format">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Getting and setting slider values</h4>
                            </div>
                            <div class="card-body">
                                <div class="getnset-slider">
                                    <div id="slider"></div>
                                    <div class="logger mt-4">
                                        <button class="btn btn-primary btn-sm" id="write-button">Set to 20</button>
                                        <button class="btn btn-primary btn-sm" id="read-button">Read slider
                                            value</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Locking sliders together</h4>
                            </div>
                            <div class="card-body">
                                <div class="locked-slider">
                                    <div class="slider" id="slider1"></div>
                                    <span class="example-val" id="slider1-span"></span>
                                    <div class="slider mt-4" id="slider2"></div>
                                    <span class="example-val" id="slider2-span"></span>
                                    <button class="btn btn-primary btn-sm mt-4" id="lockbutton"
                                        style="float: right; margin: 20px 0 0;">Lock</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Moving the slider by clicking pips</h4>
                            </div>
                            <div class="card-body">
                                <div class="extra-padding  mb-5">
                                    <div class="slider-pips">
                                        <div class="slider" id="slider-pips"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Colored Connect Elements</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-color">
                                    <div class="slider" id="slider-color"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Changing the slider by key press</h4>
                            </div>
                            <div class="card-body">
                                <div class="keypress-slider pt-5">
                                    <div id="keypress"></div>
                                    <input type="text" class="form-control my-4" id="input-with-keypress-1">
                                    <input type="text" class="form-control" id="input-with-keypress-0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Skipping steps</h4>
                            </div>
                            <div class="card-body">
                                <div class="skipping-slider">
                                    <div id="skipstep"></div>
                                    <span class="example-val" id="skip-value-lower"></span>
                                    <span class="example-val" id="skip-value-upper"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Using the slider with huge numbers</h4>
                            </div>
                            <div class="card-body">
                                <div class="hugenumber-slider">
                                    <div id="slider-huge"></div>
                                    <span class="example-val" id="huge-value"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Creating a toggle</h4>
                            </div>
                            <div class="card-body">
                                <div class="toggle-slider">
                                    <div id="slider-toggle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Soft limits</h4>
                            </div>
                            <div class="card-body">
                                <div class="extra-padding mb-5">
                                    <div class="softlimit-slider">
                                        <div id="soft"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider direction</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-direction">
                                    <div id="slider-direction"></div>
                                    <div class="example-val" id="field"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Color picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="extra-padding">
                                    <div class="colorpicker-slider">
                                        <div class="sliders" id="red"></div>
                                        <div class="sliders" id="green"></div>
                                        <div class="sliders" id="blue"></div>

                                        <div id="result"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider orientation</h4>
                            </div>
                            <div class="card-body">
                                <div class="slider-orientation">
                                    <div id="slider-vertical" class="slider-vertical"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/"
                        target="_blank">DexignZone</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="js/plugins-init/nouislider-init.js"></script>




    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>


</body>

</html>