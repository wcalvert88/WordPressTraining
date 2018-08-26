<?php

get_header();
pageBanner(array(
  'title' => 'All Slides',
  'subtitle' => 'Just a fun extra credit excersize.'
));
?>
      <?php 
      
	 	while(have_posts()) {
      the_post();
      ?>
      <div class="hero-slider__slide" style="background-image: url(<?php the_post_thumbnail_url('pagebanner'); ?>);">
      <div class="hero-slider__interior container">
        <div class="hero-slider__overlay">
          <h2 class="headline headline--medium t-center"><?php echo get_the_title(); ?></h2>
          <p class="t-center"><?php echo get_the_excerpt(); ?></p>
          <p class="t-center no-margin"><a href="<?php echo get_the_permalink(); ?>" class="btn btn--blue">Learn more</a></p>
        </div>
      </div>
    </div>
		 <?php } 
		 echo paginate_links();
	  ?>

<?php
get_footer();

?>