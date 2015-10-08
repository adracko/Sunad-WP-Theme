<?php
/**
 * The template for displaying Archive page.
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

				<header class="page-header">
               <?php if ( is_category() ) {
                  do_action('colormag_category_title');
                  single_cat_title();
                  } else { ?>
					<h3 class="page-title">
               <span>
						<?php
							if ( is_tag() ) :
								single_tag_title();

							elseif ( is_author() ) :
								/* Queue the first post, that way we know
								 * what author we're dealing with (if that is the case).
								*/
								the_post();
								printf( __( 'Author: %s', 'colormag' ), '<span class="vcard">' . get_the_author() . '</span>' );
								/* Since we called the_post() above, we need to
								 * rewind the loop back to the beginning that way
								 * we can run the loop properly, in full.
								 */
								rewind_posts();

							elseif ( is_day() ) :
								printf( __( 'Day: %s', 'colormag' ), '<span>' . get_the_date() . '</span>' );

							elseif ( is_month() ) :
								printf( __( 'Month: %s', 'colormag' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							elseif ( is_year() ) :
								printf( __( 'Year: %s', 'colormag' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

							elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
								_e( 'Asides', 'colormag' );

							elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
								_e( 'Images', 'colormag');

							elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
								_e( 'Videos', 'colormag' );

							elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
								_e( 'Quotes', 'colormag' );

							elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
								_e( 'Links', 'colormag' );

							else :
								_e( 'Archives', 'colormag' );

							endif;
						?>
					</span></h3>
                  <?php } ?>
					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .page-header -->


               <?php if ( is_category( 'Obituaries' ) ) {
                  print('
<div id="obitad">
  <script src="/wp-content/uploads/2011-05-17%20Banasky%20Obit%20Sponsorship/AC_RunActiveContent.js" language="javascript"></script>
  <!--urls used in the movie-->
  <!--text used in the movie-->
  <!--
  <p align="center"><font face="arial" size="23" color="#ffffff" letterSpacing="0.000000" kerning="1"><a href="javascript:OpenAPopUp (500, 560, "/wp-content/uploads/2011-05-17%20Banasky%20Obit%20Sponsorship/docs/James-Banasky-Online-Target-Ad.png")">Obituaries</a></font></p>
  <p align="center"><font face="Futura Md BT" size="14" color="#ffffff" letterSpacing="5.000000" kerning="1"><a href="javascript:OpenAPopUp (500, 560, "/wp-content/uploads/2011-05-17%20Banasky%20Obit%20Sponsorship/docs/James-Banasky-Online-Target-Ad.png")" target = "_blank">INSURANCE</a></font></p>
  <p align="center"><font face="Americana BT" size="21" color="#ffffff" letterSpacing="0.000000" kerning="1"><a href="javascript:OpenAPopUp (500, 560, "/wp-content/uploads/2011-05-17%20Banasky%20Obit%20Sponsorship/docs/James-Banasky-Online-Target-Ad.png")" target = "_blank"><b>James Banasky</b></a></font></p>
  -->
  <!-- saved from url=(0013)about:internet -->
  <script language="javascript">
  	if (AC_FL_RunContent == 0) {
  		alert("This page requires AC_RunActiveContent.js.");
  	} else {
  		AC_FL_RunContent(
  			"codebase", "http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0",
  			"width", "500",
  			"height", "50",
  			"src", "/wp-content/uploads/perma/2011-05-17 Banasky Obit SponsorshipA",
  			"quality", "high",
  			"pluginspage", "http://www.macromedia.com/go/getflashplayer",
  			"align", "middle",
  			"play", "true",
  			"loop", "true",
  			"scale", "showall",
  			"wmode", "window",
  			"devicefont", "false",
  			"id", "2011-05-17 Banasky Obit SponsorshipA",
  			"bgcolor", "#ffffff",
  			"name", "2011-05-17 Banasky Obit SponsorshipA",
  			"menu", "true",
  			"allowFullScreen", "false",
  			"allowScriptAccess","sameDomain",
  			"movie", "/wp-content/uploads/perma/2011-05-17 Banasky Obit SponsorshipA",
  			"salign", ""
  			); //end AC code
  	}
  </script>
  <noscript>
  	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="500" height="50" id="2011-05-17 Banasky Obit SponsorshipA" align="middle">
  	<param name="allowScriptAccess" value="sameDomain" />
  	<param name="allowFullScreen" value="false" />
  	<param name="movie" value="2011-05-17 Banasky Obit SponsorshipA.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="/wp-content/uploads/perma/2011-05-17 Banasky Obit SponsorshipA.swf" quality="high" bgcolor="#ffffff" width="500" height="50" name="2011-05-17 Banasky Obit SponsorshipA" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
  	</object>
  </noscript>
</div>
                  ');
                  } ?>
               



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