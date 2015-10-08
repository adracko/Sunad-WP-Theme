<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php do_action( 'colormag_before_post_content' ); ?>


   <div class="article-content clearfix">

      <?php if( get_post_format() ) { get_template_part( 'inc/post-formats' ); } ?>

      <?php colormag_colored_category(); ?>

      <header class="entry-header">
         <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
         </h1>
      </header>

      <?php colormag_entry_meta(); ?>

      <div class="entry-content clearfix">
      

   <?php if ( has_post_thumbnail() ) { ?>
      <div class="featured-image" style="width:200px; float:left; margin:0 10px 0 0;max-height: 200px; overflow: hidden;">
         <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'colormag-featured-image' ); ?></a>
      </div>
   <?php } ?>


         <?php
            the_excerpt();
         ?>
         <a class="more-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><span><?php _e( 'Read more', 'colormag' ); ?></span></a>
      </div>

   </div>

   <?php do_action( 'colormag_after_post_content' ); ?>
</article>