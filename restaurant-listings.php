<?php
include("header.php");
?>

<!-- Hero | Search -->
<section class="nj-sec__hero nj-sec__hero--green">
    <!-- "go" overlay -->
    <div class="nj-logo-overlay">
        <img src="assets/img/design/go-lg.png" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nj-hero__wrapper">
                    <div class="nj-hero__search">
                        <div class="nj-hero__search-item">
                            <div class="frm__grp">
                                <input class="frm__input frm__input--bold" type="text" id="sampleA" placeholder="what do you want to eat?">
                                <label class="frm__placeholder" for="sampleA">
                                    <span>what do you want to eat?</span>
                                    <i class="frm__icon fa-solid fa-magnifying-glass-location"></i>
                                </label>
                            </div>
                        </div>
                        <div class="nj-hero__search-item">
                            <div class="frm__grp">
                                <input class="frm__input frm__input--bold" type="text" id="sampleB" placeholder="how many are going?">
                                <label class="frm__placeholder" for="sampleB">
                                    <span>how many are going?</span>
                                    <i class="frm__icon fa-solid fa-circle-chevron-down"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="nj-hero__display">
                        <img src="assets/img/logo/noljago-white.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nav Tab -->
<div class="nj-sec__nav">
    <div class="nj-nav__wrapper">
        <ul class="nj-nav__list">
            <li class="nj-nav__item nj-nav__item--orange">
                <a class="nj-nav__link" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/nav/ic-community.svg" alt="">
                    <span>Community Post</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--violet">
                <a class="nj-nav__link" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/nav/ic-accomodations.svg" alt="">
                    <span>Accommodations</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--pink">
                <a class="nj-nav__link" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/nav/ic-activites.svg" alt="">
                    <span>activities</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--green">
                <a class="nj-nav__link active" href="restaurant-listings.php">
                    <img class="nj-nav__icon" src="assets/img/icons/nav/ic-food.svg" alt="">
                    <span>food and drinks</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--blue">
                <a class="nj-nav__link" href="spa-listings.php">
                    <img class="nj-nav__icon" src="assets/img/icons/nav/ic-spa.svg" alt="">
                    <span>Wellness & Spa</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Listings Search Results -->
