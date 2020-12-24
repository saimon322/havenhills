<?php get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <section class="textpage wow fadeIn">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <?php the_field('page_content'); ?>
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>
