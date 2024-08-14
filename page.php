<?php

/**
 * The template for displaying all pages
 *
 */

get_header();
?>
<main class="main">
    <section class="page">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <div class="feedback__inner --bg">
                <h2>Потрібна допомога? </h2>
                <p class="subtitle">Напишіть нам, дамо відповіді на питання.</p>
                <a href="" class="feedback__link">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/avatar.png" alt="avatar">
                    Напишіть нам
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 2L11 13" stroke="#111113" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="#111113" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
                <?php
                echo do_shortcode('[cf7form cf7key="form"]');
                ?>

            </div>

        </div>
    </section>
</main>
<?php
get_footer();
