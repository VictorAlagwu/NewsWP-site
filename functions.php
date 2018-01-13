<?php
	// Bootstrap pagination for index and category pages
if ( ! function_exists( 'b4st_pagination' ) ) {
	function b4st_pagination() {
		global $wp_query;
		$big = 999999999; // This needs to be an unlikely integer
		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => True,
			'prev_text' => __('<i class="fa fa-angle-left"></i> Newer'),
			'next_text' => __('Older <i class="fa fa-angle-right"></i>'),
			'type' => 'list'
		) );
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='page-item active'><a class='page-link' href='#'>", $paginate_links );
    $paginate_links = str_replace( "<li>", "<li class='page-item'>", $paginate_links );
		$paginate_links = str_replace( "<a", "<a class='page-link' ", $paginate_links );
		$paginate_links = str_replace( "</span>", "</a>", $paginate_links );
		$paginate_links = preg_replace( "/\s*page-numbers/", "", $paginate_links );
		// Display the pagination if more than one page is found
		if ( $paginate_links ) {
			echo $paginate_links;
		}
	}
}

/** ====================================================================================
 * Force read more link to all excerpts whether or not it meets the word length criteria 
 * and whether or not it is a custom excerpt
 
==================================================================================== **/        
function excerpt_more_link_all_the_time() {
	// Remove More Link from get_the_excerpt()	
	function more_link() {
		return '';
	}
	add_filter('excerpt_more', 'more_link');
	//Force read more link on all excerpts
	function get_read_more_link() {
		$excerpt = get_the_excerpt();
		return '<p>' . $excerpt . '&nbsp;...&nbsp;<a href="' . get_permalink() . '">Continue&nbsp;to&nbsp;read</a></p>';
	}
	add_filter( 'the_excerpt', 'get_read_more_link' );
	
}
add_action( 'after_setup_theme', 'excerpt_more_link_all_the_time' );
//Enable Custom Menus
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


add_theme_support( 'post-thumbnails' );




/**
 * Enqueue scripts and styles.
 */


function news_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri(). '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri());
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popperJs', get_template_directory_uri() . '/assets/js/popper.js');
	wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . '/assets/js/bootstrap.min.js');

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'news_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

