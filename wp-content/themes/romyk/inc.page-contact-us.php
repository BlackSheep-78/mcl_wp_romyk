<!-- contact section start -->
<!-- file: inc.page-contact-us.php -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <!-- Left Column: Contact Form -->
            <div class="col-md-4">
                <div class="contact_main">
                    <h1 class="contact_taital">Contact Us</h1>
                    
                    <!-- Contact Form (Using Contact Form 7) -->
                    <div class="form-group">
                        <?php echo do_shortcode('[contact-form-7 id="5e93c1e" title="Formulaire de contact 1"]'); ?>
                    </div>
                </div>
            </div>

            <!-- Right Column: Location, Newsletter & Social Media -->
            <div class="col-md-8">
                <div class="location_text">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="padding_left_10 active"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                Making this the first true
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                Call : +01 1234567890
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                Email : demo@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Subscription Form -->
                <div class="mail_main">
                    <h3 class="newsletter_text">Newsletter</h3>
                    <form method="POST" action="">
                        <div class="form-group">
                            <input type="email" class="update_mail form-control" placeholder="Enter Your Email" name="subscriber_email" required>
                        </div>
                        <div class="subscribe_bt">
                            <button type="submit" name="subscribe" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subscribe'])) {
                        global $wpdb;
                        $table_name = $wpdb->prefix . "subscribers";
                        $email = sanitize_email($_POST['subscriber_email']);

                        if (!empty($email) && is_email($email)) {
                            $exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE email = %s", $email));

                            if ($exists > 0) {
                                echo '<p class="text-danger mt-2">You are already subscribed!</p>';
                            } else {
                                $wpdb->insert($table_name, array('email' => $email, 'date_subscribed' => current_time('mysql')));
                                echo '<p class="text-success mt-2">Thank you for subscribing!</p>';
                            }
                        } else {
                            echo '<p class="text-danger mt-2">Invalid email address!</p>';
                        }
                    }
                    ?>
                </div>

                <!-- Social Icons -->
                <div class="footer_social_icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
