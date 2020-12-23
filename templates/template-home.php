<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>

<main class="site-main">
    <div class="site-container">
        <section class="main-offer">
            <div class="container main-offer__container">
            <div class="main-offer__content wow fadeInLeft">
                    <h1 class="main-offer__title">
                        <?php the_field('main_title'); ?>
                    </h1>
                    <div class="main-offer__text">
                        <?php the_field('main_text'); ?>
                    </div>
                    <div class="main-offer__buttons">
                        <?php if (get_field('main_button_call')): ?>
                            <a href="tel:<?php the_field('phone', 'option'); ?>" 
                               class="button main-offer__button">
                                <?php the_field('main_button_call'); ?>
                            </a>
                        <?php endif; ?>

                        <?php if (get_field('main_buttons_text')): ?>
                            <span>
                                <?php the_field('main_buttons_text'); ?>
                            </span>
                        <?php endif; ?>

                        <?php if (get_field('main_button_message')): ?>
                            <a href="mailto:<?php the_field('email', 'option'); ?>" 
                                class="button main-offer__button">
                                <?php the_field('main_button_message'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="main-offer__logo wow fadeInUp">
                    <img src="<?php the_field('main_logo'); ?>" alt="">
                </div>
            </div>
        </section><!-- /.main-offer -->

        <section class="support">
            <div class="container support__container">
                <div class="support__content wow fadeInRight" data-wow-offset="150">
                    <h2 class="support__title">
                        <?php the_field('support_title'); ?>
                    </h2>
                    <div class="support__text">
                        <?php the_field('support_text'); ?>
                    </div>
                    <div class="support__buttons">
                        <?php $button = get_field('support_button');
                            if ($button): ?>
                            <a href="<?php echo $button['url']; ?>" 
                               class="button support__button">
                                <?php echo $button['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="support__logo wow fadeInUp" data-wow-offset="150">
                    <img src="<?php the_field('support_logo'); ?>" alt="">
                </div>
            </div>
        </section><!-- /.support -->

        <section class="covid-19">
            <div class="container covid-19__container wow fadeInUp" data-wow-offset="150">
                <h2 class="covid-19__title">
                    <?php the_field('covid_title'); ?>
                </h2>
                <div class="covid-19__content">
                    <div class="covid-19__text">
                        <?php the_field('covid_text'); ?>
                    </div>
                    <div class="covid-19__buttons">
                        <?php $button = get_field('covid_button');
                            if ($button): ?>
                            <a href="<?php echo $button['url']; ?>" 
                               class="button covid-19__button">
                                <?php echo $button['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section><!-- /.covid-19 -->

        <section class="site-cards">
            <h2 class="visually-hidden">Site cards</h2>
            <div class="container site-cards__container">
                <a href="article.html" class="site-cards__card site-card wow fadeIn" data-wow-delay="0">
                    <div class="site-card__logo">
                        <img src="/wp-content/themes/havenhills/dist/img/base/site-card-1.jpg" alt="">
                    </div>
                    <div class="site-card__title">Learn about domestic violence</div>
                </a>
                <a href="/our-impact.html" class="site-cards__card site-card wow fadeIn" data-wow-delay="0.15s">
                    <div class="site-card__logo">
                        <img src="/wp-content/themes/havenhills/dist/img/base/site-card-2.jpg" alt="">
                    </div>
                    <div class="site-card__title">Our impact</div>
                </a>
                <a href="/blog.html" class="site-cards__card site-card wow fadeIn" data-wow-delay="0.30s">
                    <div class="site-card__logo">
                        <img src="/wp-content/themes/havenhills/dist/img/base/site-card-3.jpg" alt="">
                    </div>
                    <div class="site-card__title">Blog</div>
                </a>
            </div>
        </section>

        <section class="newsletter" id="newsletter">
            <div class="newsletter__main">
                <div class="container wow fadeInUp" data-wow-offset="150">
                    <div class="newsletter__top">
                        <h2 class="newsletter__title">Newsletter</h2>
                        <div class="newsletter__text">
                            <p>Haven Hills offers shelter from domestic violence. </p>
                            <p>Learn how to help us stand up to domestic violence by subscribing to our newsletter today.</p>
                        </div>
                    </div>
                    <form action="#" class="form newsletter__form">
                        <ul class="form__fields-list fields-list">
                            <li class="fields-list__item">
                                <input type="text" name="name" id="newsletter-name">
                                <label for="newsletter-name">Name</label>
                            </li>
                            <li class="fields-list__item">
                                <input type="text" name="lastname" id="newsletter-lastname">
                                <label for="newsletter-lastname">Last Name</label>
                            </li>
                            <li class="fields-list__item">
                                <input type="email" name="email" id="newsletter-email">
                                <label for="newsletter-email">Email</label>
                            </li>
                        </ul>
                        <button type="submit" class="button">Get involved</button>
                    </form>
                </div>
            </div>
            <div class="newsletter__bottom">
                Lifting up survivors
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>