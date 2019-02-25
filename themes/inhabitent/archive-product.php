<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()): ?>
        <div class="container">
            <header class="page-header">
                <h1 class="page-title">Shop Stuff</h1>

                <ul class="product-categories-menu">
                    <?php
                    $product_terms = get_terms('product_type');
                    foreach ($product_terms as $product_term): ?>
                    <li>
                        <p><a href="<?php echo get_term_link($product_term); ?>">
                                <?php echo $product_term->slug; ?></a>
                        </p>
                    </li>
                    <?php endforeach ?>

            </header><!-- .page-header -->
            <div class="product-grid">
                <?php  /* Start the Loop */ ?>
                <?php while (have_posts()): the_post(); ?>

                <?php get_template_part('template-parts/content', 'tax'); ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

                <?php else: ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 