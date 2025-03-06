<footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        <a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a>
    </footer>

    <?php wp_footer(); // This loads scripts before closing the body tag ?>
</body>
</html>
