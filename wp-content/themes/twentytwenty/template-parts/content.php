<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


?>
<div class="container">
	<div class="news-item row align-items-center mb-4 p-3 bg-white rounded">

		<div class="col-md-5">
			<a href="<?php the_permalink(); ?>" class="d-block overflow-hidden rounded">
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('medium_large', ['class' => 'img-fluid w-100 h-100']); ?>
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default.jpg" class="img-fluid" alt="No image">
				<?php endif; ?>
			</a>
		</div>

		<div class="col-md-7">
			<div class="row no-gutters">
				<div class="col-3 text-center text-primary align-self-center">
					<div class="display-4 mb-0"><?php echo get_the_date('d'); ?></div>
					<small class="text-muted d-block">
						THÁNG <?php echo get_the_date('m'); ?><br><?php echo get_the_date('Y'); ?>
					</small>
				</div>

				<div class="post-info col-9 pl-3">
					<h2 class="font-weight-bold mb-2">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p class="text-muted mb-1 small"><strong>Categories:</strong> <?php the_category(', '); ?></p>
					<p class="text-muted mb-0"><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
				</div>
			</div>
		</div>

	</div>

</div>