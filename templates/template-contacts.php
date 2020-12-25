<?php
/*
* Template Name: Contacts
*/
get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <section class="contacts">
            <div class="container">
                <div class="contacts__header">
                    <div class="contacts__main wow fadeIn">
                        <h1 class="contacts__title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="contacts__text">
                            <?php the_field('main_text'); ?>
                        </div>
                    </div>
                    <div class="contacts__logo wow fadeInRight">
                        <?php if (get_field('main_image')): ?>
                        <img src='<?php the_field('main_image'); ?>' alt=''>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="contacts__form wow fadeIn" data-wow-offset="100">
                    <?php echo do_shortcode( get_field('form_shortcode') ); ?>
                </div>
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>