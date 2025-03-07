<?php
    /**
     * 
     * Template Name: Home
     * This template is for the home page body content.
     * file: page-home.php
     * 
     */

    get_header();
?>

<main>

    <?php

        include __DIR__."/inc.page-home.php";
        include __DIR__."/inc.page-about.php";
        include __DIR__."/inc.page-icecream.php";
        include __DIR__."/inc.page-services.php";
        include __DIR__."/inc.page-blog.php";

/*
get_template_part('page', 'about');
get_template_part('page', 'icecream');
get_template_part('page', 'services');
get_template_part('page', 'blog');
*/

    // The Loop to display the content of the page
    /*
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        <?php
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    */

    get_footer();
?>

</main>

