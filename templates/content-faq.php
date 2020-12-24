<?php
/*
Template Name: Faq template
Template Post Type: page
*/

get_header();
$search = get_field('search');
?>
    <main class="site-main">
        <div class="site-container">
            <section class="faq">
                <div class="page-title page-title--center">
                    <h1><?=get_the_title()?></h1>
                </div>
                <div class="search">
                    <form class="search" method="get">
                        <input type="text" class="search__input" value="<?= isset($_GET['search-input']) ? $_GET['search-input'] : ''?>" name="search-input" id="search-input" placeholder="<?=$search['placeholder']?>">
                        <button class="search__button" style="background-image: url(<?=$search['image']?>);"></button>
                    </form>
                </div>

                <ul class="faq__list">
                    <? $faqs = get_field('faq_list');;
                    if(!empty($faqs)):
                        foreach ($faqs as $faq):
                            if(isset($_GET['search-input']) && !empty($_GET['search-input'])):
                                if(stripos('.'.$faq['title'], $_GET['search-input'])):
                                    $result = true;?>
                                    <li class="faq__item faq-item">
                                        <div class="faq-item__content">
                                            <h4 class="faq-item__title"><?=$faq['title']?></h4>
                                            <div class="faq-item__text">
                                                <p><?=$faq['content']?></p>
                                            </div>
                                        </div>
                                        <a href="#faq-modal" class="faq-item__button">Read more</a>
                                    </li>
                                <?endif;?>
                            <?else:?>
                                <li class="faq__item faq-item">
                                    <div class="faq-item__content">
                                        <h4 class="faq-item__title"><?=$faq['title']?></h4>
                                        <div class="faq-item__text">
                                            <p><?=$faq['content']?></p>
                                        </div>
                                    </div>
                                    <a href="#faq-modal" class="faq-item__button">Read more</a>
                                </li>
                            <?endif;?>
                        <?  endforeach;
                    endif;?>
                </ul>

            </section>
        </div>
    </main><!-- / .site-main -->
    <div class="modal" id="faq-modal">
        <h4 class="modal__title"></h4>
        <div class="modal__text"></div>
    </div>
<?php
get_footer();
