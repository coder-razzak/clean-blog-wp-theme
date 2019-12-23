<?php get_header(); ?>

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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if (have_posts()) :
					while (have_posts()) : the_post();
						the_content();
			?>
			<p>Nothings to show.</p>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>