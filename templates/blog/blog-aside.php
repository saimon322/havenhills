<?php

$terms = get_terms( 'category', array(
    'hide_empty' => false,
) );

$posts = get_posts( array(
    'numberposts' => -1,
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
$count = count($posts);

$page_for_posts = get_option( 'page_for_posts' );

$articles = get_field('important_articles', $page_for_posts);

$color = '#7FB88F';
$current = '';
if(isset($_GET['cat'])){
    $current = $_GET['cat'];
}else{
    if($args['current'] == null){
        $current = 'All';
    }else{
        $current = $args['current'];
    }
}


?>

<div class="blog__aside blog-aside">
    <div class="blog-aside__inner">
        <div class="blog-aside__block">
            <h4 class="blog-aside__title">Categories</h4>
            <ul class="blog-aside__content categories">
                <li class="categories__item <?= 'All' == $current ? 'categories__item--current' : ''?>">
                    <a href="/blog/">All</a>
                    <span>/ <?= $count?></span>
                </li>
                <?foreach ($terms as $term):?>
                    <li class="categories__item <?= $term->term_id == $current ? 'categories__item--current' : ''?>">
                        <a href="/blog/?cat=<?=$term->term_id?>"><?=$term->name?></a>
                        <span>/ <?=$term->count?></span>
                    </li>
                <?endforeach;?>

            </ul>
        </div>
        <? if(!empty($articles)):?>
            <div class="blog-aside__block">
                <h4 class="blog-aside__title">Important articles</h4>
                <ul class="blog-aside__content other-articles">
                    <?foreach ($articles as $article):
                        $aTerm = array_pop(wp_get_post_terms( $article->ID, 'category'));

                        if($aTerm == null){
                            $aTerm->name = "All";
                        }

                        if($color == '#F9D593'){
                            $color = '#7FB88F';
                        }elseif($color == '#7FB88F'){
                            $color = '#F9D593';
                        }
                        ?>
                        <li class="other-articles__item" style="background-color: <?=$color?>;">
                            <a href="<?=get_permalink( $article->ID )?>">
                                <div class="other-articles__item-title">
                                    <?=$article->post_title?>
                                </div>
                                <div class="other-articles__item-footer">
                                    <?=date("M j, Y", strtotime($article->post_date));?> | <?=$aTerm->name?>
                                </div>
                            </a>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        <?endif;?>
    </div>
</div><!-- /.blog__aside -->
