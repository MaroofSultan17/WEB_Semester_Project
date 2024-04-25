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
                            <span>Dropdown</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dropdown</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Basic Dropdown</h4>
                                <p class="m-0 subtitle">A dropdown menu is a toggleable menu that allows the user to
                                    choose one value from a predefined list
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Dropdown Divider</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropdown-divider</code> class is used to separate links inside the dropdown
                                    menu with a thin horizontal border
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Dropdown Header</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropdown-header</code> class is used to add headers inside the dropdown menu
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <h5 class="dropdown-header">Dropdown header</h5>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                            <h5 class="dropdown-header">Dropdown header</h5>
                                            <a class="dropdown-item" href="javascript:void(0);">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Disable and Active items</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropdown-header</code> class is used to add headers inside the dropdown menu
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Normal</a>
                                            <a class="dropdown-item active" href="javascript:void(0);">Active</a>
                                            <a class="dropdown-item disabled" href="javascript:void(0);">Disabled</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Align Right</h4>
                                <p class="m-0 subtitle">To right-align the dropdown, add the
                                    <code>.dropdown-menu-end</code> class to the element with .dropdown-menu
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropdown button
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Dropup</h4>
                                <p class="m-0 subtitle">The
                                    <code>.dropup</code> class makes the dropdown menu expand upwards instead of
                                    downwards
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <!-- Default dropup button -->
                                    <div class="btn-group dropup mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropup
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                        </div>
                                    </div>

                                    <!-- Split dropup button -->
                                    <div class="btn-group dropup mb-1">
                                        <button type="button" class="btn btn-primary">
                                            Split dropup
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">DropEnd </h4>
                                <p class="m-0 subtitle">Trigger dropdown menus at the right of the elements by adding
                                    <code>.dropend</code> to the parent element
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <!-- Default dropright button -->
                                    <div class="btn-group dropend  mb-1">
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                        </div>
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropend
                                        </button>
                                    </div>

                                    <!-- Split dropright button -->
                                    <div class="btn-group dropend  mb-1">
                                        <button type="button" class="btn btn-primary">
                                            Split dropend
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropright</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">DropStart </h4>
                                <p class="m-0 subtitle">Trigger dropdown menus at the right of the elements by adding
                                    <code>.dropstart </code> to the parent element
                                </p>
                            </div>
                            <div class="card-body">

                                <div class="basic-dropdown">
                                    <!-- Default dropleft button -->
                                    <div class="btn-group dropstart mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            Dropstart
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                        </div>
                                    </div>

                                    <!-- Split dropleft button -->
                                    <div class="btn-group mb-1">
                                        <div class="btn-group dropstart " role="group">
                                            <button type="button"
                                                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown">
                                                <span class="sr-only">Toggle DropStart</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">
                                            Split dropdstart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Button Dropdowns</h4>
                            </div>
                            <div class="card-body">
                                <div class="button-dropdown">
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button"
                                            class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button"
                                            class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>

                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button"
                                            class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Sizing</h4>
                                <p class="m-0 subtitle">Button dropdowns work with buttons of all sizes, including
                                    default and split dropdown buttons.</p>
                            </div>
                            <div class="card-body">
                                <div class="dropdown-size">
                                    <!-- Large button groups (default and split) -->
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-lg dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown">
                                            Large button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-lg" type="button">
                                            Large split button
                                        </button>
                                        <button type="button"
                                            class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>

                                    <!-- Small button groups (default and split) -->
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown">
                                            Small button
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-sm" type="button">
                                            Small split button
                                        </button>
                                        <button type="button"
                                            class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Custom style</h4>
                                <p class="m-0 subtitle">Use
                                    <code>.custom-dropdown</code> this class for this style
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <div data-bs-toggle="dropdown">Last 7 days
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 1 Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 6 Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-outline-primary"
                                                data-bs-toggle="dropdown">Last 7 days
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 1 Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 6 Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-outline-primary"
                                                data-bs-toggle="dropdown">Last 1 Hour
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 1 hour</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 2 hour</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 3 hour</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-bs-toggle="dropdown">Last 7 days
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 1 Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 6 Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-search m-r-5"></i> 3 AM
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">6 AM</a>
                                                <a class="dropdown-item" href="javascript:void(0);">9 AM</a>
                                                <a class="dropdown-item" href="javascript:void(0);">12 AM</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-calendar m-r-5"></i> March 20, 2018 &nbsp; To &nbsp;April
                                                20, 2018
                                                <i class="fa fa-angle-down ms-3"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">May 20, 2018 &nbsp;
                                                    To &nbsp; June 20,
                                                    2018</a>
                                                <a class="dropdown-item" href="javascript:void(0);">July 20, 2018 &nbsp;
                                                    To &nbsp; August
                                                    20, 2018</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                    height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="12" cy="5" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="19" r="2" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="dropdown custom-dropdown">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                    height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="12" cy="5" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="19" r="2" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>


</body>

</html>