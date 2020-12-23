<?php
/**
 * Footer
 */
?>

<?php if ( !is_404() ): ?>
<footer class="main-footer">
    <div class="site-container main-footer__container">
        <div class="main-footer__top">
            <div class="main-footer__main">
                <div class="main-footer__info">
                    <?php the_field('footer_main_text', 'option'); ?>
                    
                    <div class="main-footer__info-block">
                        <?php the_field('footer_info_block_1', 'option'); ?>
                    </div>

                    <div class="main-footer__info-block">
                        <?php the_field('footer_info_block_2', 'option'); ?>
                    </div>
                </div><!-- /.main-footer__info -->

                <div class="main-footer__socials">
                    <?php if( have_rows('socials', 'option') ): ?>
                    <?php while( have_rows('socials', 'option') ): the_row();
                    $name = get_sub_field('social_name');
                    $link = get_sub_field('social_url');
                    ?>
                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                        <svg width='15' height='15'>
                            <use xlink:href='#icon-<?php echo $name; ?>'></use>
                        </svg>
                    </a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /.main-footer__socials -->
            </div>

            <nav class="main-footer__nav footer-nav">
                <ul class="footer-nav__list">
                    <li><a href="/who-we-are.html">Our Board</a></li>
                    <li><a href="/donate.html">Donate</a></li>
                    <li><a href="terms-of-use.html">Terms of Use / Privacy Policy</a></li>
                </ul>
            </nav><!-- / .footer-nav -->
        </div>

        <div class="main-footer__bottom">
            <div class="main-footer__copyright">
                <?php the_field('footer_copyright', 'option'); ?>
            </div>
            <div class="main-footer__taxes">
                <?php the_field('footer_taxes', 'option'); ?>
            </div>
        </div>
    </div>
</footer><!-- / .main-footer -->
<?php endif; ?>

<!-- Donate button -->
<?php $donate = get_field('donate_button', 'option'); ?>
<a href="<?php echo $donate['url']; ?>" class="button donate-button">
    <?php echo $donate['title']; ?>
</a>

<?php wp_footer(); ?>

</body>
</html>
