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
                <?php the_field('exit_banner_text', 'option'); ?>
            </div>
            <?php $exit_button = get_field('exit_banner_button', 'option'); ?>
            <a href="<?php echo $exit_button['url']; ?>" class="button exit-banner__btn">
                <?php echo $exit_button['title']; ?>
            </a>
        </div>
    </div>

    <div class="main-header__main">
        <div class="site-container main-header__container">
            <a href="/" class="main-header__logo">
                <img src="<?php the_field('header_logo', 'option'); ?>" alt="">
            </a>

            <div class="main-header__menu">
                <nav class="main-header__nav main-nav">
                    <?php
                    $args = array(
                        'theme_location' 	=> 'Main',
                        'container'				=> '',
                        'menu_class'      => 'main-nav__list',
                        'items_wrap'      => '<ul class="main-nav__list">%3$s</ul>',
                    );
                    if(get_locale() == 'en_US'){
                        $args['menu'] = 'main';
                    }elseif (get_locale() == 'es_ES'){
                        $args['menu'] = 'main-es';
                    }
                    wp_nav_menu($args);
                    ?>
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