<section class="news">
    <div class="news__inner container">
        <h2 class="section__title">Полезные <span>статьи</span></h2>

        <ul class="articles__list">
            <?php
            // Получаем ID текущего поста
            $current_post_id = get_the_ID();

            // Получаем текущую страницу пагинации
            $current = absint(
                max(
                    1,
                    get_query_var('paged') ? get_query_var('paged') : get_query_var('page')
                )
            );
            $posts_per_page = 3;

            // Создаем новый WP_Query для получения постов
            $query = new WP_Query(
                [
                    'post_type' => 'post',
                    'posts_per_page' => $posts_per_page,
                    'paged' => $current,
                    'post__not_in' => [$current_post_id], // Исключаем текущий пост
                    // 'category__in' => wp_get_post_categories($current_post_id), // Если хотите получить статьи из той же категории
                    'orderby' => 'rand' // Если хотите случайный порядок
                ]
            );

            if ($query->have_posts()) {
            ?>
            <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part('content-ajax'); // Используем шаблон для постов

                }
                wp_reset_postdata();
                echo '</ul>';
            }
            ?>
            <a href="/blog" class="button button--transparent">Посмотреть все</a>
    </div>
</section>