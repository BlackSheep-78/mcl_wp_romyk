<!-- file: footer.php -->

<?php

    $slug   = basename(get_permalink());
    $margin = 'margin_top90';

    if($slug  == 'contact')
    {
        $margin = '';
    }

?>

<div class="copyright_section <?= $margin ?>">
    <div class="container">
        <p class="copyright_text">&copy; <?php echo date("Y"); ?> All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
