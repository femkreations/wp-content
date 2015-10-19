<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>

<?php // close divs opened in header (#main + #page) ?>

	</main><!-- #main -->
</div><!-- #page -->
 
<footer id="colophon" role="contentinfo" class="siteFooter container">	
	<nav class="siteNavigation" role="navigation">
	    <ul class="siteMenu--Footer" role="menu">
	    	<li>&copy; <?php echo date("Y"); ?> <?php echo bloginfo( "name" ); ?></a></li>
	        <?php wp_nav_menu( array( "theme_location" => "footer", "container" => '', 'items_wrap'=> '%3$s' ) ); ?>
	        <li><a href="<?php echo esc_url( "http://melissajclark.ca" ); ?>"><?php esc_html_e('Development by Melissa', 'starter-theme') ?></a></li>
	        <li><a href="#top"><?php esc_html_e('Back to Top', 'starter-theme'); ?></li>
	    </ul><!-- .menu -->
	</nav><!-- siteNavigation -->  
</footer><!-- #colophon -->

<?php // Load external scripts in the footer ?>
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600italic,600,300,300italic|Lato:400,400italic,300italic,300,700,700italic' rel='stylesheet' type='text/css'>

<?php wp_footer(); ?> 
</body>
</html>