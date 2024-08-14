<?php get_header(); ?>

<main class="main">
	<article class="articles">
		<div class="container">

			<div class="articles__img">
				<?php
				// Виведення зображення посту
				the_post_thumbnail(
					'full',
					array(
						'class' => '',
						'style' => 'width: 100%; height: 400px; object-fit: contain',
					)
				);
				?>
			</div>
			<h1 class="section__title">
				<?php the_title(); ?>
			</h1>
			<div class="article__content">
				<?php
				while (have_posts()) :
					the_post();
					the_content();
				endwhile;
				?>
			</div>
			<?php
			// // If comments are open or we have at least one comment, load up the comment template.
			//if (comments_open() || get_comments_number()) :
			//	comments_template();
			//endif;
			?>
		</div>

	</article>
	<?php get_template_part('template-parts/content', 'news'); ?>

</main>

<?php get_footer(); ?>