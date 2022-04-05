<!--START : HEADER # 1 -->
<header class="header--1">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img class="brand__logo" src="https://dummyimage.com/300x56/fff" alt="">
        </a>
        <button class="navbar-toggler button_container" id="menuToggle--1">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </button>

        <ul class="header__nav ml-auto">
            <li class="nav-item header__nav_item active">
                <a class="nav-link header__nav_link" href="#">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item header__nav_item">
                <a class="nav-link header__nav_link" href="#">Unit Types</a>
            </li>
            <li class="nav-item header__nav_item">
                <a class="nav-link header__nav_link" href="#">Amenities</a>
            </li>
            <li class="nav-item header__nav_item">
                <a class="nav-link header__nav_link" href="#">Location</a>
            </li>
            <li class="nav-item header__nav_item">
                <a class="nav-link header__nav_link" href="#">Contact Us</a>
            </li>
        </ul>
    </nav>
</header>
<!-- START : Full Screen Mobile Menu -->
<div class="popup__menu--1">
    <nav class="header__primary_nav">
        <ul class="main__menu">
            <li class="main__menu_item">
                <a class="main__menu_link" href="about.php">About</a>
            </li>
            <li class="main__menu_item">
                <a class="main__menu_link" href="units.php">Units Types</a>
            </li>
            <li class="main__menu_item">
                <a class="main__menu_link" href="units.php">Amenities</a>
            </li>
            <li class="main__menu_item">
                <a class="main__menu_link" href="location.php">Location</a>
            </li>
            <li class="main__menu_item>">
                <a class="main__menu_link" href="#">Contact Us</a>
            </li>
        </ul>
    </nav>
</div>
<!-- END : Full Screen Mobile Menu -->

<!--END : HEADER # 1 -->

<!--START : HEADER # 2 -->
<header class="header--2">
    <div class="header__brand">
        <a href="index.php">
            <img src="https://dummyimage.com/155x126/fff" alt="">
        </a>
    </div>
    <div class="header__side">
        <!-- Menu for Desktop -->
        <div class="header__secondary">
            <div class="container-fluid b-t">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <a href="" class="module right module--facebook">
                            <img class="link__icon" src="https://dummyimage.com/28x28/fff" alt="">
                            <span class="sub">
                                RockwellBacolod
                            </span>
                        </a>


                        <a href="" class="module right module--phone">
                            <img class="link__icon" src="https://dummyimage.com/28x28/fff" alt="">
                            <span class="sub">
                                09171234567
                            </span>
                        </a>
                        <a href="" class="module right module--inquire">
                            <img class="link__icon" src="https://dummyimage.com/28x28/fff" alt="">
                            <span class="sub">
                                inquire@rockwell.com.ph
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__primary">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <nav class="header__primary_nav">
                            <ul class="main__menu">
                                <li class="main__menu_item <?php if(current_file_url() == "about.php") echo 'active'; ?>">
                                    <a class="main__menu_link" href="about.php">About</a>
                                </li>
                                <li class="main__menu_item <?php if(current_file_url() == "location.php") echo 'active'; ?>">
                                    <a class="main__menu_link" href="location.php">Location</a>
                                </li>
                                <li class="main__menu_item <?php if(current_file_url() == "units.php") echo 'active'; ?>">
                                    <a class="main__menu_link" href="units.php">Units</a>
                                </li>
                                <li class="main__menu_item <?php if(current_file_url() == "amenities.php") echo 'active'; ?>">
                                    <a class="main__menu_link" href="amenities.php">Amenities</a>
                                </li>
                                <li class="main__menu_item menu-item-has-children <?php if(current_file_url() == "whatsnew.php") echo 'active'; ?>">
                                    <a class="main__menu_link" href="whatsnew.php">What's New</a>
                                    <ul class="sub-menu" aria-labelledby="navbarDropdown">
                                        <li class="main__menu_item <?php if(current_file_url() == "news.php") echo 'active'; ?>"><a class="dropdown-item" href="news.php">News</a></li>
                                        <li class="main__menu_item <?php if(current_file_url() == "news.php") echo 'active'; ?>"><a class="dropdown-item" href="units-bd-2.php">Events & Promos</a></li>
                                    </ul>
                                </li>
                                <li class="main__menu_item <?php if(current_file_url() == "contact.php") echo 'active'; ?>">
                                    <a class="main__menu_link" href="contact.php">Contact Us</a>
                                </li>

                                <li class="main__menu_item">
                                    <button class="main__menu_link main__menu_search "><img src="assets/img/icon/search-icon.svg" alt=""></button>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu for Mobile -->
        <div class="header__primary_mobile">

            <nav class="header__primary_nav">
                <ul class="main__menu d-flex justify-content-end align-items-center">


                    <li class="main__menu_item">
                        <button class="main__menu_link main__menu_search"><img src="assets/img/icon/search-icon.svg" alt=""></button>
                    </li>

                    <li class="main__menu_item">
                        <div class="button_container" id="menuToggle--2">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</header>
