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
                    <h3>Other Ways to Make an Impact</h3>
                </div>
                <div class="donate-cards__item donate-card">
                    <h4 class="donate-card__title">Volunteer</h4>
                    <div class="donate-card__text">
                        <p>
                            Experience genuine pride and satisfaction as you help deserving families and 
                            individuals rebuild their lives. Explore <a href="volunteers.html">our volunteer page</a> to view a list of 
                            ways to get involved and actively support survivors of domestic violence today. 
                            Have questions about volunteering? Feel free to email 
                            <a href="#">volunteers@havenhills.org</a>, and we'll get back to you as soon 
                            as possible.
                        </p>
                    </div>
                </div>
                <div class="donate-cards__item donate-card">
                    <h4 class="donate-card__title">Leave a legacy</h4>
                    <div class="donate-card__text">
                        <p>
                            Let your love and compassion live on: remember Haven Hills when you make your will when 
                            and leave a legacy of domestic violence shelters donations. Contact our Development 
                            Associate at <b>818.887.7481</b>, Extension 121, or <a href="#">help@havenhills.org</a> 
                            to quickly get the help you need to donate for domestic violence as a part of your estate 
                            planning. Your bequest will save lives.
                        </p>
                    </div>
                </div>
                <div class="donate-cards__item donate-card">
                    <h4 class="donate-card__title">Join our community</h4>
                    <div class="donate-card__text">
                        <p>
                            We exist to empower survivors and transform their lives. Staffed by hard-working 
                            professionals and volunteers, Haven Hills is a community that brings positive change 
                            to the greater Los Angeles area — and we'd love for you to join our community. 
                            <a href="/#newsletter">Sign up for the Haven Hills newsletter</a> to learn how you 
                            can get involved with us today and on an ongoing basis.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>