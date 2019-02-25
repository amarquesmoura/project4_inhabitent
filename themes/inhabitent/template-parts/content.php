<?php
/**
 * Template part for displaying posts.
 *
 * @package Inhabitent_Theme
 */

?>
<div class="product-grid-card">
    <?php if (has_post_thumbnail()): ?>
    <div class="product-thumbnail">
        <a href="<?php esc_url(get_permalink()) ?>" rel="bookmark">
            <?php the_post_thumbnail('medium_large'); ?>
        </a>
        <?php endif; ?>
    </div>
    <div class="product-info">
        <h2 class="product-title">
            <?php the_title(); ?>
        </h2>
        <span class="price">
            <?php $product_terms = get_terms('product_type'); ?>
            <?php echo $product_terms->price; ?>
        </span>
    </div>
</div> 