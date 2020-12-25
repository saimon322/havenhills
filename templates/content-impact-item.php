<?php
/*
Template Name: Impact item
Template Post Type: our-impact
*/

$nextPost = get_next_post();

get_header();
?>
    <main class="site-main">
        <section class="story">
            <div class="site-container">
                <div class="container">
                    <div class="story__content">
                        <h1 class="story__title"><?=get_the_title()?></h1>
                        <div class="story__img">
                            <img src="<?=get_the_post_thumbnail_url()?>" alt="">
                        </div>
                        <div class="story__text">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="story__nav">
                <div class="site-container">
                    <a href="/our-impact/" class="story__back">Back to all stories</a>
                    <?if(!empty($nextPost)):?>
                        <a href="<?=get_permalink( $nextPost->ID )?>" class="story__next">
                            <span>Next:</span> <?=$nextPost->post_title?>
                            <svg width='32' height='12'>
                                <use xlink:href='#icon-arrow'></use>
                            </svg>
                        </a>
                    <?endif;?>
                </div>
            </div>
        </section>

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
                            <div class="letter__img">
                                <img src="img/base/letter-1.jpg" alt="">
                            </div>
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
                            <div class="letter__img">
                                <img src="img/base/letter-3.jpg" alt="">
                            </div>
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
                            <div class="letter__img">
                                <img src="img/base/letter-6.jpg" alt="">
                            </div>
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
                            <div class="letter__img">
                                <img src="img/base/letter-2.jpg" alt="">
                            </div>
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
                            <div class="letter__img">
                                <img src="img/base/letter-4.jpg" alt="">
                            </div>
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
                            <div class="letter__img">
                                <img src="img/base/letter-5.jpg" alt="">
                            </div>
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
