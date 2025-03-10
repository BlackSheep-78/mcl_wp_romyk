<?php

    /* file: functions.php */

    $host = get_template_directory_uri();

    require_once get_template_directory() . '/inc/class-bootstrap-navwalker.php';

    function register_my_menus() {
        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu' ),
            )
        );
    }
    add_action( 'after_setup_theme', 'register_my_menus' );
    

    function romyk_enqueue_styles() {
        // Bootstrap CSS
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        
        // Main Stylesheet
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        
        // Responsive Styles
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
    
        // Custom Scrollbar Styles
        wp_enqueue_style( 'custom-scrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css' );
    
        // Font Awesome
        wp_enqueue_style( 'font-awesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
        
        // Google Fonts (Roboto)
        wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap' );
    
        // Bootstrap JS and jQuery
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '', true );
        wp_enqueue_script( 'mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array( 'jquery' ), '', true );
    }
    
    function romyk_enqueue_scripts() {
        // Enqueue Bootstrap CSS
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
        
        // Enqueue Bootstrap JS
        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    }

    add_action( 'wp_enqueue_scripts', 'romyk_enqueue_styles' );

    function romyk_theme_setup() {
        add_theme_support('post-thumbnails'); // Enable featured images for posts
    }
    add_action('after_setup_theme', 'romyk_theme_setup');

// Register Custom Post Type: Testimonials
function romyk_register_testimonials() {
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'new_item'           => 'New Testimonial',
        'view_item'          => 'View Testimonial',
        'search_items'       => 'Search Testimonials',
        'not_found'          => 'No testimonials found',
        'not_found_in_trash' => 'No testimonials found in trash'
    );

    $args = array(
        'label'             => 'Testimonials',
        'labels'            => $labels,
        'public'            => true,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-testimonial',
        'supports'          => array('title', 'editor', 'thumbnail'),
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'testimonials')
    );

    register_post_type('testimonials', $args);
}
add_action('init', 'romyk_register_testimonials');

function romyk_create_subscribers_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "subscribers";

    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id INT(11) NOT NULL AUTO_INCREMENT,
            email VARCHAR(255) NOT NULL UNIQUE,
            date_subscribed DATETIME DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
add_action('after_setup_theme', 'romyk_create_subscribers_table');
    
add_filter('wpcf7_load_js', '__return_true');
add_filter('wpcf7_load_css', '__return_true');

?>
