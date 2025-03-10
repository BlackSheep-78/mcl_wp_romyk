<!-- banner section start -->
<!-- file: inc.page-home.php -->
<div class="banner_section layout_padding">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 4, // Fetch latest 4 posts
                    'orderby'        => 'date',
                    'order'          => 'ASC'
                );
                $query = new WP_Query($args);
                $index = 0;

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $index; ?>" class="<?= ($index == 0) ? 'active' : ''; ?>">
                        <?= sprintf("%02d", $index + 1); ?>
                    </li>
                <?php
                        $index++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ol>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                <?php
                $query = new WP_Query($args);
                $index = 0;

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/images/default-image.jpg'; // Fallback image
                ?>
                        <div class="carousel-item <?= ($index == 0) ? 'active' : ''; ?>">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h1 class="banner_taital"><?php the_title(); ?></h1>
                                    <p class="banner_text"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                                    <div class="started_text">
                                        <a href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner_img">
                                        <img src="<?= esc_url($featured_image); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                        $index++;
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">No articles found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- banner section end -->
