<?php
    /* file: index.php */

    get_header(); // Includes the header.php file

    if (is_page('politique-de-confidentialite'))
    {
        echo "<div class='container politique'>";
        echo get_the_content();
        echo "</div>";
    }

    get_footer(); // Includes the footer.php file
?>
telnet smtp.mail.me.com 587