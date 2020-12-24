<?php
/*
 * Template Name: Make a difference
 */
get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <div class="page-title-2">
            <h1 class="wow fadeIn">
                <?php the_title(); ?>
            </h1>
        </div>
        
        <section class="differences">
            <div class="container differences__container">
                <div class="differences__logo">
                    <?php if (get_field('main_image')): ?>
                    <img src='<?php the_field('main_image'); ?>' alt=''>
                    <?php endif; ?>
                </div>

                <ul class="differences__list">
                    <?php if( have_rows('differences_list') ):
                    while( have_rows('differences_list') ): the_row(); 
                    $is_half = get_sub_field('is_half_width');
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text'); ?>
                    <li class="difference__item difference <?php if( $is_half ){ echo 'difference--half'; } ?>">
                        <div class="difference__logo">
                            <?php if ($image): ?>
                            <img src='<?php echo $image; ?>' alt=''>
                            <?php endif; ?>
                        </div>
                        <div class="difference__content">
                            <h3 class="difference__title">
                                <?php echo $title; ?>
                            </h3>
                            <div class="difference__text">
                                <?php echo $text; ?>
                            </div>
                            <?php if( have_rows('buttons') ): ?>
                            <div class="difference__buttons">
                                <?php while( have_rows('buttons') ): the_row();
                                $button = get_sub_field('link');
                                if(get_sub_field('is_file')) {
                                    $button = get_sub_field('file');
                                }
                                if( $button ): ?>
                                <a href="<?php echo $button['url'] ?>" class="button difference__button" target="_blank">
                                    <?php echo $button['title'] ?>
                                </a>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>