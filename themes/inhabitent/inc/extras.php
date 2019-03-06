<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    return $classes;
}
add_filter('body_class', 'inhabitent_body_classes');

function inhabitent_login_logo()
{
    $logo_url = get_template_directory_uri() . '/images/inhabitent-logo-text-dark.svg';
    echo "<style>
	.login h1 a {
		width: 300px;
		height: 53px;
		background-image: url($logo_url);
		background-repeat: no-repeat;
		background-size: 300px 53px;
	}
	.login .button.button-primary {
		background-color: #248A83;
	}
	</style>";
}
add_action('login_head', 'inhabitent_login_logo');

function inhabitent_login_url()
{
    return get_site_url();
}
add_filter('login_headerurl', 'inhabitent_login_url');

function inhabitent_product_archive($query)
{
    if (is_admin() || !$query->is_main_query())
    return;

    if (is_post_type_archive('product')) {
        // Display 16 posts for product post type
        $query->set('posts_per_page', 16);
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');

        return;
    }
}
add_action('pre_get_posts', 'inhabitent_product_archive', 1);

function inhabitent_archive_title($title)
{
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax('product_type') ) {
        $title = single_cat_title("", false);
    }
        return $title;
}
add_filter('get_the_archive_title', 'inhabitent_archive_title'); 
 

