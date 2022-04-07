<?php
function current_page_url()
{
    $page_url = 'http';
    if (isset($_SERVER['HTTPS']) && $_SERVER["HTTPS"] == "on") {
        $page_url .= "s";
    }
    $page_url .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $page_url .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $page_url .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $page_url;
}
function current_file_url()
{
    return basename($_SERVER['SCRIPT_FILENAME']);
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noljago</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- plugin -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- sass file compilation -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--    <link rel="stylesheet" href="assets/css/docs.css">-->
    <!--[if lt IE 9]>
  <script src="assets/bower_components/html5shiv/dist/html5shiv.min.js"></script>
  <![endif]-->
</head>

<body>
    <header class="nj-header header--fixed nj-header--green">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="nj-header__wrapper justify-content-end">
                        <!-- <div class="nj-header__block">
                            <a class="nj-header__brand mr-3" href="index.php">
                                <img src="assets/img/brand-logo.png" alt="">
                            </a>
                        </div> -->
                        <div class="nj-header__block">
                            <div class="nj-header__secondary">
                                <nav class="nj-header__nav">
                                    <ul class="nj-header__nav_list">
                                        <li class="nj-header__nav_item">
                                            <a class="nj-header__nav_icon" href="#"><i class="fe fe-search"></i></a>
                                        </li>
                                        <li class="nj-header__nav_item">
                                            <a id="nj-menu-trigger" href="#0"><span class="nj-menu-text">Menu</span><span class="nj-menu-icon"></span></a>
                                        </li>
                                        <li class="nj-header__nav_item">
                                            <a class="nj-header__nav_icon" href="#"><i class="fe fe-user"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- <div class="nj-header__primary nj-header__block--desktopOnly">
                                <nav class="nj-header__nav">
                                    <ul class="nj-header__nav_list">
                                        <li class="nj-header__nav_item">
                                            <a class="nj-header__nav_link" href="#">Accomodations</a>
                                        </li>
                                        <li class="nj-header__nav_item">
                                            <a class="nj-header__nav_link" href="#">Experiences</a>
                                        </li>
                                        <li class="nj-header__nav_item">
                                            <a class="nj-header__nav_link" href="#">Restaurants</a>
                                        </li>
                                        <li class="nj-header__nav_item">
                                            <a class="nj-header__nav_link" href="#">QA</a>
                                        </li>
                                        <li class="nj-header__nav_item">
                                            <a class="nj-header__nav_link" href="#">Last Minute Deals</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> -->

                        </div>
                        <!-- <div class="nj-header__block nj-header__block--mobileOnly">
                            <nav class="nj-header__nav">
                                <ul class="nj-header__nav_list">
                                    <li class="nj-header__nav_item">
                                        <a class="nj-header__nav_icon" href="#"><i class="fe fe-search"></i></a>
                                    </li>
                                    <li class="nj-header__nav_item">
                                        <a id="nj-menu-trigger" href="#0"><span class="nj-menu-text">Menu</span><span class="nj-menu-icon"></span></a>
                                    </li>
                                    <li class="nj-header__nav_item">
                                        <a class="nj-header__nav_icon" href="#"><i class="fe fe-user"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="nj-main-content">
        <!--    <main data-scroll>-->
        <!--        <div data-scroll-content>-->