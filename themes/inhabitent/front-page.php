<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="front-page-hero">
            <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
        </section>

        <section class="products-section container">
            <h2>Shop Stuff</h2>
            <div class="product-categories">
                <?php
                $product_terms = get_terms('product_type');
                foreach ($product_terms as $product_term): ?>
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $product_term->slug; ?>.svg">
                    <?php 
                    echo "<p>$product_term->description</p>"; ?>
                    <p><a href="<?php echo get_term_link($product_term); ?>" class="btn">
                            <?php echo $product_term->slug; ?> stuff</a>
                        <?php endforeach ?>
                </div>
        </section>

        <section class="latest-posts">
            <div class="container">
                <h2>Inhabitent Journal</h2>
                <?php
                $latest_posts = inhabitent_get_latest_posts();
                foreach ($latest_posts as $post): setup_postdata($post);
                    ?>
                <div>
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium_large');
                    }
                    ?>
                    <?php 
                    the_date();
                    echo comments_number();
                    the_title();
                    ?>
                    <a href="<?php the_permalink(); ?>">Read entry</a>
                    <?php endforeach;

                wp_reset_postdata();
                ?>
                </div>
            </div>
        </section>

        <section class="adventures container">
            <h2>Latest Adventures</h2>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 