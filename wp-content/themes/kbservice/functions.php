<?php

function add_theme_special_file($path)
{
    if (file_exists($path))
        include_once($path);
}

function kbservice_widgets_init()
{
    register_sidebar(array(
        'name' => __('Primary Widget Area', 'kbservice'),
        'id' => 'primary-widget-area',
        'description' => __('The primary widget area', 'kbservice'),
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action('widgets_init', 'kbservice_widgets_init');


if (function_exists('add_image_size')) {

}
add_action('admin_init', 'add_theme_admin_scripts');
function add_theme_admin_scripts()
{
    wp_enqueue_script('admin-scripts', get_template_directory_uri() . '/js/admin-scripts.js');
}

add_action('admin_init', 'load_admin_styles');
function load_admin_styles()
{
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/css/admin.css');
}


add_action('after_setup_theme', 'kbservice_setup');
if (!function_exists('kbservice_setup')
):
    function kbservice_setup()
    {
        add_editor_style();
        add_theme_support('post-formats', array('aside', 'gallery'));
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        load_theme_textdomain('kbservice', get_template_directory() . '/languages');
        add_theme_support('custom-background', array(
            'default-color' => 'f1f1f1',));
        $custom_header_support = array(
            'default-image' => '%s/images/headers/path.jpg',
            'width' => 940, 'height' => 198,
            'flex-height' => true,
            'header-text' => false,);
        add_theme_support('custom-header', $custom_header_support);
        if (!function_exists('get_custom_header')) {
            // This is all for compatibility with versions of WordPress prior to 3.4.
            define('HEADER_TEXTCOLOR', '');
            define('NO_HEADER_TEXT', true);
            define('HEADER_IMAGE', $custom_header_support['default-image']);
            define('HEADER_IMAGE_WIDTH', $custom_header_support['width']);
            define('HEADER_IMAGE_HEIGHT', $custom_header_support['height']);
        }
        set_post_thumbnail_size($custom_header_support['width'], $custom_header_support['height'], true);

    }
endif;

function kbservice_page_menu_args($args)
{
    $args['show_home'] = true;
    return $args;
}

add_filter('wp_page_menu_args', 'kbservice_page_menu_args');

function getTwitterStatus($userid)
{
    $url = "http://twitter.com/statuses/user_timeline/$userid.xml?count=1";

    $xml = simplexml_load_file($url) or die("could not connect");

    foreach ($xml->status as $status) {
        $text = $status->text;
    }
    echo $text;
}

function inspired_by_image($size = 'thumbnail')
{
    $attachments =& get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'rand'));
    if (!empty($attachments)) {
        $first_attachment = array_shift($attachments);
    }

    echo wp_get_attachment_image($first_attachment->ID, $size);

}


function pid()
{
    global $wp_query;
    $thePostID = $wp_query->post->ID;

    return $thePostID;
}

?>