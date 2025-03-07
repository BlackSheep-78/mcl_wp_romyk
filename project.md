- Wordpress Project

- Data
    - theme name : romyk

- Goals (we'll had an 'x' if the goal is done) 
    - Create the following pages :
        - about
        - blog
        - contact
            - checkboxes to offer the company's various services
            - checkbox to validate RGBD
            - The received emails must be stored in the database
            - link to the privacy policy in the footer of the site
        - icecream
        - index
        - services
    -  Use of ACF (Advanced Custom Fields).

- Step by step How To

    - x Create GIT repo
    - x Add .gitignore file
    - x Add Wordpress source code

    - x Create a Theme
        - x Create a new folder for the theme (e.g., wp-content/themes/my-theme)
        - x Create files
            - x style.css
            - x index.php
            - x functions.php
            - x header.php
            - x footer.php
            - x page.php

    - X Activate the theme

    - x Add Pages - go to Pages > Add New
        - x About
        - x Blog
        - x Contact (including checkboxes for services and RGBD validation)
        - x Icecream
        - x Index (the homepage, if not using index.php as the front page)
        - x Services
    
    - x Install the ACF plugin from the WordPress plugin repository or via Composer.
        - x Activate ACF

    - x Add header.php & footer.php to index.php
    - x Make sure your page.php includes the_content() inside the WordPress Loop
    - x Enable Pretty Permalinks - Settings > Permalinks

    - x Add bootstrap

    - x Create the menu (header)
        - x Register the Menu in functions.php
        - x Add menu elements in Wordpress (Appearance > Menus) if needed
        - x Register menu in Wordpress
        - x Add class Bootstrap_NavWalker , file : /inc/class-bootstrap-navwalker.php
        - x If menu not showing , go to Appearance > Menus and tick "Primary menu"

    - x Create the footer

    - Creating page contents using templates ex: page-{slug}.php 
        - Home
        - About
        - Icecream
        - Services
        - x Blog
            - Load testimonials dynamically from database
        - x Contact Us
            - Make sure fields are working
            - Create fields with extension "Contact Form 7"
            - Manage email with extension "Flamingo"
            