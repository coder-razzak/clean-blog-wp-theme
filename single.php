<?php get_header(); ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url(<?php 
      if (has_post_thumbnail()) {
          echo get_the_post_thumbnail_url();
      } else{
        echo get_template_directory_uri().'/img/home-bg.jpg';
      }
    ?>)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <?php
            if (have_posts()) :
              while(have_posts()) : the_post()
        ?>
        <div class="post-preview">
              <?php echo get_the_content(); ?>
            
          <p class="post-meta">Posted by
            <a href="#"><?php the_author(); ?></a>
            on <?php the_time('F j y'); ?></p>
        </div>
        <hr>
        <!-- Pager -->
        <!-- <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div> -->
        <?php endwhile; wp_reset_postdata(); else: ?>
          <p>No Post Found !! <strong>You Don't Have Created Any Post Yet.</strong></p>
        <?php endif; ?>
      </div>
      <div class="col-md-3">
        <div class="sidebar-css">
          
          <?php

            if (is_active_sidebar('primary_sidebar')) : 
              dynamic_sidebar('primary_sidebar');
            else: 
          
          ?>

          <p>You don't have any sidebar yet. Please add Sidebar item.</p>

          <?php endif; ?>
        
        </div>
      </div>
    </div>
  </div>

  <hr>
<?php get_footer(); ?>