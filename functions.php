<?php
function mit_tema_tilfoej_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mit_tema_tilfoej_styles');

add_action('init', function() {
    add_post_type_support( 'page', 'page-attributes' );
});

/* Tilføj menu funktion */
add_theme_support('menus');

// Menu
register_nav_menus(
    array(
        'Hovedmenu' => 'Hovedmenu location',
        'Mobile-menu' => 'Mobile menu location',
    )
);

/* Læs custom.js */

function mit_theme_scripts() {
    wp_enqueue_script(
        'lige-til-design-binto',
        get_template_directory_uri() . '/js/custom.js',
        array(),
        filemtime(get_template_directory() . '/js/custom.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mit_theme_scripts');

/* Tilføjer featured image til blog post */ 
add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));
