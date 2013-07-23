<?php

          $args = array(
            'post_type' => 'product',
            'orderby' => 'name',
            'order' => 'ASC'
          );

          $query = new WP_Query($args);

?>
<div id="preloader-container">

<div id="container">

  				<?php
          
  					if($query->have_posts()){
  					  while($query->have_posts()){
  					    $query->the_post();


                        $class_name = "product";

                        $types = get_the_terms($post->ID,'type');

                        if($types){
                          foreach($types as $type){
                            $class_name  .= " tx_" . $type->slug;
                          }
                        }

				?>



<div class="widget <?php echo $class_name ?> web homepage">
  <div class="entry-container span4">

   
    <!-- Portfolio Image -->
    <div class="entry-image">
    <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="fancybox">
    	<span class="entry-image-overlay"></span>
    	<?php the_post_thumbnail('medium'); ?>
    </a>
    </div>   


       
    <div class="entry drop-shadow curved ">
    
      <!-- Portfolio Heading -->
      <h5 class="heading">
      <a href="portfolio-single.html">
        <?php echo get_the_title(); ?>
      </a>
      </h5>
      
      <div class="entry-footer">
      <ul>
        <li class="left">گرافیک</li>
        <li class="right no-margin"><div class="icon like"></div> 3</li>
    
      </ul>
      </div>
      <p><?php the_content(); ?></p>
      <div class="stripes"></div>
    </div>      
  </div>
  </div>
  <?php
      }
  }
  ?>
		   		 	
		   		<div class="stripes"></div>
			</div>			
		</div>
	</div>






</div>
</div>