<section class="nj-sec__listings">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nj-sec__title nj-sec__title--center nj-sec__title--green">
                    <span class="nj-sec__subheading">Dine-in in style</span>
                    <h1 class="nj-sec__heading">Food <span class="color--gray-700">&</span> Drinks</h1>
                </div>

                <!-- button beside the title -->
                <div class="nj-listings__view-toggle list-view">
                    <a class="btn btn--sm btn--list" href="#"><?php echo file_get_contents("assets/img/icons/ic-list.svg"); ?></a>
                    <a class="btn btn--sm btn--grid" href="#"><?php echo file_get_contents("assets/img/icons/ic-grid.svg"); ?></i></a>
                </div>

                <!-- Grid View -->
                <div class="nj-listings__data nj-listings__data--grid">
                    <div class="nj-listings__wrapper">
                        <!-- Listing Item -->
                        <div class="nj-listings__item">
                            <a href="spa-details.php" class="nj-listings__card">
                                <img class="nj-thumb" src="assets/img/spa/l-1.jpeg" alt="">
                                <div class="nj-content">
                                    <span class="tag tag--lime">Save as much as 15%</span>
                                    <!--  action-widget (heart,share,add) -->
                                    <?php include("action-widget.php"); ?>
                                    <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                    <ul class="nj-rating" data-rating="4.5">
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                    </ul>
                                    <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                </div>
                            </a>
                            <div class="nj-listings__info">
                                <h3 class="nj-name">Cintai - Coritos Garden</h3>
                                <div class="nj-price-wrapper">
                                    <div class="d-flex flex-column">
                                        <span class="nj-price">P1,000</span>
                                        <span class="nj-price nj-price--old">P1,000</span>
                                    </div>
                                    <div class="tag tag--lime flex-column">50% Off Span <span class="ff--primary text-center">Ends at 1PM</span> </div>
                                </div>
                                <div class="nj-excerpt line-clamp">
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates
                                    </p>
                                </div>

                                <div class="nj-addt-info nj-addt-info--lime my-2">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span class="text">Instant Confirmation</span>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn--green">View Menu</a>

                                </div>
                            </div>

                        </div>
                        <!--/Listing Item -->

                        <!-- Listing Item -->
                        <div class="nj-listings__item">
                            <a href="spa-details.php" class="nj-listings__card">
                                <img class="nj-thumb" src="assets/img/spa/l-2.jpeg" alt="">
                                <div class="nj-content">
                                    <span class="tag tag--lime">Save as much as 15%</span>
                                    <!--  action-widget (heart,share,add) -->
                                    <?php include("action-widget.php"); ?>
                                    <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                    <ul class="nj-rating" data-rating="2">
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                    </ul>
                                    <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                </div>
                            </a>
                            <div class="nj-listings__info">
                                <h3 class="nj-name">Cintai - Coritos Garden</h3>
                                <div class="nj-price-wrapper">
                                    <div class="d-flex flex-column">
                                        <span class="nj-price">P1,000</span>
                                        <span class="nj-price nj-price--old">P1,000</span>
                                    </div>
                                    <div class="tag tag--lime flex-column">50% Off Span <span class="ff--primary text-center">Ends at 1PM</span> </div>
                                </div>
                                <div class="nj-excerpt line-clamp">
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates
                                    </p>
                                </div>

                                <div class="nj-addt-info nj-addt-info--lime my-2">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span class="text">Instant Confirmation</span>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn--green">View Menu</a>

                                </div>
                            </div>

                        </div>
                        <!--/Listing Item -->

                        <!-- Listing Item -->
                        <div class="nj-listings__item">
                            <a href="spa-details.php" class="nj-listings__card">
                                <img class="nj-thumb" src="assets/img/spa/l-3.jpeg" alt="">
                                <div class="nj-content">
                                    <span class="tag tag--lime">Save as much as 15%</span>
                                    <!--  action-widget (heart,share,add) -->
                                    <?php include("action-widget.php"); ?>
                                    <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                    <ul class="nj-rating" data-rating="5">
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                    </ul>
                                    <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                </div>
                            </a>
                            <div class="nj-listings__info">
                                <h3 class="nj-name">Cintai - Coritos Garden</h3>
                                <div class="nj-price-wrapper">
                                    <div class="d-flex flex-column">
                                        <span class="nj-price">P1,000</span>
                                        <span class="nj-price nj-price--old">P1,000</span>
                                    </div>
                                    <div class="tag tag--lime flex-column">50% Off Span <span class="ff--primary text-center">Ends at 1PM</span> </div>
                                </div>
                                <div class="nj-excerpt line-clamp">
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates
                                    </p>
                                </div>

                                <div class="nj-addt-info nj-addt-info--lime my-2">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span class="text">Instant Confirmation</span>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn--green">View Menu</a>

                                </div>
                            </div>

                        </div>
                        <!--/Listing Item -->

                        <!-- Listing Item -->
                        <div class="nj-listings__item">
                            <a href="spa-details.php" class="nj-listings__card">
                                <img class="nj-thumb" src="assets/img/spa/l-4.jpeg" alt="">
                                <div class="nj-content">
                                    <span class="tag tag--lime">Save as much as 15%</span>
                                    <!--  action-widget (heart,share,add) -->
                                    <?php include("action-widget.php"); ?>
                                    <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                    <ul class="nj-rating" data-rating="4.5">
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                    </ul>
                                    <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                </div>
                            </a>
                            <div class="nj-listings__info">
                                <h3 class="nj-name">Cintai - Coritos Garden</h3>
                                <div class="nj-price-wrapper">
                                    <div class="d-flex flex-column">
                                        <span class="nj-price">P1,000</span>
                                        <span class="nj-price nj-price--old">P1,000</span>
                                    </div>
                                    <div class="tag tag--lime flex-column">50% Off Span <span class="ff--primary text-center">Ends at 1PM</span> </div>
                                </div>
                                <div class="nj-excerpt line-clamp">
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates
                                    </p>
                                </div>

                                <div class="nj-addt-info nj-addt-info--lime my-2">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span class="text">Instant Confirmation</span>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn--green">View Menu</a>

                                </div>
                            </div>

                        </div>
                        <!--/Listing Item -->

                        <!-- Listing Item -->
                        <div class="nj-listings__item">
                            <a href="spa-details.php" class="nj-listings__card">
                                <img class="nj-thumb" src="assets/img/spa/l-5.jpeg" alt="">
                                <div class="nj-content">
                                    <span class="tag tag--lime">Save as much as 15%</span>
                                    <!--  action-widget (heart,share,add) -->
                                    <?php include("action-widget.php"); ?>
                                    <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                    <ul class="nj-rating" data-rating="2">
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                    </ul>
                                    <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                </div>
                            </a>
                            <div class="nj-listings__info">
                                <h3 class="nj-name">Cintai - Coritos Garden</h3>
                                <div class="nj-price-wrapper">
                                    <div class="d-flex flex-column">
                                        <span class="nj-price">P1,000</span>
                                        <span class="nj-price nj-price--old">P1,000</span>
                                    </div>
                                    <div class="tag tag--lime flex-column">50% Off Span <span class="ff--primary text-center">Ends at 1PM</span> </div>
                                </div>
                                <div class="nj-excerpt line-clamp">
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates
                                    </p>
                                </div>

                                <div class="nj-addt-info nj-addt-info--lime my-2">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span class="text">Instant Confirmation</span>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn--green">View Menu</a>

                                </div>
                            </div>

                        </div>
                        <!--/Listing Item -->

                        <!-- Listing Item -->
                        <div class="nj-listings__item">
                            <a href="spa-details.php" class="nj-listings__card">
                                <img class="nj-thumb" src="assets/img/spa/l-6.jpeg" alt="">
                                <div class="nj-content">
                                    <span class="tag tag--lime">Save as much as 15%</span>
                                    <!--  action-widget (heart,share,add) -->
                                    <?php include("action-widget.php"); ?>
                                    <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                    <ul class="nj-rating" data-rating="5">
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                        <li class="nj-rating__item"></li>
                                    </ul>
                                    <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                </div>
                            </a>
                            <div class="nj-listings__info">
                                <h3 class="nj-name">Cintai - Coritos Garden</h3>
                                <div class="nj-price-wrapper">
                                    <div class="d-flex flex-column">
                                        <span class="nj-price">P1,000</span>
                                        <span class="nj-price nj-price--old">P1,000</span>
                                    </div>
                                    <div class="tag tag--lime flex-column">50% Off Span <span class="ff--primary text-center">Ends at 1PM</span> </div>
                                </div>
                                <div class="nj-excerpt line-clamp">
                                    <p class="">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates Quae maxime repellendus unde sit, libero laborum? Illo molestias odit commodi voluptates
                                    </p>
                                </div>

                                <div class="nj-addt-info nj-addt-info--lime my-2">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span class="text">Instant Confirmation</span>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn--green">View Menu</a>

                                </div>
                            </div>

                        </div>
                        <!--/Listing Item -->
                    </div>
                </div>

                <!-- List View -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1 my-3">
                <!-- Pagination  -->
                <?php include("pagination.php"); ?>
            </div>
        </div>
    </div>

