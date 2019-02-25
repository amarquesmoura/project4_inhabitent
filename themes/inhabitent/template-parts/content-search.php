<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="search-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()): ?>
        <div class="entry-meta">
            <?php inhabitent_posted_on(); ?> /
            <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
            <?php inhabitent_posted_by(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
        <p><a href="<?php echo get_permalink() ?>" class="more black-btn">Read more &#8594;</a>
    </div><!-- .entry-summary -->
</article><!-- #post-## --> 