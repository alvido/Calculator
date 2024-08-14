<?php
/*
 * The template for displaying the footer
 */
?>

<footer id="colophon" class="footer">
    <div class="footer__inner container">
        <?php if (get_theme_mod('footer_logo')) : ?>
            <a class="footer__logo logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <img class="logo__image" src="<?php echo esc_url(get_theme_mod('footer_logo')); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
            <?php else :
            if (function_exists('the_custom_logo')) :
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if ($logo) : ?>
                    <a class="header__logo logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    </a>
        <?php endif;
            endif;
        endif; ?>

        <div class="footer-widget copy">
            <?php dynamic_sidebar('footer_second_col'); ?>
        </div>

        <div class="footer-widget">
            <?php dynamic_sidebar('footer_third_col'); ?>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>



</body>

</html>