<?php 

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_custom_init' );
/* Here's how to create your customized labels */
function my_custom_init() {
	$labels = array(
	'name' => _x( 'Team', 'post type general name' ),
        'singular_name' => _x( 'Team', 'post type singular name' ),
        'add_new' => _x( 'Add New', 'book' ),
        'add_new_item' => __( 'Add New member' ),
        'edit_item' => __( 'Edit member' ),
        'new_item' => __( 'New member' ),
        'view_item' => __( 'See member' ),
        'search_items' => __( 'Search team member' ),
        'not_found' =>  __( 'Team member not found' ),
        'not_found_in_trash' => __( 'Team member not found in trash' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'has_archive' => 'custom_post_type',
        'supports' => array( 'title', 'editor', 'thumbnail' )
    );
 
    register_post_type( 'team', $args ); /* Registramos y a funcionar */

} 

add_action( 'init', 'create_book_taxonomies_team', 0 );

//CASE STUDIES
//CASE STUDIES
//CASE STUDIES

add_action( 'init', 'my_custom_init_cases' );

function my_custom_init_cases() {
    $labels = array(
        'name' => _x( 'Case Studies', 'post type general name' ),
        'singular_name' => _x( 'Case Studies', 'post type singular name' ),
        'add_new' => _x( 'Add New', 'book' ),
        'add_new_item' => __( 'Add New' ),
        'edit_item' => __( 'Edit Case' ),
        'new_item' => __( 'New Case Studies' ),
        'view_item' => __( 'See Case Studies' ),
        'search_items' => __( 'Search Case Studies' ),
        'not_found' =>  __( 'Case Studies not found in trash' ),
        'not_found_in_trash' => __( 'Case Studies not found in trash' ),
        'parent_item_colon' => ''
    );
    
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array('post_tag'),
        'has_archive' => 'custom_post_type',
        'supports' => array( 'title', 'editor', 'thumbnail' )
    );
 
    register_post_type( 'case', $args ); /* Registramos y a funcionar */
}