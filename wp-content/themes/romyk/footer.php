<!-- file: footer.php -->

<?php

    $margin = 'margin_top90';

    if (is_page('contact'))
    {
        $margin = '';
    }

    $host = get_template_directory_uri();

?>

<div class="copyright_section <?= $margin ?>">
    <div class="container">
     <p class="copyright_text"><a href=" <?= $host ?> /politique-de-confidentialite">Politique de confidentialité</a> &bull; &copy; <?php echo date("Y"); ?> All Rights Reserved &bull; Design by <a href="https://html.design">Free Html Templates</a></p>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
