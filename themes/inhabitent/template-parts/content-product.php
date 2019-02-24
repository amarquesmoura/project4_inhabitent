<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="product-image">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
    </div>
    <div class="product-text">
        <header class="entry-header-product">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

        </header><!-- .entry-header -->

        <div class="entry-content">
            <p class="price">
                <?php echo CFS()->get('product_price'); ?>
            </p>
            <?php the_content(); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
            ?>
            <div class="social-media">
                <button type="button" class="black-btn">
                    <i class="fab fa-facebook"></i>Like
                </button>
                <button type="button" class="black-btn">
                    <i class="fab fa-twitter"></i>Tweet
                </button>
                <button type="button" class="black-btn">
                    <i class="fab fa-pinterest"></i>Pin
                </button>
            </div>
        </div><!-- .entry-content -->
    </div>

    <footer class="entry-footer">
        <?php inhabitent_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## --> 