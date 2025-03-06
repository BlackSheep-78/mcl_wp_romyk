<?php
get_header(); // Includes the header.php file
?>

<main>
    <?php
    // The Loop to display the content of the page
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
    ?>
</main>

<?php
get_footer(); // Includes the footer.php file
?>
