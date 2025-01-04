<?php
function hide_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'hide_admin_bar');

function theme_enqueue_styles_scripts()
{
    // STYLES
    wp_enqueue_style('main', get_css('main.min.css'));

    // SCRIPTS
    wp_enqueue_script('main', get_js('main.js'), array('jquery'), '1.0.0', true);

    // PARAMETERS
    wp_localize_script(
        'main',
        'main_params',
        array(
            'ajax_url' => admin_url('admin-ajax.php')
        )
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function get_css($path_css)
{
    return get_template_directory_uri() . '/assets/css/' . $path_css;
}

function get_js($path_js)
{
    return get_template_directory_uri() . '/assets/js/' . $path_js;
}

function get_lib($path_lib)
{
    return get_template_directory_uri() . '/assets/libs/' . $path_lib;
}

function get_image($path_image)
{
    return get_template_directory_uri() . '/assets/images/' . $path_image;
}

function get_icon($path_icon)
{
    return get_template_directory_uri() . '/assets/images/icons/' . $path_icon;
}
