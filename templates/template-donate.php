<?php
/*
* Template Name: Donate
*/
get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <section class="donate wow fadeIn">
            <div class="container">
                <h1><?php the_field('main_title'); ?></h1>
                <?php the_field('content'); ?>
            </div>

            <div class="donate-cards wow fadeInUp">
                <div class="donate-cards__title">
                    <h3><?php the_field('other_ways_title'); ?></h3>
                </div>
                <?php if( have_rows('other_ways_list') ): ?>
                <ul class="donate-cards__list">
                    <?php while( have_rows('other_ways_list') ): the_row(); ?>
                    <li class="donate-cards__item donate-card">
                        <h4 class="donate-card__title">
                            <?php echo get_sub_field('title') ?>
                        </h4>
                        <div class="donate-card__text">
                            <?php echo get_sub_field('content') ?>                            
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>