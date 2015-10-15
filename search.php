<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'colormag_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php if ( have_posts() ) : ?>

				<div class="article-container">

               <?php global $post_i; $post_i = 1; ?>

               <?php while ( have_posts() ) : $post_i = $post_i + 1; the_post(); ?>

<?php if(5 == $post_i) { echo '
<div class="post">
<script type="text/javascript">// <![CDATA[
var googletag = googletag || {};   googletag.cmd = googletag.cmd || [];   (function() {     var gads = document.createElement("script");     gads.async = true;     gads.type = "text/javascript";     var useSSL = "https:" == document.location.protocol;     gads.src = (useSSL ? "https:" : "http:") +       "//www.googletagservices.com/tag/js/gpt.js";     var node = document.getElementsByTagName("script")[0];     node.parentNode.insertBefore(gads, node);   })();
// ]]></script>

<script type="text/javascript">// <![CDATA[
googletag.cmd.push(function() {     googletag.defineSlot("/19520233/SUN-In-Archive-300x250-MR", [300, 250], "div-gpt-ad-1443558302247-0").addService(googletag.pubads());     googletag.pubads().enableSingleRequest();     googletag.enableServices();   });
// ]]></script>

<div id="div-gpt-ad-1443558302247-0" style="height: 250px; width: 300px;margin:0 auto;display:block;"><script type="text/javascript">// <![CDATA[
googletag.cmd.push(function() { googletag.display("div-gpt-ad-1443558302247-0"); });
// ]]></script></div>
</div>
'; } ?>

                  <?php get_template_part( 'content', 'archive' ); ?>

               <?php endwhile; ?>

            </div>

            <?php get_template_part( 'navigation', 'archive' ); ?>

         <?php else : ?>

            <?php get_template_part( 'no-results', 'archive' ); ?>

         <?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php colormag_sidebar_select(); ?>

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>