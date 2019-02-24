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

function inhabitent_search_form($search_form)
{
    $search_form = '<form role="search" method="get" class="search-form" action="' . home_url('/') . '" >
        <fieldset>
            <a href="#" class="search-toggle" aria-hidden="true">
                <i class="fa fa-search"></i>
            </a>
            <label>
                <input type="search" class="search-field" placeholder="Type and hit enter..."  value name="s" title="Search for:" />
            </label>
            <input type="submit" id="search-submit" class="screen-reader-text" value="Search" />
        </fieldset>
    </form>';

    return $search_form;
}
add_filter('get_search_form', 'inhabitent_search_form');
