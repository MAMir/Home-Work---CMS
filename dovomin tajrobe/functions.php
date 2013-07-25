<?php



function custome_theme_init (){

	add_theme_support('post-thumbnails');

	add_theme_support('menus');

	$labels = array(
		'name' => _x('Products', 'post type general name'),
		'singular_name' => _x('Product', 'post type singular name'),
		'add_new' => _x('Add New', 'product'),
		'add_new_item' => __('Add New Product'),
		'edit_item' => __('Edit Product'),
		'new_item' => __('New Product'),
		'view_item' => __('View Product'),
		'search_items' => __('Search Products'),
		'not_found' =>  __('No products found'),
		'not_found_in_trash' => __('No products found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => __('Products')
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url') . '/images/product_icon.png', // 16x16
		'supports' => array('title','editor','thumbnail','excerpt')
	);

	register_post_type ('product',$args);
	// http://codex.wordpress.org/Function_Reference/register_post_type

	register_taxonomy_for_object_type('category', 'product');
	// http://codex.wordpress.org/Taxonomies
	// http://codex.wordpress.org/Function_Reference/register_taxonomy_for_object_type


	register_taxonomy (
	  'types',
	  'Products',
	  array(
	    'labels' => array(
	      'name' => __('Types'),
	      'singular_name' => __('Types'),
	      'menu_name' => __('Type'),
	      'all_items' => __('All Types'),
	      'edit_item' => __('Edit Type'),
	      'view_item' => __('View Type'),
	      'update_item' => __('Update Type'),
	      'add_new_item' => __('Add New Type'),
	      'new_item_name' => __('New Type Name'),
	      'parent_item' => __('Parent Type'),
	      'search_items' => __('Search Types'),
	      'popular_items' => __('Popular Types'),
	      'parent_item_colon' => __('Popular Types :'),
	      'separate_items_with_commas' => __('Separate Types with commas'),
	      'add_or_remove_items' => __('Add or remove Type'),
	      'choose_from_most_used' => __('Choose from the most used Types'),
	      'not_found' => __( 'No Type found.' )
	    ),
	    'public' => true,
	    'show_ui' => true,
	    'show_in_nav_menus' => true,
	    'show_tagcloud' => true,
	    'hierarchical' => true,
	    'query_var' => 'type',
	    'rewrite' => array( 'slug' => 'type' )
	  )
	);



}


add_shortcode('hello','say_hello');

function say_hello($atts){
  extract( shortcode_atts(array(
  	'name' => 'Mohammad Ali'
  		 				 ),
  		$atts
  		   ) 
  );
  return '<h1 style="color:red;text-align:center;">Hello</h1>';
}

add_action('init', 'custome_theme_init'); // add init event



?>
