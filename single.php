<?php
/**
 * Theme Single Post Section for our theme.
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


               <?php if ( in_category( 'Obituaries' ) ) {
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



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; ?>

		</div><!-- #content -->

      <?php get_template_part( 'navigation', 'single' ); ?>

      <?php if ( get_the_author_meta( 'description' ) ) : ?>
<?php if ( function_exists( 'get_Sexy_Author_Bio' ) ) echo get_Sexy_Author_Bio(); ?>
      <?php endif; ?>

      <?php if ( get_theme_mod( 'colormag_related_posts_activate', 0 ) == 1 )
         get_template_part( 'inc/related-posts' );
      ?>

      <?php
         do_action( 'colormag_before_comments_template' );
         // If comments are open or we have at least one comment, load up the comment template
         if ( comments_open() || '0' != get_comments_number() )
            comments_template();
         do_action ( 'colormag_after_comments_template' );
      ?>

	</div><!-- #primary -->

	<?php colormag_sidebar_select(); ?>

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>