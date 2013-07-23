<?php

  $args = array(
    'post_type' => 'page',
    'nopaging' => 'true',
    'orderby' => 'name',
    'order' => 'ASC',
  );

  $query = new WP_Query($args);

  if($query->have_posts()){
    while($query->have_posts()){
      the_post_thumbnail('medium');
      echo '<h1>' . get_the_title() . '</h1>';
      $query->the_post();
      the_content();
      the_excerpt();
      the_category();
      the_tags();
    }
  }

?>
