<?php get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <section class="page404">
            <div class="page404__logo">
                <img src="<?php the_field('404_bg_image', 'option'); ?>" alt="">
            </div>
            <div class="page404__content">
                <h1 class="visually-hidden">404</h1>
                <div class="page404__title">
                    <img src="<?php the_field('404_title_image', 'option'); ?>" alt="">
                </div>
                <p class="page404__text">
                    <?php the_field('404_text', 'option'); ?>
                </p>
                <a href="<?php echo get_bloginfo('url') ?>" class="button page404__button">
                    <?php the_field('404_button', 'option'); ?>
                </a>
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>
