<?php

	add_theme_support('menus');

  add_theme_support('post-thumbnails');
  
  
  
  
  
  function product_init (){

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
		'menu_name' => 'Products'
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
}

?>
