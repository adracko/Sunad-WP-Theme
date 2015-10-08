<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<div id="secondary">

<?php // if there's a thumbnail
$thumb = get_post_meta($post->ID, 'featured_gallery', $single = true);

if($thumb !== '' and is_singular( post )) { 
echo do_shortcode($thumb);
 } // end if statement

// if there's not a gallery
else if ( has_post_thumbnail() and is_singular( post ) ) { 
$featurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
      <div class="featured-image">
      <figure>
      <?php if (get_theme_mod('colormag_featured_image_popup', 0) == 1) { ?>
         <a href="<?php echo $image_popup_url; ?>" class="image-popup"><?php the_post_thumbnail( 'colormag-featured-image' ); ?></a>
      <?php } else { ?>
         <a href="<?php echo $featurl; ?>"><?php the_post_thumbnail( 'colormag-featured-image' ); ?></a>
      <?php } ?>
      <div class="p-credit"><?php echo get_post_thumbnail_credit(); ?></div>
      <figcaption class="flex-caption wp-caption-text"><?php echo get_post_thumbnail_caption(); ?></figcaption>
      </figure>
      </div>
   <?php } ?>

   
	<?php do_action( 'colormag_before_sidebar' ); ?>
		<?php
			if( is_page_template( 'page-templates/contact.php' ) ) {
				$sidebar = 'colormag_contact_page_sidebar';
			}
			else {
				$sidebar = 'colormag_right_sidebar';
			}
		?>

		<?php if ( ! dynamic_sidebar( $sidebar ) ) :
			if ( $sidebar == 'colormag_contact_page_sidebar' ) {
            $sidebar_display = __('Contact Page', 'colormag');
         } else {
            $sidebar_display = __('Right', 'colormag');
         }
         the_widget( 'WP_Widget_Text',
            array(
               'title'  => __( 'Example Widget', 'colormag' ),
               'text'   => sprintf( __( 'This is an example widget to show how the %s Sidebar looks by default. You can add custom widgets from the %swidgets screen%s in the admin. If custom widgets is added than this will be replaced by those widgets.', 'colormag' ), $sidebar_display, current_user_can( 'edit_theme_options' ) ? '<a href="' . admin_url( 'widgets.php' ) . '">' : '', current_user_can( 'edit_theme_options' ) ? '</a>' : '' ),
               'filter' => true,
            ),
            array(
               'before_widget' => '<aside class="widget widget_text clearfix">',
               'after_widget'  => '</aside>',
               'before_title'  => '<h3 class="widget-title"><span>',
               'after_title'   => '</span></h3>'
            )
         );
      endif; ?>

	<?php do_action( 'colormag_after_sidebar' ); ?>
  

  
</div>