</section>

<!-- Discover / Curated | Swiper -->
<section class="nj-sec__discover">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-lg-4">
                <div class="nj-sec__title nj-sec__title--violet">
                    <span class="nj-sec__subheading"> Curated Accomodations </span>
                    <h1 class="nj-sec__heading">Discover <span class="color--gray-700">Your Perfect Escape</span></h1>
                </div>
                <p class="nj-sec__desc">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                </p>
                <a href="#" class="btn btn--violet mb-4">View More Accomodation</a>
            </div>
            <div class="col-lg-8 p-0 ps-2">
                <div class="nj-discover__carousel">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item nj-listings__item--tall">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-2.jpeg" alt="">
                                        <div class="nj-content">
                                            <!--  action-widget (heart,share,add) -->
                                            <?php include("action-widget.php"); ?>
                                            <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <h3 class="nj-name">La Carmela de Boracay Hotel</h3>

                                            <!-- reacts/replies -->
                                            <div class="nj-engagement nj-engagement--blue d-flex justify-content-between">
                                                <div>
                                                    <span class="nj-engagement__reacts me-2"><i class="fa-regular fa-face-smile me-1"></i>3262</span>
                                                    <span class="nj-engagement__reacts"><i class="fa-regular fa-face-frown me-1"></i>76</span>
                                                </div>
                                                <span class="nj-engagement__replies"><i class="fa-solid fa-reply me-1"></i>234 Replies</span>
                                            </div>

                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item nj-listings__item--tall">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-3.jpeg" alt="">
                                        <div class="nj-content">
                                            <!--  action-widget (heart,share,add) -->
                                            <?php include("action-widget.php"); ?>
                                            <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <h3 class="nj-name">La Carmela de Boracay Hotel</h3>

                                            <!-- reacts/replies -->
                                            <div class="nj-engagement nj-engagement--blue d-flex justify-content-between">
                                                <div>
                                                    <span class="nj-engagement__reacts me-2"><i class="fa-regular fa-face-smile me-1"></i>3262</span>
                                                    <span class="nj-engagement__reacts"><i class="fa-regular fa-face-frown me-1"></i>76</span>
                                                </div>
                                                <span class="nj-engagement__replies"><i class="fa-solid fa-reply me-1"></i>234 Replies</span>
                                            </div>

                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item nj-listings__item--tall">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-4.jpeg" alt="">
                                        <div class="nj-content">
                                            <!--  action-widget (heart,share,add) -->
                                            <?php include("action-widget.php"); ?>
                                            <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <h3 class="nj-name">La Carmela de Boracay Hotel</h3>

                                            <!-- reacts/replies -->
                                            <div class="nj-engagement nj-engagement--blue d-flex justify-content-between">
                                                <div>
                                                    <span class="nj-engagement__reacts me-2"><i class="fa-regular fa-face-smile me-1"></i>3262</span>
                                                    <span class="nj-engagement__reacts"><i class="fa-regular fa-face-frown me-1"></i>76</span>
                                                </div>
                                                <span class="nj-engagement__replies"><i class="fa-solid fa-reply me-1"></i>234 Replies</span>
                                            </div>

                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item nj-listings__item--tall">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-5.jpeg" alt="">
                                        <div class="nj-content">
                                            <!--  action-widget (heart,share,add) -->
                                            <?php include("action-widget.php"); ?>
                                            <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <h3 class="nj-name">La Carmela de Boracay Hotel</h3>

                                            <!-- reacts/replies -->
                                            <div class="nj-engagement nj-engagement--blue d-flex justify-content-between">
                                                <div>
                                                    <span class="nj-engagement__reacts me-2"><i class="fa-regular fa-face-smile me-1"></i>3262</span>
                                                    <span class="nj-engagement__reacts"><i class="fa-regular fa-face-frown me-1"></i>76</span>
                                                </div>
                                                <span class="nj-engagement__replies"><i class="fa-solid fa-reply me-1"></i>234 Replies</span>
                                            </div>

                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item nj-listings__item--tall">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-1.jpeg" alt="">
                                        <div class="nj-content">
                                            <!--  action-widget (heart,share,add) -->
                                            <?php include("action-widget.php"); ?>
                                            <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <h3 class="nj-name">La Carmela de Boracay Hotel</h3>

                                            <!-- reacts/replies -->
                                            <div class="nj-engagement nj-engagement--blue d-flex justify-content-between">
                                                <div>
                                                    <span class="nj-engagement__reacts me-2"><i class="fa-regular fa-face-smile me-1"></i>3262</span>
                                                    <span class="nj-engagement__reacts"><i class="fa-regular fa-face-frown me-1"></i>76</span>
                                                </div>
                                                <span class="nj-engagement__replies"><i class="fa-solid fa-reply me-1"></i>234 Replies</span>
                                            </div>

                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section divider -->
