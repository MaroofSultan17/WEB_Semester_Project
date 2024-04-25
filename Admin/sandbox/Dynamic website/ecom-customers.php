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
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped student-tbl">
                                        <thead>
                                            <tr>
                                                <th class=" pe-3">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th class=" ps-5" style="min-width: 200px;">Billing Address
                                                </th>
                                                <th>Joined</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                                        <label class="form-check-label" for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="/">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a href="mailto:ricky@example.com">info@example.com</a>
                                                </td>
                                                <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
                                                <td class="py-2 ps-5">2392 Main Avenue, Penasauka</td>
                                                <td class="py-2">30/03/2018</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                                        <label class="form-check-label" for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Emma Watson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a href="mailto:emma@example.com">info@example.com</a>
                                                </td>
                                                <td class="py-2"> <a href="tel:2122288403">(212) 228-8403</a></td>
                                                <td class="py-2 ps-5">2289 5th Avenue, New York
                                                </td>
                                                <td class="py-2">11/07/2017</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox3">
                                                        <label class="form-check-label" for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="/">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Rowen Atkinson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a href="mailto:rown@example.com">info@example.com</a>
                                                </td>
                                                <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
                                                <td class="py-2 ps-5">112 Bostwick Avenue, Jersey City
                                                </td>
                                                <td class="py-2">05/04/2016</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox4">
                                                        <label class="form-check-label" for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Antony Hopkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:antony@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:9013243127">(901) 324-3127</a></td>
                                                <td class="py-2 ps-5">3448 Ile De France St #242, </td>
                                                <td class="py-2">05/04/2018</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox5">
                                                        <label class="form-check-label" for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Jennifer Schramm</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:jennifer@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:8283829631">(828) 382-9631</a></td>
                                                <td class="py-2 ps-5">659 Hannah Street, Charlotte
                                                </td>
                                                <td class="py-2">17/03/2016</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox6">
                                                        <label class="form-check-label" for="checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="/">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Raymond Mims</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:raymond@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:5624685646">(562) 468-5646</a></td>
                                                <td class="py-2 ps-5">2298 Locust Court, Artesia
                                                </td>
                                                <td class="py-2">12/07/2014</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox7">
                                                        <label class="form-check-label" for="checkbox7"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Michael Jenkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:jenkins@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:3026138829">(302) 613-8829</a></td>
                                                <td class="py-2 ps-5">4678 Maud Street, Philadelphia
                                                </td>
                                                <td class="py-2">15/06/2014</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox8">
                                                        <label class="form-check-label" for="checkbox8"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Kristine Cadena</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:cadena@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:3172737814">(317) 273-7814</a></td>
                                                <td class="py-2 ps-5">3412 Crestview Manor, Indianapolis</td>
                                                <td class="py-2">15/04/2015</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox9">
                                                        <label class="form-check-label" for="checkbox9"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="/">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a href="mailto:ricky@example.com">info@example.com</a>
                                                </td>
                                                <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
                                                <td class="py-2 ps-5">2392 Main Avenue, Penasauka</td>
                                                <td class="py-2">30/03/2018</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox10">
                                                        <label class="form-check-label" for="checkbox10"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Emma Watson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a href="mailto:emma@example.com">info@example.com</a>
                                                </td>
                                                <td class="py-2"> <a href="tel:2122288403">(212) 228-8403</a></td>
                                                <td class="py-2 ps-5">2289 5th Avenue, New York
                                                </td>
                                                <td class="py-2">11/07/2017</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox11">
                                                        <label class="form-check-label" for="checkbox11"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="/">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Rowen Atkinson</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a href="mailto:rown@example.com">info@example.com</a>
                                                </td>
                                                <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
                                                <td class="py-2 ps-5">112 Bostwick Avenue, Jersey City
                                                </td>
                                                <td class="py-2">05/04/2016</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox12">
                                                        <label class="form-check-label" for="checkbox12"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Antony Hopkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:antony@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:9013243127">(901) 324-3127</a></td>
                                                <td class="py-2 ps-5">3448 Ile De France St #242</td>
                                                <td class="py-2">05/04/2018</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox13">
                                                        <label class="form-check-label" for="checkbox13"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Jennifer Schramm</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:jennifer@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:8283829631">(828) 382-9631</a></td>
                                                <td class="py-2 ps-5">659 Hannah Street, Charlotte
                                                </td>
                                                <td class="py-2">17/03/2016</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox14">
                                                        <label class="form-check-label" for="checkbox14"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="/">
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Raymond Mims</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:raymond@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:5624685646">(562) 468-5646</a></td>
                                                <td class="py-2 ps-5">2298 Locust Court, Artesia
                                                </td>
                                                <td class="py-2">12/07/2014</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox15">
                                                        <label class="form-check-label" for="checkbox15"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Michael Jenkins</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:jenkins@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:3026138829">(302) 613-8829</a></td>
                                                <td class="py-2 ps-5">4678 Maud Street, Philadelphia
                                                </td>
                                                <td class="py-2">15/06/2014</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox mx-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox16">
                                                        <label class="form-check-label" for="checkbox16"></label>
                                                    </div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="javascript:void(0);">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl me-2">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/avatar/1.png" alt="/" width="30">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Kristine Cadena</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:cadena@example.com">info@example.com</a></td>
                                                <td class="py-2"> <a href="tel:3172737814">(317) 273-7814</a></td>
                                                <td class="py-2 ps-5">3412 Crestview Manor, Indianapolis</td>
                                                <td class="py-2">15/04/2015</td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-bs-toggle="dropdown"><span class="fs--1"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="#!">Edit</a><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <script src="js/deznav-init.js"></script>


</body>

</html>