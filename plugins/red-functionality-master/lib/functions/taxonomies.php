<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function product_type_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Products Type', 'Taxonomy General Name', 'Inhabitant' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'Inhabitant' ),
		'menu_name'                  => __( 'Product Type', 'Inhabitant' ),
		'all_items'                  => __( 'All Products Type', 'Inhabitant' ),
		'parent_item'                => __( 'Parent Product Type', 'Inhabitant' ),
		'parent_item_colon'          => __( 'Parent Product Type:', 'Inhabitant' ),
		'new_item_name'              => __( 'Product Type Name', 'Inhabitant' ),
		'add_new_item'               => __( 'Add Product Type', 'Inhabitant' ),
		'edit_item'                  => __( 'Edit Product Type', 'Inhabitant' ),
		'update_item'                => __( 'Update Product Type', 'Inhabitant' ),
		'view_item'                  => __( 'View Product Type', 'Inhabitant' ),
		'separate_items_with_commas' => __( 'Separate Products Type with commas', 'Inhabitant' ),
		'add_or_remove_items'        => __( 'Add or remove Products Type', 'Inhabitant' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'Inhabitant' ),
		'popular_items'              => __( 'Popular Items', 'Inhabitant' ),
		'search_items'               => __( 'Search Product Type', 'Inhabitant' ),
		'not_found'                  => __( 'Not Found', 'Inhabitant' ),
		'no_terms'                   => __( 'No Product Type', 'Inhabitant' ),
		'items_list'                 => __( 'Products Type list', 'Inhabitant' ),
		'items_list_navigation'      => __( 'Products Type list navigation', 'Inhabitant' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'products' ), $args );

}
add_action( 'init', 'product_type_taxonomy', 0 );
