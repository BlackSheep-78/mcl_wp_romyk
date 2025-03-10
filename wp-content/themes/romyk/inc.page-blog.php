      <!-- blog section start -->
      <!-- file: inc.page-blog.php -->
      <div class="testimonial_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="testimonial_taital">Testimonial</h1>
               </div>
            </div>
            <div class="testimonial_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="testimonial_box">
                        <div id="main_slider" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <?php
                              $args = array(
                                  'post_type'      => 'testimonials',
                                  'posts_per_page' => 5,  // Display latest 5 testimonials
                                  'orderby'        => 'date',
                                  'order'          => 'DESC'
                              );
                              $query = new WP_Query($args);
                              $active = 'active';

                              if ($query->have_posts()) :
                                  while ($query->have_posts()) : $query->the_post();
                                      $testimonial_text = get_the_content();
                                      $person_name = get_field('person_name'); // Fetch name from ACF
                                      $person_photo = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?: get_template_directory_uri() . '/images/default-avatar.png'; // Default image
                              ?>
                                      <div class="carousel-item <?= $active; ?>">
                                         <p class="testimonial_text"><?= esc_html($testimonial_text); ?></p>
                                         <h4 class="client_name"><?= esc_html($person_name); ?></h4>
                                         <div class="client_img"><img src="<?= esc_url($person_photo); ?>" alt="<?= esc_attr($person_name); ?>"></div>
                                      </div>
                              <?php
                                      $active = ''; // Remove "active" after first item
                                  endwhile;
                                  wp_reset_postdata();
                              else :
                                  echo '<p class="text-center">No testimonials available.</p>';
                              endif;
                              ?>
                           </div>
                           <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                           <i class="fa fa-angle-left"></i>
                           </a>
                           <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                           <i class="fa fa-angle-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
