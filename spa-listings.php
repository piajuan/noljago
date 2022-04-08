<?php
include("header.php");
?>

<!-- Hero | Search -->
<section class="nj-sec__hero nj-sec__hero--blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nj-hero__wrapper">
                    <div class="nj-hero__search">
                        <div class="nj-hero__search-item">
                            <div class="frm__grp">
                                <input class="frm__input frm__input--bold" type="text" placeholder="what do you want to do?">
                                <div class="frm__append">
                                    <i class="frm__icon fa-solid fa-magnifying-glass-location"></i>
                                </div>
                            </div>
                        </div>
                        <div class="nj-hero__search-item">
                            <div class="frm__grp">
                                <input class="frm__input frm__input--bold" type="date" placeholder="when you want to go?">
                            </div>
                        </div>
                        <div class="nj-hero__search-item">
                            <div class="frm__grp">
                                <select class="frm__input frm__input--bold" name="" id="">
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                    <option value="">Option 3</option>
                                </select>
                                <div class="frm__append">
                                    <i class="frm__icon fa-solid fa-circle-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nj-hero__display">
                        <img src="assets/img/logo/noljago-white.png" alt="">
                    </div>
                    <div class="nj-nav__wrapper">
                        <ul class="nj-nav__list">
                            <li class="nj-nav__item nj-nav__item--orange">
                                <a class="nj-nav__link" href="#">Community Post</a>
                            </li>
                            <li class="nj-nav__item nj-nav__item--violet">
                                <a class="nj-nav__link" href="#">Accommodations</a>
                            </li>
                            <li class="nj-nav__item nj-nav__item--pink">
                                <a class="nj-nav__link" href="#">activities</a>
                            </li>
                            <li class="nj-nav__item nj-nav__item--green">
                                <a class="nj-nav__link" href="#">food and drinks</a>
                            </li>
                            <li class="nj-nav__item nj-nav__item--blue">
                                <a class="nj-nav__link active" href="#">food and drinks</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Listings Search Results -->
<section class="nj-sec__listings">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nj-sec__title nj-sec__title--center nj-sec__title--green ">
                    <span class="nj-sec__subheading">A Healing Journey</span>
                    <h1 class="nj-sec__heading">Wellness <span class="color--gray-600">&</span> Spa</h1>
                </div>

                <!-- Listing cards -->
                <div class="nj-listings__wrapper">
                    <!-- Listing Item -->
                    <div class="nj-listings__item">
                        <div class="nj-listings__card">
                            <img class="nj-thumb" src="assets/img/spa/l-4.jpeg" alt="">
                            <div class="nj-content">
                                <span class="tag tag--lime">Save as much as 15%</span>
                                <div class="nj-action-widget">
                                    <button class="btn btn--circle btn--lightblue">
                                        <?php echo file_get_contents("assets/img/icons/ic-heart.svg"); ?>
                                    </button>
                                    <button class="btn btn--circle btn--lightblue">
                                        <?php echo file_get_contents("assets/img/icons/ic-share.svg"); ?>
                                    </button>
                                    <button class="btn btn--circle btn--orange">
                                        <?php echo file_get_contents("assets/img/icons/ic-plus.svg"); ?>
                                    </button>

                                </div>
                                <img src="assets/img/badge/top-rated.svg" class="nj-badge" />
                                <ul class="nj-rating" data-rating="3.5">
                                    <li class="nj-rating__item"></li>
                                    <li class="nj-rating__item"></li>
                                    <li class="nj-rating__item"></li>
                                    <li class="nj-rating__item"></li>
                                    <li class="nj-rating__item"></li>
                                </ul>
                                <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="nj-title">Bella Isa Salon & Spa</h3>
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
                                <a href="#" class="btn btn--blue">Book Now</a>

                            </div>
                        </div>

                    </div>
                    <!--/Listing Item -->


                </div>
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
            <div class="col-md-4">
                <div class="nj-sec__title nj-sec__title--violet">
                    <span class="nj-sec__subheading"> Curated Accomodations </span>
                    <h1 class="nj-sec__heading">Discover <span class="color--darkgray">Your Perfect Escape</span></h1>
                </div>
                <p class="nj-sec__desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam assumenda suscipit incidunt minima, quaerat deleniti repellendus excepturi voluptate maxime eum. Eaque sequi similique, dolores magni amet ipsa! Quasi earum aperiam, ipsam, placeat quis odit doloremque expedita recusandae consequatur vel tenetur!
                </p>
                <a href="#" class="btn btn--violet mb-4">View More Accomodation</a>
            </div>
            <div class="col-md-8 p-0">
                <div class="nj-discover__carousel">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-1.jpeg" alt="">
                                        <div class="nj-content">
                                            <div class="nj-action-widget">
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-heart"></i></button>
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-share-nodes"></i></button>
                                            </div>
                                            <img src="assets/img/badge/top-rated.png" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-2.jpeg" alt="">
                                        <div class="nj-content">
                                            <div class="nj-action-widget">
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-heart"></i></button>
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-share-nodes"></i></button>
                                            </div>
                                            <img src="assets/img/badge/top-rated.png" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-3.jpeg" alt="">
                                        <div class="nj-content">
                                            <div class="nj-action-widget">
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-heart"></i></button>
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-share-nodes"></i></button>
                                            </div>
                                            <img src="assets/img/badge/top-rated.png" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-4.jpeg" alt="">
                                        <div class="nj-content">
                                            <div class="nj-action-widget">
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-heart"></i></button>
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-share-nodes"></i></button>
                                            </div>
                                            <img src="assets/img/badge/top-rated.png" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
                                            <a href="#" class="btn btn--violet">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/Listing Item -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Listing Item -->
                                <div class="nj-listings__item">
                                    <div class="nj-listings__card">
                                        <img class="nj-thumb" src="assets/img/spa/l-5.jpeg" alt="">
                                        <div class="nj-content">
                                            <div class="nj-action-widget">
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-heart"></i></button>
                                                <button class="btn btn--circle btn--lightblue"><i class="fa-solid fa-share-nodes"></i></button>
                                            </div>
                                            <img src="assets/img/badge/top-rated.png" class="nj-badge" />
                                            <span class="nj-location"><i class="fa-solid fa-location-dot me-1"></i>Station 2, Boracay</span>
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



<?php
include("footer.php");
?>