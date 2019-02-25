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
                </div>
                <?php endforeach ?>

        </section>

        <section class="latest-posts">
            <div class="container">
                <h2>Inhabitent Journal</h2>
                <ul>
                    <?php
                    $latest_posts = inhabitent_get_latest_posts();
                    foreach ($latest_posts as $post): setup_postdata($post);
                        ?>
                    <li>
                        <div class="post-thumbnail">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium_large');
                            }
                            ?>
                        </div>
                        <div class="post-info">
                            <span class="post-meta">
                                <?php 
                                the_date();
                                ?> /
                                <?php
                                echo comments_number();
                                ?>
                            </span>
                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="black-btn">Read entry</a>
                    </li>
                    <?php endforeach;

                wp_reset_postdata();
                ?>
                </ul>
            </div>
        </section>

        <section class="adventures container">
            <h2>Latest Adventures</h2>
        </section>

    </main><!-- #main -->
</div><!-- #pr imary -->

<?php get_footer(); ?> 