<?php

add_action( 'after_setup_theme', 'colfax_theme_setup' );

function colfax_theme_setup() {
	global $content_width;

	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
		$content_width = 600;

	/* Add theme support for automatic feed links. */
	add_theme_support( 'automatic-feed-links' );

	/* Add theme support for post thumbnails (featured images). */
	add_theme_support( 'post-thumbnails' );

	/* Add theme support for custom backgrounds. */
	add_custom_background();

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	/* Add your nav menus function to the 'init' action hook. */
	add_action( 'init', 'colfax_register_menus' );

	/* Add your sidebars function to the 'widgets_init' action hook. */
	add_action( 'widgets_init', 'register_sidebars' );

	/* Load JavaScript files on the 'wp_enqueue_scripts' action hook. */
	add_action( 'wp_enqueue_scripts', 'colfax_load_scripts' );
}

function colfax_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'navbar_color' , array(
		'default' => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'navbar_color_picker',
		array(
			'label'      => __( 'Navigation Bar Color', 'colfax' ),
			'section'    => 'colors',
			'settings'   => 'navbar_color',
			'priority'   => 1
		)
	));
}

add_action( 'customize_register', 'colfax_customize_register' );

function colfax_register_menus() {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'colfax' ),
		'mobile' => __( 'Mobile Navigation', 'colfax' ),
	));
}

function colfax_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Header Date', 'colfax' ),
        'id' => 'header-date',
        'description' => __( 'The date block below the logo.', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar( array(
        'name' => __( 'Page Sidebar', 'colfax' ),
        'id' => 'page-sidebar',
        'description' => __( 'The default sidebar that appears on pages.', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar( array(
        'name' => __( 'Volunteer Sidebar', 'colfax' ),
        'id' => 'volunteer-sidebar',
        'description' => __( 'The sidebar that appears on volunteer pages.', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar( array(
        'name' => __( 'Register Link', 'colfax' ),
        'id' => 'register-link',
        'description' => __( 'The registration link in the header.', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar( array(
        'name' => __( 'Promo Header', 'colfax' ),
        'id' => 'promo-header',
        'description' => __( 'The header space above the promo image.', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar( array(
        'name' => __( 'Homepage Counter', 'colfax' ),
        'id' => 'home-counter',
        'description' => __( 'The space below the homepage slider.', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar( array(
        'name' => __( 'Email Signup Form', 'colfax' ),
        'id' => 'signup-form',
        'description' => __( 'The newsletter signup form.', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar( array(
        'name' => __( 'Footer Column 1', 'colfax' ),
        'id' => 'footer-1',
        'description' => __( '', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar( array(
        'name' => __( 'Footer Column 2', 'colfax' ),
        'id' => 'footer-2',
        'description' => __( '', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar( array(
        'name' => __( 'Footer Column 3', 'colfax' ),
        'id' => 'footer-3',
        'description' => __( '', 'colfax' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

}

add_action( 'widgets_init', 'colfax_widgets_init' );

// CUSTOMIZE EXCERPT LENGTH ====================
function custom_excerpt_length( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// CUSTOMIZE EXCERPT READ MORE ====================
function custom_excerpt_more($more) {
    $more = '...';
    return $more;
}
add_filter('excerpt_more', 'custom_excerpt_more');

// ADD STYLE BUTTONS TO TINYMCE EDITOR ====================
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// CUSTOMIZE STYLE OPTIONS FOR TINYMCE EDITOR ====================
function my_mce_before_init_insert_formats( $init_array ) {
	$style_formats = array(
		array(
			'title' => 'Button',
			'selector' => 'a',
			'classes' => 'button'
		), array(
			'title' => 'Sidebar Feature Link',
			'selector' => 'a',
			'classes' => 'highlight'
		), array(
			'title' => 'Disclaimer',
			'selector' => 'p',
			'classes' => 'disclaimer'
		), array(
			'title' => 'Full-Width Image',
			'selector' => 'img',
			'classes' => 'full-width'
		)
	);
	$init_array['style_formats'] = json_encode( $style_formats );
	return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

function colfax_load_scripts() {
	/* Enqueue custom Javascript here using wp_enqueue_script(). */
}

function add_first_and_last($items) {
    // first class on parent most level
    $items[1]->classes[] = 'first';
    // separate parents and children
    $parents = $children = array();
    foreach($items as $k => $item){
        if($item->menu_item_parent == '0'){
            $parents[] = $k;
        } else {
            $children[$item->menu_item_parent] = $k;
        }
    }
    // last class on parent most level
    $last = end(array_keys($parents));
    foreach ($parents as $k => $parent) {
        if ($k == $last) {
            $items[$parent]->classes[] = 'last';
        }
    }
    // last class on children levels
    foreach($children as $child){
        $items[$child]->classes[] = 'last';
    }
    // first class on children levels
    $r_items = array_reverse($items, true);
    foreach($r_items as $k => $item){
        if($item->menu_item_parent !== '0'){
            $children[$item->menu_item_parent] = $k;
        }
    }
    foreach($children as $child){
        $items[$child]->classes[] = 'first';
    }
    return $items;
}

function is_child($pageID) {
	global $post;
	if( is_page() && ($post->post_parent==$pageID) ) {
               return true;
	} else {
               return false;
	}
}

add_filter('wp_nav_menu_objects', 'add_first_and_last');

// Add Charity Partners Post Type
function charity_partners_init() {
	$args = array(
		'label' => 'Charity Partners',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'charity-partners'),
		'query_var' => true,
		'menu_icon' => 'dashicons-groups',
		'taxonomies' => array('charity_partners_category'),
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'revisions',
			'thumbnail',
			'page-attributes',)
		);
	register_post_type( 'charity-partners', $args );
}
add_action( 'init', 'charity_partners_init' );

// Add Taxonomy for Charity Partners Post Type
function charity_partners_category_init() {
	$labels = array(
		'name'              => _x( 'Charity Partner Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Charity Partner Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Charity Partner Categories' ),
		'all_items'         => __( 'All Charity Partner Categories' ),
		'parent_item'       => __( 'Parent Charity Partner Category' ),
		'parent_item_colon' => __( 'Parent Charity Partner Category:' ),
		'edit_item'         => __( 'Edit Charity Partner Category' ),
		'update_item'       => __( 'Update Charity Partner Category' ),
		'add_new_item'      => __( 'Add New Charity Partner Category' ),
		'new_item_name'     => __( 'New Charity Partner Category' ),
		'menu_name'         => __( 'Charity Partner Categories' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'charity_partners_category', 'charity-partners', $args );
}
add_action( 'init', 'charity_partners_category_init', 0 );

// Add Training Tips Post Type
function training_tips_init() {
	$args = array(
		'label' => 'Training Tips',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'training-tips'),
		'query_var' => true,
		'menu_icon' => 'dashicons-universal-access',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'revisions',
			'thumbnail',
			'page-attributes',)
		);
	register_post_type( 'training-tips', $args );
}
add_action( 'init', 'training_tips_init' );

// Add Training Tips Post Type
function kp_tips_init() {
	$args = array(
		'label' => 'Kaiser Tips',
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'kp-tips'),
		'query_var' => true,
		'menu_icon' => 'dashicons-clipboard',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'revisions',
			'thumbnail',
			'page-attributes',)
		);
	register_post_type( 'kp-tips', $args );
}
add_action( 'init', 'kp_tips_init' );


// ADD Support for Editor Style
add_editor_style('editor-style.css');


?>
