<!-- file: inc.subscribe-form.php -->
<div class="subscribe_section layout_padding">
    <h2>Subscribe to Our Newsletter</h2>
    <form method="POST" action="">
        <div class="input-group">
            <input type="email" name="subscriber_email" class="form-control" placeholder="Enter your email" required>
            <button type="submit" name="subscribe" class="btn btn-primary">Subscribe</button>
        </div>
    </form>
    
    <?php
    if (isset($_POST['subscribe'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . "subscribers";
        $email = sanitize_email($_POST['subscriber_email']);

        if (is_email($email)) {
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
