 <?php if (have_posts()) :
        while (have_posts()) : the_post();
        // the_content();
        endwhile;
        else :
          echo '<p>No content found</p>';
                endif; 
                ?>

 
 
 <!-- Featured Tours Section -->
      <section id="Featured-tours">
      <div class="container" id="toursFeatured">
      <div class="col-lg-12">
          <h1 class="tours">Featured Tours</h1> 
          <p id="feature">Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.</p>
 <div class="spacer"></div>
      </div>
  <?php
                // Featured posts
               $featuredPosts = new WP_Query('cat=3&posts_per_page=4');
                if ($featuredPosts->have_posts()) :
                    ?>
                    <div class="row">
                    <?php
                    while ($featuredPosts->have_posts()) :$featuredPosts->the_post();
        ?>
            <div class="col-md-3">
                        <!-- post-thumbnail     -->
                        <div class="square-thumbnail">
                  <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('featured-post');
                    } else { ?>

                      <img src="<?php echo get_template_directory_uri(); ?>">

                    <?php } ?>
                                    </div>
                                    
                                    <!-- /post-thumbnail -->
                <h2 class="tour-head"><?php the_title(); ?></h2>
                <h6 class="tour-desc"><?php the_excerpt(); ?></h6>
               <center><a href="#" class="btn btn-pink"><i class="fa fa-paper-plane-o"></i> &nbsp;Read More</a></center>
            </div>
        
           
            <?php endwhile;
    
                    else :
                        echo '<p>No content found</p>';
    
                    endif;
                    wp_reset_postdata() ;
         ?>
  </div>
      
      </div>
      </section>
   <!-- End Featured Tours Section -->
