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

        </section>

        <section class="products-section">
            <h2>Shop Stuff</h2>
            <div class="product-categories">
                <?php
                $product_terms = get_terms('product_type');
                foreach ($product_terms as $product_term) {
                    echo $product_term->description;
                }
                ?>
            </div>
        </section>

        <section class="latest-posts">
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
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 