<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
    
/**    
    wp_register_style('booklet_css', get_stylesheet_directory_uri() . '/booklet/jquery.booklet.latest.css');
    wp_enqueue_style('booklet_css');
    wp_register_script('booklet_easing', get_stylesheet_directory_uri() . '/booklet/jquery.easing.1.3.js', array('jquery'),'1.1', true);
    wp_enqueue_script('booklet_easing');
    wp_register_script('booklet', get_stylesheet_directory_uri() . '/booklet/jquery.booklet.latest.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('booklet');
 */
   
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


/****************************************************************************************/


/**
 * Legal Notices Preformatting
 */ 

add_filter( 'the_content', 'legals_the_content_filter', 5 );

function legals_the_content_filter( $content ) {

    if ( in_category( 'Legal Notices' )){
        // Add image to the beginning of each page
        $content = '<pre>' . $content . '</pre>';
}
    // Returns the content.
    return $content;
}


/****************************************************************************************/

/**
 * Featured Thumb caption/credit
 */ 

function get_post_thumbnail_caption() {
	if ( $thumb = get_post_thumbnail_id() )
		return get_post( $thumb )->post_excerpt;
}

function get_post_thumbnail_credit() {
	if ( $thumb = get_post_thumbnail_id() )
		return get_post( $thumb )->post_content;
}

/****************************************************************************************/

/**
 * Admin panel fix for Chrome users
 */ 

function chromefix_inline_css()
{ 
  if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
  {
    wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
  }
}

add_action('admin_enqueue_scripts', 'chromefix_inline_css');

/****************************************************************************************/


/**
 * Displays breaking news on front page
 */
 
function my_home_category( $query ) { if ( $query->is_home() && $query->is_main_query() ) { $query->set( 'cat', '13'); } } 
add_action( 'pre_get_posts', 'my_home_category' );
 
/****************************************************************************************/

/**
 * function to show the footer info, copyright information
 */
 
if ( ! function_exists( 'colormag_footer_copyright' ) ) :
function colormag_footer_copyright() {
   $site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

   $default_footer_value = sprintf( __( 'Copyright &copy; %1$s %2$s. All rights reserved.', 'colormag' ), date( 'Y' ), $site_link );

   $colormag_footer_copyright = '<div class="copyright">'.$default_footer_value.'</div>';
   echo $colormag_footer_copyright;
}
endif;

/**************************************************************************************/

/**
 * Breaking News/Latest Posts ticker section in the header
 */
 
if ( ! function_exists( 'colormag_breaking_news' ) ) :
function colormag_breaking_news() {
   $get_featured_posts = new WP_Query( array(
      'posts_per_page'        => 5,
      'post_type'             => 'post',
      'tag'                   => 'latest',      
      'ignore_sticky_posts'   => true
   ) );
   $ticktick=get_posts('tag=latest');
   if ($ticktick) {
?>
   <div class="breaking-news">
      <strong class="breaking-news-latest"><?php _e( 'Latest:', 'colormag' ); ?></strong>
      <ul class="newsticker">
      <?php while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post(); ?>
         <li>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
         </li>
      <?php endwhile; ?>
      </ul>
   </div>
   <?php } ?>
   <?php
   // Reset Post Data
   wp_reset_query();
}
endif;

/**************************************************************************************/





















?>