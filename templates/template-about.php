<?php
/*
 * Template Name: Who we are
 */
get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <section class="about-header">
            <div class="container about-header__container wow fadeIn">
                <h1 class="about-header__title">
                    <?php the_title(); ?>
                </h1>
                <div class="about-header__text">
                    <?php the_field('main_text'); ?>
                </div>
            </div>
            <div class="about-header__logo wow fadeInUp">
                <?php if (get_field('main_image')): ?>
                <img src="<?php the_field('main_image'); ?>" alt="">
                <?php endif; ?>

                <?php if (get_field('main_image_mobile')): ?>
                <img src="<?php the_field('main_image_mobile'); ?>" alt="">
                <?php endif; ?>
            </div>
        </section><!-- /.about-header -->

        <section class="about-mission">
            <div class="container about-mission__container">
                <div class="about-mission__content wow fadeInLeft">
                    <h2 class="about-mission__title">
                        <?php the_field('mission_title'); ?>
                    </h2>
                    <div class="about-mission__text">
                        <?php the_field('mission_text'); ?>
                    </div>
                </div>
                <div class="about-mission__logo wow fadeInUp">
                    <?php if (get_field('mission_image')): ?>
                    <img src="<?php the_field('mission_image'); ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </section><!-- /.about-mission -->

        <section class="about-vision">
            <div class="container about-vision__container">
                <div class="about-vision__content wow fadeInRight">
                    <h2 class="about-vision__title">
                        <?php the_field('vision_title'); ?>
                    </h2>
                    <div class="about-vision__text">
                        <?php the_field('vision_text'); ?>
                    </div>
                </div>
                <div class="about-vision__logo wow fadeInUp">
                    <?php if (get_field('vision_image')): ?>
                    <img src="<?php the_field('vision_image'); ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </section><!-- /.about-vision -->

        <section class="directors">
            <div class="container directors__container wow fadeInUp">
                <h2 class="directors__title">
                    <?php the_field('directors_title'); ?>
                </h2>
                <div class="directors__years">
                    <?php the_field('directors_years'); ?>
                </div>
            </div>

            <ul class="directors__list">
                <?php if( have_rows('directors') ):
                while( have_rows('directors') ): the_row();
                $photo = get_sub_field('photo');
                $name = get_sub_field('name');
                $position = get_sub_field('position'); ?>
                <li class="directors__item director">
                    <div class="director__photo">
                        <?php if ($photo): ?>
                        <img src="<?php echo $photo; ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="director__name">
                        <?php echo $name; ?>
                    </div>
                    <div class="director__position">
                        <?php echo $position; ?>
                    </div>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </section><!-- /.directors -->
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>