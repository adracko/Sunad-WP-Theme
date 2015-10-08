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

   <?php
      $image_popup_id = get_post_thumbnail_id();
      $image_popup_url = wp_get_attachment_url( $image_popup_id );
   ?>
   
   <div class="article-content clearfix">

   <?php if( get_post_format() ) { get_template_part( 'inc/post-formats' ); } ?>

   <?php colormag_colored_category(); ?>

      <header class="entry-header">
   		<h1 class="entry-title">
   			<?php the_title(); ?>
   		</h1>
   	</header>

   	<?php colormag_entry_meta(); ?>

   	<div class="entry-content clearfix">
    
<div id="contentad">
<script type="text/javascript">// <![CDATA[
var googletag = googletag || {};   googletag.cmd = googletag.cmd || [];   (function() {     var gads = document.createElement('script');     gads.async = true;     gads.type = 'text/javascript';     var useSSL = 'https:' == document.location.protocol;     gads.src = (useSSL ? 'https:' : 'http:') +       '//www.googletagservices.com/tag/js/gpt.js';     var node = document.getElementsByTagName('script')[0];     node.parentNode.insertBefore(gads, node);   })();
// ]]></script>

<script type="text/javascript">// <![CDATA[
googletag.cmd.push(function() {     googletag.defineSlot('/19520233/09-01-15', [160, 600], 'div-gpt-ad-1443546415557-0').addService(googletag.pubads());     googletag.pubads().enableSingleRequest();     googletag.enableServices();   });
// ]]></script>

<div id="div-gpt-ad-1443546415557-0" style="height: 600px; width: 160px;margin:0 15px 15px 0;float:left;"><script type="text/javascript">// <![CDATA[
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1443546415557-0'); });
// ]]></script></div>
</div>
    
   		<?php
   			the_content();

   			wp_link_pages( array(
   				'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'colormag' ),
   				'after'             => '</div>',
   				'link_before'       => '<span>',
   				'link_after'        => '</span>'
   	      ) );
   		?>
   	</div>

   </div>

	<?php do_action( 'colormag_after_post_content' ); ?>
</article>