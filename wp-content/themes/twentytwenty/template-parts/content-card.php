<?php
/**
 * Template part for displaying posts in a card layout
 */
?>

<article <?php post_class('post-card mb-4'); ?> id="post-<?php the_ID(); ?>">
    <div class="card h-100 border-0 shadow-sm">
        <?php if (has_post_thumbnail()) : ?>
            <div class="card-img-wrapper">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
                </a>
            </div>
        <?php endif; ?>
        
        <div class="card-body">
            <?php
            $categories = get_the_category();
            if (!empty($categories)) :
            ?>
                <div class="card-category mb-2">
                    <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="text-primary text-decoration-none">
                        <?php echo esc_html($categories[0]->name); ?>
                    </a>
                </div>
            <?php endif; ?>

            <h2 class="card-title h5">
                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                    <?php the_title(); ?>
                </a>
            </h2>

            <div class="card-meta text-muted small mb-2">
                <span class="me-3">
                    <i class="far fa-calendar"></i>
                    <?php echo get_the_date('d/m/Y'); ?>
                </span>
                <span>
                    <i class="far fa-user"></i>
                    <?php the_author(); ?>
                </span>
            </div>

            <div class="card-text mb-3">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
            </div>

            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">
                <?php _e('Read more', 'twentytwenty'); ?> 
                <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</article>