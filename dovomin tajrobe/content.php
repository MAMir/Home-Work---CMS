<?php

  $args = array(
    'post_type' => 'page',
    'nopaging' => 'true',
    'orderby' => 'name',
    'order' => 'ASC',
  );

  $query = new WP_Query($args);
 
 ?>

<div id="preloader-container">
<div id="container">
  <?php 
    if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
  ?>
  <div class="widget portfolio web homepage">
    <div class="entry-container span4">
    
      <!-- Portfolio Image -->
        <div class="entry-image" data-narsis="vulvul" data-effect="f" data-theme="gray">
          <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="fancybox">
            <?php the_post_thumbnail('medium'); ?>
          </a>
        </div> 
        
           
        <div class="entry drop-shadow curved ">
        
          <!-- Portfolio Heading -->
          <h5 class="heading">
            <a href="portfolio-single.html">
              <?php the_title(); ?>
            </a>
          </h5>
          
          <div class="entry-footer">
            <ul>
              <li class="left">گرافیک</li>
              <li class="right no-margin"><div class="icon like"></div> 3</li>
        
            </ul>
          </div>
          <p><?php the_excerpt(); ?></p>
            
          <div class="stripes"></div>
      </div>      
    </div>
  </div>
  <?php
      }
    }
  ?>
</div>
</div>