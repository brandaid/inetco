<?php 

add_theme_support('post-thumbnails');

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'brand', 440, 56, false );
    add_image_size( 'blue-image', 1300, 433, true );
    add_image_size( 'slider', 519, 446, false );
    add_image_size( 'staff', 450, 309, true );
    add_image_size( 'staff-tn', 285, 249, true );
    add_image_size( 'big-image', 850, 535, true );
    add_image_size( 'medium-image', 850, 400, true );
    add_image_size( 'top-blog', 1300, 361, true );
    add_image_size( 'post', 950, 400, true );
    add_image_size( 'case-studies', 450, 450, true );
    add_image_size( 'custom-template', 650, 360, true );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
		'brand' => __('Brand Logo'),
	    'blue-image' => __('Blue image'),
	    'slider' => __('Slider'),
	    'staff' => __('Staff'),
	    'staff-tn' => __('Staff tn'),
	    'big-image' => __('Big image'),
	    'medium-image' => __('Medium image'),
	    'top-blog' => __('Top blog'),
	    'post' => __('Post'),
	    'case-studies' => __('Case studies'),
	    'custom-template' => __('Custom template'),
	) );
}


// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

?>