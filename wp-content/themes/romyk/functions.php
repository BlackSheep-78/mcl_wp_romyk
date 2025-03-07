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
    

?>
