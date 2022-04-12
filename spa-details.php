<?php
include("header-with-logo.php");
?>

<!-- Hero Banner | Carousel -->
<section class="nj-sec__hero-carousel">
    <!-- "go" overlay -->
    <!-- <div class="nj-logo-overlay">
        <img src="assets/img/design/go-lg.png" alt="">
    </div> -->

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="nj-hero__slide">
                    <img class="nj-hero__bg" src="assets/img/spa/hero-banners/1.png" />
                    <div class="nj-hero__content">
                        <div class="nj-sec__title nj-sec__title--center nj-sec__title--white">
                            <span class="nj-sec__subheading">A Healing Journey</span>
                            <h1 class="nj-sec__heading">Wellness & Spa</h1>
                        </div>
                        <div>
                            <ul class="nj-rating" data-rating="4.5">
                                <li class="nj-rating__item"></li>
                                <li class="nj-rating__item"></li>
                                <li class="nj-rating__item"></li>
                                <li class="nj-rating__item"></li>
                                <li class="nj-rating__item"></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Nav Tab -->
<div class="nj-sec__nav">
    <div class="nj-nav__wrapper">
        <ul class="nj-nav__list">
            <li class="nj-nav__item nj-nav__item--orange">
                <a class="nj-nav__link" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/ic-community.svg" alt="">
                    <span>Community Post</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--violet">
                <a class="nj-nav__link" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/ic-accomodations.svg" alt="">
                    <span>Accommodations</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--pink">
                <a class="nj-nav__link" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/ic-activites.svg" alt="">
                    <span>activities</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--green">
                <a class="nj-nav__link" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/ic-food.svg" alt="">
                    <span>food and drinks</span>
                </a>
            </li>
            <li class="nj-nav__item nj-nav__item--blue">
                <a class="nj-nav__link active" href="#">
                    <img class="nj-nav__icon" src="assets/img/icons/ic-spa.svg" alt="">
                    <span>Wellness & Spa</span>
                </a>
            </li>
        </ul>
    </div>
</div>



<!-- Newsletter Form -->
<section class="nj-sec__newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="nj-sec__title nj-sec__title--center nj-sec__title--gray">
                    <span class="nj-sec__subheading">Pack Your Bags and Hit The Grid</span>
                    <h1 class="nj-sec__heading">Receive Travel Plan and Updates</h1>
                </div>
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

</section>

<?php
include("footer.php");
?>