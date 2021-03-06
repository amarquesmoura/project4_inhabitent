<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content'); ?>

        <p><a href="<?php echo get_permalink() ?>" class="more black-btn">Read more &#8594;</a>

            <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?> 