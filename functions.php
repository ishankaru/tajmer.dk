<?php 

	// Clean Up WordPress Headers
	remove_action( 'wp_head', 'feed_links' );
	remove_action( 'wp_head', 'rsd_link');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'index_rel_link');
	remove_action( 'wp_head', 'parent_post_rel_link');
	remove_action( 'wp_head', 'start_post_rel_link');
	remove_action( 'wp_head', 'adjacent_posts_rel_link');
	remove_action( 'wp_head', 'wp_generator');
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	
		
	// Cleans WordPress Backend
	add_action('admin_head', 'hidemenus');
	function hidemenus() {
	    global $current_user; get_currentuserinfo();
	    if($current_user->user_login != 'mikkeltschentscher') { ?>
	        <style>
	           #menu-plugins, 
	           #menu-tools,
	           #menu-settings, 
	           #toplevel_page_wppusher,
	           #toplevel_page_wpseo_dashboard,
	           #toplevel_page_edit-post_type-acf,
	           #toplevel_page_w3tc_dashboard {display:none!important;}
	        </style>
	    <?php }
	}
	
	// Removes WordPress versions from RSS etc.
	function remove_wp_versino() {return '';}
	add_filter('the_generator', 'remove_wp_versino');

	// Add theme support for menus
	add_theme_support( 'menus' ); 
	function wp_nav_menu_attributes_filter($var) {
		return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
	}
	add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
	add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
	add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);

	// Removes WordPress SEO By Yoast Comments for more streamlined code
	add_action('get_header', 'rmyoast_ob_start');
	add_action('wp_head', 'rmyoast_ob_end_flush', 100);

	function rmyoast_ob_start() {ob_start('remove_yoast');}
	function rmyoast_ob_end_flush() {ob_end_flush();}
	function remove_yoast($output) { if (defined('WPSEO_VERSION')) {
	        $output = str_ireplace('<!-- This site is optimized with the Yoast SEO plugin v' . WPSEO_VERSION . ' - https://yoast.com/wordpress/plugins/seo/ -->', '', $output);
	        $output = str_ireplace('<!-- / Yoast SEO plugin. -->', '', $output); } 
	return $output;}

	// Moves Gravity Forms to the footer
	add_filter("gform_init_scripts_footer", "init_scripts");
	function init_scripts() {
		return true;
	}
	// Gravity Forms remove scripts (Disables AJAX)
	add_action("gform_enqueue_scripts", "deregister_scripts");
	function deregister_scripts(){
		wp_deregister_script("jquery"); 
	}
	// Removes Gravity Forms goonfirmation anchor
	add_filter( 'gform_confirmation_anchor', '__return_false' );
	
	// Custom Admin link for all settings
	function all_settings_link() {add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');}
	add_action('admin_menu', 'all_settings_link');

	/// Set the post revisions unless the constant was set in wp-config.php
	if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);

	// Callback function to insert 'styleselect' into the $buttons array
	function my_mce_buttons_2( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
		return $buttons;
	}
	
	// Register our callback to the appropriate filter
	add_filter('mce_buttons_2', 'my_mce_buttons_2');

	// Callback function to filter the MCE settings
	function my_mce_before_init_insert_formats( $init_array ) {  
		// Define the style_formats array
		$style_formats = array(  
			// Each array child is a format with it's own settings
			array(  
				'title' => '.lead',  
				'block' => 'div',  
				'classes' => 'lead',
				'wrapper' => true,			
			),
		);  
		// Insert the array, JSON ENCODED, into 'style_formats'
		$init_array['style_formats'] = json_encode( $style_formats );  
		return $init_array;  
	} 
	
	// Attach callback to 'tiny_mce_before_init' 
	add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

	// Add support for Bootstrap 3 in WordPress comments
	add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
	function bootstrap3_comment_form_fields( $fields ) {
	    $commenter = wp_get_current_commenter();
	    $req      = get_option( 'require_name_email' );
	    $aria_req = ( $req ? " aria-required='true'" : '' );
	    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
	    $fields   =  array(
	        'author' => '<div class="form-group comment-form-author required"><input required class="form-control" id="author" name="author" type="text" placeholder="Dit navn" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
	        'email'  => '<div class="form-group comment-form-email required"><input required class="form-control" id="email" placeholder="Din e-mail (bliver ikke vist)" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
	        'url'    => '<div class="form-group comment-form-url"><input class="form-control" id="url" placeholder="Evt. Website" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
	    );
	    
	    return $fields;
	}
	// Add support for Bootstrap 3 in WordPress comments
	add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
	function bootstrap3_comment_form( $args ) {
	    $args['comment_field'] = '<div class="form-group comment-form-comment required">
	            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true" required placeholder="Skriv din kommentar"></textarea>
	        </div>';
	    return $args;
	}
	// Add support for Bootstrap 3 in WordPress comments
	add_action('comment_form', 'bootstrap3_comment_button' );
	function bootstrap3_comment_button() {
	    echo '<button class="btn btn-lg btn-default" type="submit">Send kommentar</button>';
	} 

	// Add element class for previous/next post links
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');
	function posts_link_attributes() {
	    return 'class="btn btn-default"';
	}
	
	// Theme support for HTML5 searchform
	add_theme_support( 'html5', array( 'search-form' ) );

	// Custom excerpt length
	function custom_excerpt_length( $length ) {
		return 15;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	
	// Remove p tags from images
	function filter_ptags_on_images($content){
	   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
	add_filter('the_content', 'filter_ptags_on_images');
	
	// Remove height and width
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}
	

// Our custom post type function
	function create_posttype() {
					
		register_post_type( 'artists',
		// custom post type options
			array(
				'labels' => array(
					'name' => __( 'Artists' ),
					'singular_name' => __( 'Artist' ),
					'parent_item_colon' => ''
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'artister'),
				'hierarchical' => true,
				'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'comments'),
			)
		);

		register_post_type( 'team',
		// custom post type options
			array(
				'labels' => array(
					'name' => __( 'Team' ),
					'singular_name' => __( 'Teammember' ),
					'parent_item_colon' => ''
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'medarbejdere'),
				'hierarchical' => true,
				'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'comments'),
			)
		);
		
		register_post_type( 'Shows',
		// custom post type options
			array(
				'labels' => array(
					'name' => __( 'Shows' ),
					'singular_name' => __( 'Show' ),
					'parent_item_colon' => ''
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'shows'),
				'hierarchical' => true,
				'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'comments'),
			)
		);

		register_post_type( 'On Demand',
		// custom post type options
			array(
				'labels' => array(
					'name' => __( 'On Demand' ),
					'singular_name' => __( 'Product' ),
					'parent_item_colon' => ''
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'ondemand'),
				'hierarchical' => true,
				'supports' => array('title', 'editor', 'author', 'page-attributes', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'comments'),
			)
		);

	}	
	// Hooking up our function to theme setup
	add_action( 'init', 'create_posttype' );



	// hook into the init action and call create_book_taxonomies when it fires
	add_action( 'init', 'create_book_taxonomies', 0 );

	// create two taxonomies, genres and writers for the post type "book"
	function create_book_taxonomies() {
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Types', 'taxonomy general name' ),
			'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Type' ),
			'all_items'         => __( 'All Types' ),
			'parent_item'       => __( 'Parent Type' ),
			'parent_item_colon' => __( 'Parent Type:' ),
			'edit_item'         => __( 'Edit Type' ),
			'update_item'       => __( 'Update Type' ),
			'add_new_item'      => __( 'Add New Type' ),
			'new_item_name'     => __( 'New Type Name' ),
			'menu_name'         => __( 'Type' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'kategorier' ),
		);

		register_taxonomy( 'type', array( 'artists' ), $args );
	}



// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');

add_action( 'admin_menu', 'remove_admin_menus' );
add_action( 'wp_before_admin_bar_render', 'remove_toolbar_menus' );
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );

function remove_admin_menus() {
    remove_menu_page( 'edit.php' );
}

function remove_toolbar_menus() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'new-post' );
}

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
}


function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('artists'));
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');

?>