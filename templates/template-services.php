<?php
/*
 * Template Name: Services
 */
get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <div class="page-title-2">
            <h1 class="wow fadeIn">
                <?php the_field('main_title'); ?>
            </h1>
        </div>
        <section class="services">
            <div class="services__nav services-nav">
                <div class="services-nav__inner">
                    <?php if( have_rows('services') ):
                    $i = 0;
                    while( have_rows('services') ): the_row();
                    $title = get_sub_field('title');
                    $i++; ?>
                    <a href="#service-<?php echo $i; ?>" class="services-nav__link">
                        #<?php echo $title; ?>
                    </a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- /.services-nav -->
            
            <div class="services__header services-header">
                <div class="services-header__content wow fadeInLeft">
                    <h3 class="services-header__title">
                        <?php the_field('header_title'); ?>
                    </h3>
                    <div class="services-header__text">
                        <?php the_field('header_text'); ?>
                    </div>
                </div>
                <?php if (get_field('header_img')): ?>
                <div class="services-header__logo wow fadeInUp">
                    <img src="<?php the_field('header_img'); ?>" alt="">
                </div>
                <?php endif; ?>
            </div><!-- /.services-header -->

            <div class="services__info services-info">
                <div class="services-info__title">
                    <?php the_field('info_title'); ?>                  
                </div>
                <div class="services-info__text">
                    <?php the_field('info_text'); ?> 
                </div>
            </div><!-- /.services-info -->

            <ul class="services__list services-list">
                <?php if( have_rows('services') ):
                $i = 0;
                while( have_rows('services') ): the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $button = get_sub_field('button');
                $i++; ?>
                <li class="services-list__item service" id="service-<?php echo $i; ?>">
                    <div class="service__content">
                        <div class="service__logo">
                            <?php if ($image): ?>
                            <img src="<?php echo $image; ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <h3 class="service__title">
                            <?php echo $title; ?>
                        </h3>
                        <div class="service__text">
                            <?php echo $text; ?>
                        </div>
                    </div>
                    <?php if ($button): ?>
                    <a href="<?php echo $button['url']; ?>" class="button service__button">
                        <?php echo $button['title']; ?>
                    </a>
                    <?php endif; ?>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>                    
            </ul><!-- /.services-list -->
        </section><!-- /.services -->

        <section class="other-services">
            <h2 class="other-services__title">
                <?php the_field('additional_title'); ?>
            </h2>
            
            <ul class="other-services__list">
                <?php if( have_rows('additional_services') ):
                while( have_rows('additional_services') ): the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $text = get_sub_field('text'); ?>
                <li class="other-services__item other-service">
                    <div class="other-service__logo">
                        <?php if ($image): ?>
                        <img src="<?php echo $image; ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="other-service__content">
                        <div class="other-service__title">
                            <?php echo $title; ?>
                        </div>
                        <div class="other-service__text">
                            <?php echo $text; ?>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </section><!-- /.other-services -->
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>