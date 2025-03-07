<!-- file: header.php -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); // This will load necessary scripts and styles ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- <h1><?php bloginfo('name'); ?></h1> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav ms-auto',
                        'fallback_cb'    => '__return_false',
                        'depth'          => 2,
                        'walker'         => new WP_Bootstrap_Navwalker(), // Optional for dropdowns
                    ));
                    ?>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <div class="login_bt"><a href="#">Login <span style="color: #222222;"><i class="fa fa-user" aria-hidden="true"></i></span></a></div>
                    <div class="fa fa-search form-control-feedback"></div>
                </form>
            </div>
        </nav>
    </header>
