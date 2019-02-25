<?php
/**
 * Template part for displaying posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>

        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <div class="entry-meta">
            <?php inhabitent_posted_on(); ?> /
            <?php inhabitent_comment_count(); ?> /
            <?php inhabitent_posted_by(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html('Pages:'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## --> 