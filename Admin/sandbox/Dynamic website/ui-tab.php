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
                            <span>Tab</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tab</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Tab</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home"><i
                                                    class="la la-home me-2"></i> Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile"><i
                                                    class="la la-user me-2"></i> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#contact"><i
                                                    class="la la-phone me-2"></i> Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#message"><i
                                                    class="la la-envelope me-2"></i> Message</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                                            <div class="pt-4">
                                                <h4>This is home title</h4>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <div class="pt-4">
                                                <h4>This is profile title</h4>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact">
                                            <div class="pt-4">
                                                <h4>This is contact title</h4>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="message">
                                            <div class="pt-4">
                                                <h4>This is message title</h4>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom Tab 1</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home1"><i
                                                    class="la la-home me-2"></i> Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile1"><i
                                                    class="la la-user me-2"></i> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#contact1"><i
                                                    class="la la-phone me-2"></i> Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#message1"><i
                                                    class="la la-envelope me-2"></i> Message</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="home1" role="tabpanel">
                                            <div class="pt-4">
                                                <h4>This is home title</h4>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile1">
                                            <div class="pt-4">
                                                <h4>This is profile title</h4>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact1">
                                            <div class="pt-4">
                                                <h4>This is contact title</h4>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="message1">
                                            <div class="pt-4">
                                                <h4>This is message title</h4>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                                    cliche tempor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nav Pills Tabs</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills mb-4 light">
                                    <li class=" nav-item">
                                        <a href="#navpills-1" class="nav-link active" data-bs-toggle="tab"
                                            aria-expanded="false">Tab One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navpills-2" class="nav-link" data-bs-toggle="tab"
                                            aria-expanded="false">Tab Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navpills-3" class="nav-link" data-bs-toggle="tab"
                                            aria-expanded="true">Tab Three</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="navpills-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills-3" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nav Pills Tabs</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills justify-content-sm-end d-block mb-4">
                                    <li class=" nav-item">
                                        <a href="#navpills2-1" class="nav-link active" data-bs-toggle="tab"
                                            aria-expanded="false">Tab One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navpills2-2" class="nav-link" data-bs-toggle="tab"
                                            aria-expanded="false">Tab Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navpills2-3" class="nav-link" data-bs-toggle="tab"
                                            aria-expanded="true">Tab Three</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="navpills2-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills2-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills2-3" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12"> Raw denim you probably haven't heard of them jean
                                                shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                                cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                <p>
                                                    <br> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Nav Pill</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="nav flex-column nav-pills mb-3">
                                            <a href="#v-pills-home" data-bs-toggle="pill"
                                                class="nav-link active show">Home</a>
                                            <a href="#v-pills-profile" data-bs-toggle="pill"
                                                class="nav-link">Profile</a>
                                            <a href="#v-pills-messages" data-bs-toggle="pill"
                                                class="nav-link">Messages</a>
                                            <a href="#v-pills-settings" data-bs-toggle="pill"
                                                class="nav-link">Settings</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="tab-content">
                                            <div id="v-pills-home" class="tab-pane fade active show">
                                                <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim
                                                    Lorem sint. Veniam sint duis incididunt do esse magna mollit
                                                    excepteur laborum qui. Id id reprehenderit sit est eu aliqua
                                                    occaecat quis
                                                    et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in
                                                    occaecat commodo et voluptate minim reprehenderit mollit pariatur.
                                                    Deserunt non laborum enim et cillum eu deserunt excepteur ea
                                                    incididunt
                                                    minim occaecat.
                                                </p>
                                            </div>
                                            <div id="v-pills-profile" class="tab-pane fade">
                                                <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id
                                                    incididunt duis pariatur mollit aute magna pariatur consectetur. Eu
                                                    veniam duis non ut dolor deserunt commodo et minim in quis laboris
                                                    ipsum
                                                    velit id veniam. Quis ut consectetur adipisicing officia excepteur
                                                    non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit
                                                    occaecat dolore ipsum id officia mollit qui esse anim eiusmod do
                                                    sint
                                                    minim consectetur qui.
                                                </p>
                                            </div>
                                            <div id="v-pills-messages" class="tab-pane fade">
                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident
                                                    dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem
                                                    Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla.
                                                    Velit
                                                    et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem
                                                    aliquip labore est magna commodo est ea veniam consectetur.</p>
                                            </div>
                                            <div id="v-pills-settings" class="tab-pane fade">
                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur
                                                    reprehenderit consectetur elit id dolor proident in cupidatat
                                                    officia. Voluptate excepteur commodo labore nisi cillum duis aliqua
                                                    do. Aliqua amet
                                                    qui mollit consectetur nulla mollit velit aliqua veniam nisi id do
                                                    Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia
                                                    magna elit nisi in aute tempor commodo eiusmod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Nav Pill</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="tab-content">
                                            <div id="v-pills-home1" class="tab-pane fade active show">
                                                <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim
                                                    Lorem sint. Veniam sint duis incididunt do esse magna mollit
                                                    excepteur laborum qui. Id id reprehenderit sit est eu aliqua
                                                    occaecat quis
                                                    et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in
                                                    occaecat commodo et voluptate minim reprehenderit mollit pariatur.
                                                    Deserunt non laborum enim et cillum eu deserunt excepteur ea
                                                    incididunt
                                                    minim occaecat.
                                                </p>
                                            </div>
                                            <div id="v-pills-profile1" class="tab-pane fade">
                                                <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id
                                                    incididunt duis pariatur mollit aute magna pariatur consectetur. Eu
                                                    veniam duis non ut dolor deserunt commodo et minim in quis laboris
                                                    ipsum
                                                    velit id veniam. Quis ut consectetur adipisicing officia excepteur
                                                    non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit
                                                    occaecat dolore ipsum id officia mollit qui esse anim eiusmod do
                                                    sint
                                                    minim consectetur qui.
                                                </p>
                                            </div>
                                            <div id="v-pills-messages1" class="tab-pane fade">
                                                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident
                                                    dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem
                                                    Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla.
                                                    Velit
                                                    et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem
                                                    aliquip labore est magna commodo est ea veniam consectetur.</p>
                                            </div>
                                            <div id="v-pills-settings1" class="tab-pane fade">
                                                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur
                                                    reprehenderit consectetur elit id dolor proident in cupidatat
                                                    officia. Voluptate excepteur commodo labore nisi cillum duis aliqua
                                                    do. Aliqua amet
                                                    qui mollit consectetur nulla mollit velit aliqua veniam nisi id do
                                                    Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia
                                                    magna elit nisi in aute tempor commodo eiusmod.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="nav flex-column nav-pills">
                                            <a href="#v-pills-home1" data-bs-toggle="pill"
                                                class="nav-link active show">Home</a>
                                            <a href="#v-pills-profile1" data-bs-toggle="pill"
                                                class="nav-link">Profile</a>
                                            <a href="#v-pills-messages1" data-bs-toggle="pill"
                                                class="nav-link">Messages</a>
                                            <a href="#v-pills-settings1" data-bs-toggle="pill"
                                                class="nav-link">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tab with icon</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home8">
                                            <span>
                                                <i class="ti-home"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile8">
                                            <span>
                                                <i class="ti-user"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages8">
                                            <span>
                                                <i class="ti-email"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane fade show active" id="home8" role="tabpanel">
                                        <div class="pt-4">
                                            <h4>This is icon title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                                tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                                tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                                tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                                tempor.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile8" role="tabpanel">
                                        <div class="pt-4">
                                            <h4>This is icon title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                                tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                                tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                                tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                                tempor.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="messages8" role="tabpanel">
                                        <div class="pt-4">
                                            <h4>This is icon title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                                tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                                tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                                tofu stumptown aliqua, retro synth master cleanse. Mustache cliche
                                                tempor.
                                            </p>
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