<!-- START : Full Screen Mobile Menu -->
<div class="popup__menu--2">
    <nav class="header__primary_nav">
        <ul class="main__menu">
            <li class="main__menu_item <?php if(current_file_url() == "about.php") echo 'active'; ?>">
                <a class="main__menu_link" href="about.php">About</a>
            </li>
            <li class="main__menu_item <?php if(current_file_url() == "location.php") echo 'active'; ?>">
                <a class="main__menu_link" href="location.php">Location</a>
            </li>
            <li class="main__menu_item <?php if(current_file_url() == "units.php") echo 'active'; ?>">
                <a class="main__menu_link" href="units.php">Units</a>
            </li>
            <li class="main__menu_item <?php if(current_file_url() == "amenities.php") echo 'active'; ?>">
                <a class="main__menu_link" href="amenities.php">Amenities</a>
            </li>
            <li class="main__menu_item mobile--dropdown <?php if(current_file_url() == "whatsnew.php") echo 'active'; ?>">
                <a class="main__menu_link" href="whatsnew.php">What's New</a>
                <button class="dropdown-toggle  dropdown-btn"></button>
                <ul class="dropdown-container" aria-labelledby="navbarDropdown">
                    <li class="main__menu_item <?php if(current_file_url() == "news.php") echo 'active'; ?>"><a class="main__menu_link" href="news.php">News</a></li>
                    <li class="main__menu_item <?php if(current_file_url() == "news.php") echo 'active'; ?>"><a class="main__menu_link" href="news.php">Events & Promos</a></li>
                </ul>
            </li>
            <li class="main__menu_item <?php if(current_file_url() == "contact.php") echo 'active'; ?>">
                <a class="main__menu_link" href="#">Contact Us</a>
            </li>
        </ul>
        <div class="menu__divider"></div>
        <ul class="main__menu">
            <li class="main__menu_item">
                <a href="" class="link__contact module--inquire">
                    <img class="link__icon" src="assets/img/header-ic-mail.png" alt="">
                    <span class="sub">
                        inquire@rockwell.com.ph
                    </span>
                </a>
            </li>
            <li class="main__menu_item">
                <a href="" class="link__contact module--phone">
                    <img class="link__icon" src="assets/img/header-ic-phone.png" alt="">
                    <span class="sub">
                        09171234567
                    </span>
                </a>
            </li>
            <li class="main__menu_item">
                <a href="" class="link__contact module--facebook">
                    <img class="link__icon" src="assets/img/header-ic-fb.png" alt="">
                    <span class="sub">
                        RockwellBacolod
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- END : Full Screen Mobile Menu -->
<!--END : HEADER # 2 -->

<header class="header--3">
    <nav class="header--01 display">
        <div class="container header__container">
            <div class="header__left_box">
                <ul class="header__menu_list header__item--desktop">
                    <li class="header__menu_item"><a href="index.php" class="header__menu_link header__menu_link--blac">Home</a></li>
                    <li class="header__menu_item"><a href="play.php" class="header__menu_link header__menu_link--black active">Vote</a></li>
                    <li class="header__menu_item"><a href="categories.php" class="header__menu_link header__menu_link--black">Categories</a></li>
                    <li class="header__menu_item"><a href="contactus.php" class="header__menu_link header__menu_link--black">contact</a></li>
                </ul>
            </div>
            <div class="header__center_box">
                <a href="#" title="Home" class="header__logo_box"><img src="https://dummyimage.com/125x125/fff" alt="Phoenix UI kit logo" class="header__logo_img"></a>
            </div>
            <div class="header__right_box">
                <ul class="header__menu_list header__item--desktop">
                    <li class="header__menu_item"><a href="login.php" class="header__menu_link header__menu_link--black">Login</a></li>
                    <li class="header__menu_item"><a href="signup.php" class="button button--yellow button--gray-shadow header__item--desktop">sign up</a></li>
                </ul>
                <button type="button" data-menu-index="01" class="header__burger_button header__burger_button--black js-open-menu header__item--mobile"></button>
            </div>
        </div>
    </nav>
</header>