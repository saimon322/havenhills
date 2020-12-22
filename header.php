<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>

    <!-- Preloading fonts -->
    <link rel="preload" href="/wp-content/themes/havenhills/dist/fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/havenhills/dist/fonts/Inter-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/havenhills/dist/fonts/Inter-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/havenhills/dist/fonts/Inter-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/havenhills/dist/fonts/BarlowCondensed-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/wp-content/themes/havenhills/dist/fonts/BarlowCondensed-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">  
</head>
<body>

<header class="main-header">
    <div class="main-header__banner exit-banner">
        <div class="site-container exit-banner__container">
            <div class="exit-banner__text">
                <svg width='27' height='10'>
                    <use xlink:href='#icon-arrow'></use>
                </svg>
                Exit Site / Salir del Sitio
            </div>
            <a href="https://google.com" class="button exit-banner__btn">
                Click this banner / click aqui
            </a>
        </div>
    </div>

    <div class="main-header__main">
        <div class="site-container main-header__container">
            <a href="/" class="main-header__logo">
                <img src="/wp-content/themes/havenhills/dist/img/base/main-logo.svg" alt="">
            </a>

            <div class="main-header__menu">
                <nav class="main-header__nav main-nav">
                    <ul class="main-nav__list">
                        <li class="<%=menu.services%>">
                            <a href="/services.html">Services</a>
                        </li>
                        <li class="<%=menu.who%>">
                            <a href="/who-we-are.html">Who we are</a>
                        </li>
                        <li class="<%=menu.difference%> menu-item-has-children">
                            <a href="/make-a-difference.html">Make a difference</a>
                            <ul class="sub-menu">
                                <li><a href="/donate.html">Donate</a></li>
                                <li><a href="/volunteers.html">Volunteer</a></li>
                            </ul>
                        </li>
                        <li class="<%=menu.contact%>">
                            <a href="/contacts.html">Contact us</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">English</a>
                            <ul class="sub-menu">
                                <li><a href="#">EspaĆ±ol</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- / .main-header__nav -->

                <div class="main-header__socials">
                    <?php if( have_rows('socials', 'option') ): ?>
                    <?php while( have_rows('socials', 'option') ): the_row();
                    $name = get_sub_field('social_name');
                    $link = get_sub_field('social_url');
                    ?>
                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                        <svg width='15' height='15'>
                            <use xlink:href='#icon-<?php echo $name; ?>'></use>
                        </svg>
                    </a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /.main-header__socials -->
            </div><!-- /.main-header__menu -->

            <button class="main-header__menu-btn js-menu-btn" type="button">
                <span>Menu</span>
                <span class="hamburger">
                    <b></b>
                    <b></b>
                    <b></b>
                    <b></b>
                </span>
            </button>
        </div>
    </div>
</header><!-- / .main-header -->