<div class="nj-sec__divider"></div>

<!-- Newsletter Form -->
<section class="nj-sec__newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nj-sec__title nj-sec__title--center nj-sec__title--gray">
                    <span class="nj-sec__subheading">Pack Your Bags and Hit The Grid</span>
                    <h1 class="nj-sec__heading">Receive Travel Plan and Updates</h1>
                </div>

                <!-- form -->
                <form action="">
                    <div class="col-md-8 offset-md-2">
                        <div class="row my-2">
                            <div class="col-md-6">
                                <div class="frm__grp">
                                    <input type="text" class="frm__input form-control" id="sample-fname" data-validation="strength" data-validation-strength="2" required>
                                    <label class="frm__label" for="sample-fname">First Name (Required)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="frm__grp">
                                    <input type="text" class="frm__input form-control" id="sample-lname" data-validation="strength" data-validation-strength="2" required>
                                    <label class="frm__label" for="sample-lname">Last Name (Required)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-6">
                                <div class="frm__grp">
                                    <input type="email" class="frm__input form-control" id="sample-email" data-validation="strength" data-validation-strength="2" required>
                                    <label class="frm__label" for="sample-email">Email Address (Required)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="frm__grp">
                                    <input type="text" class="frm__input form-control" id="sample-mobile">
                                    <label class="frm__label" for="sample-mobile">Mobile Number (Optional)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                                <div class="form-check my-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                                    <label class="form-check-label ms-2" for="defaultCheck1">I’m happy to receive emails from Noljago*</label>
                                </div>

                                <!-- Submit -->
                                <input type="submit" class="btn btn--gray mt-2" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</section>

<?php
include("footer.php");
?>