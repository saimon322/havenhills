<?php
/*
Template Name: Impact list
Template Post Type: page
*/

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


$args = array(
    'numberposts' => -1,
    'post_type'   => 'our-impact',
    'paged' => $paged,
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => get_option( 'posts_per_page' ),
);

$posts = new WP_Query( $args );

$GLOBALS['wp_query'] = $posts;

get_header();
?>
    <main class="site-main">
        <section class="stories">
            <div class="site-container">
                <div class="page-title page-title--center">
                    <h1 class="wow fadeIn"><?=get_the_title()?></h1>
                    <p class="page-title__text wow fadeIn">
                        <?php the_content();?>
                    </p>
                </div>

                <ul class="stories__items">
                    <?if($posts->found_posts >= 1):?>
                        <?while ($posts->have_posts()):
                            $posts->the_post();?>
                            <li class="stories__item story-item">
                                <article>
                                    <a href="<?=get_post_permalink()?>" class="story-item__hovers">
                                        <div class="story-item__logo">
                                            <img src="<?=get_the_post_thumbnail_url()?>" alt="">
                                        </div>
                                        <h3 class="story-item__title">
                                            <?=$post->post_title?>
                                        </h3>
                                    </a>
                                    <div class="story-item__text">
                                        <?php the_content();?>
                                    </div>
                                    <a href="<?=get_post_permalink()?>" class="story-item__button button">Read more</a>
                                </article>
                            </li>
                        <?endwhile;?>
                    <?endif;?>
                </ul><!-- /.stories__items -->
            </div>
        </section>

        <div class="stories__pagination">
            <nav class="pagination">
                <?php kriesi_pagination() ?>
            </nav>
        </div>

        <section class="letters">
            <div class="site-container">
                <div class="container">
                    <h3 class="letters__title">
                        Survivors have broken the cycle of domestic violence with help from haven hills. here's what they have to say
                    </h3>
                </div>
                <div class="letters__slider swiper-container swiper-slider">
                    <div class="swiper-wrapper">
                        <div class="letters__item letter swiper-slide">
                            <a href="img/base/letter-1.jpg" class="letter__img" data-fancybox="gallery">
                                <img src="img/base/letter-1.jpg" alt="">
                            </a>
                            <div class="letter__text modal" id="letter-1">
                                <p>It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face.  I have come to the end of my is monyh and I am leaning here as a brand new woman. It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face. I have come to the end of my is monyh and I am leaning here as a brand new woman...</p>
                            </div>
                            <div class="letter__buttons">
                                <a href="img/base/letter-1.jpg" class="letter__img-button button" data-fancybox="images">
                                    View original letter
                                </a>
                                <a href="#letter-1" class="letter__text-button button" data-fancybox="texts">
                                    Read text
                                </a>
                            </div>
                        </div>
                        <div class="letters__item letter swiper-slide">
                            <a href="img/base/letter-3.jpg" class="letter__img" data-fancybox="gallery">
                                <img src="img/base/letter-3.jpg" alt="">
                            </a>
                            <div class="letter__text modal" id="letter-3">
                                <p>It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face.  I have come to the end of my is monyh and I am leaning here as a brand new woman. It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face. I have come to the end of my is monyh and I am leaning here as a brand new woman...</p>
                            </div>
                            <div class="letter__buttons">
                                <a href="img/base/letter-3.jpg" class="letter__img-button button" data-fancybox="images">
                                    View original letter
                                </a>
                                <a href="#letter-3" class="letter__text-button button" data-fancybox="texts">
                                    Read text
                                </a>
                            </div>
                        </div>
                        <div class="letters__item letter swiper-slide">
                            <a href="img/base/letter-6.jpg" class="letter__img" data-fancybox="gallery">
                                <img src="img/base/letter-6.jpg" alt="">
                            </a>
                            <div class="letter__text modal" id="letter-6">
                                <p>It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face.  I have come to the end of my is monyh and I am leaning here as a brand new woman. It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face. I have come to the end of my is monyh and I am leaning here as a brand new woman...</p>
                            </div>
                            <div class="letter__buttons">
                                <a href="img/base/letter-6.jpg" class="letter__img-button button" data-fancybox="images">
                                    View original letter
                                </a>
                                <a href="#letter-6" class="letter__text-button button" data-fancybox="texts">
                                    Read text
                                </a>
                            </div>
                        </div>
                        <div class="letters__item letter swiper-slide">
                            <a href="img/base/letter-2.jpg" class="letter__img" data-fancybox="gallery">
                                <img src="img/base/letter-2.jpg" alt="">
                            </a>
                            <div class="letter__text modal" id="letter-2">
                                <p>It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face.  I have come to the end of my is monyh and I am leaning here as a brand new woman. It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face. I have come to the end of my is monyh and I am leaning here as a brand new woman...</p>
                            </div>
                            <div class="letter__buttons">
                                <a href="img/base/letter-2.jpg" class="letter__img-button button" data-fancybox="images">
                                    View original letter
                                </a>
                                <a href="#letter-2" class="letter__text-button button" data-fancybox="texts">
                                    Read text
                                </a>
                            </div>
                        </div>
                        <div class="letters__item letter swiper-slide">
                            <a href="img/base/letter-4.jpg" class="letter__img" data-fancybox="gallery">
                                <img src="img/base/letter-4.jpg" alt="">
                            </a>
                            <div class="letter__text modal" id="letter-4">
                                <p>It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face.  I have come to the end of my is monyh and I am leaning here as a brand new woman. It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face. I have come to the end of my is monyh and I am leaning here as a brand new woman...</p>
                            </div>
                            <div class="letter__buttons">
                                <a href="img/base/letter-4.jpg" class="letter__img-button button" data-fancybox="images">
                                    View original letter
                                </a>
                                <a href="#letter-4" class="letter__text-button button" data-fancybox="texts">
                                    Read text
                                </a>
                            </div>
                        </div>
                        <div class="letters__item letter swiper-slide">
                            <a href="img/base/letter-5.jpg" class="letter__img" data-fancybox="gallery">
                                <img src="img/base/letter-5.jpg" alt="">
                            </a>
                            <div class="letter__text modal" id="letter-5">
                                <p>It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face.  I have come to the end of my is monyh and I am leaning here as a brand new woman. It is with complete horor that I am writing this thank you letter to thark Haven Hills for changing my life for the best. Haven Hills staff has been amazing througt the most difficult transition my kids and I ever had to face. I have come to the end of my is monyh and I am leaning here as a brand new woman...</p>
                            </div>
                            <div class="letter__buttons">
                                <a href="img/base/letter-5.jpg" class="letter__img-button button" data-fancybox="images">
                                    View original letter
                                </a>
                                <a href="#letter-5" class="letter__text-button button" data-fancybox="texts">
                                    Read text
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="swiper-button swiper-button--prev" type="button">
                        <svg width='27' height='11'>
                            <use xlink:href='#icon-arrow'></use>
                        </svg>
                    </button>
                    <button class="swiper-button swiper-button--next" type="button">
                        <svg width='27' height='11'>
                            <use xlink:href='#icon-arrow'></use>
                        </svg>
                    </button>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <div class="site-container"></div>
    </main><!-- / .site-main -->

<?php
get_footer();
