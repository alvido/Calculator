<?php

/**
 * The template for displaying archive pages
 */

get_header();

?>
<?php get_header(); ?>

<section class="archive">
	<div class="archive__inner container">
		<h1 class="archive__title">
			<?php
			// Отображаем заголовок архива в зависимости от типа архива
			if (is_category()) {
				single_cat_title();
			} elseif (is_tag()) {
				single_tag_title();
			} elseif (is_author()) {
				the_post();
				echo 'Author: ' . get_the_author();
				rewind_posts(); // Сбрасываем указатель цикла на начало
			} elseif (is_day()) {
				echo 'Archive for ' . get_the_date();
			} elseif (is_month()) {
				echo 'Archive for ' . get_the_date('F Y');
			} elseif (is_year()) {
				echo 'Archive for ' . get_the_date('Y');
			} else {
				echo 'Archive';
			}
			?>
		</h1>

		<?php if (have_posts()) : ?>
			<ul class="archive__list">
				<?php while (have_posts()) : the_post(); ?>
					<li class="archive__item">
						<?php get_template_part('template-parts/content', 'archive'); ?>
					</li>
				<?php endwhile; ?>
			</ul>

			<div class="pagination">
				<?php
				// Выводим пагинацию для перехода между страницами архива
				the_posts_pagination(array(
					'prev_text' => '&laquo; Previous',
					'next_text' => 'Next &raquo;',
					'mid_size'  => 2,
				));
				?>
			</div>

		<?php else : ?>
			<p><?php esc_html_e('No posts found.', 'your-theme-textdomain'); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>

<?php
get_footer();
