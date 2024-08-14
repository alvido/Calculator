<li class="news__item">
    <?php get_template_part('template-parts/content', 'news-img'); ?>

    <div class="content">
        <h5 class="title">
            <a href="<?php the_permalink(); ?>" class="news__link">
                <?php the_title(); ?>
            </a>
        </h5>
        <p class=""><?php echo get_the_excerpt(); ?></p>
    </div>
</li>