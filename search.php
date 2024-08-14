<?php

/**
 * The template for displaying search results pages
 */

get_header();
?>

<section class="search-results">
    <div class="search-results__inner container">
        <h1 class="search-results__title">
            <?php
            printf(
                esc_html__('Search Results for: %s', 'your-theme-textdomain'),
                '<span>' . get_search_query() . '</span>'
            );
            ?>
        </h1>

        <?php if (have_posts()) : ?>
            <ul class="search-results__list articles__list">
                <?php while (have_posts()) : the_post();
                    get_template_part('content-ajax'); // Используем шаблон для постов
                endwhile; ?>
            </ul>

            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                ));
                ?>
            </div>

        <?php else : ?>
            <p><?php esc_html_e('Sorry, no results were found for your search.', 'your-theme-textdomain'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>

</section>

<?php get_template_part('template-parts/content', 'news'); ?>





<?php

get_footer();
