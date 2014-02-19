<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Elements
 */
?>

</div><!-- #content -->

</div><!-- #page -->

<!-- Begin - This block (Footer Widgets, Footer Nav, and Site Info) are outside the site page container - to allow background customization and to allow 100% width sizing -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_sidebar( 'footer' ); ?>
</footer><!-- #colophon -->

<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<nav id="footer-navigation" class="navigation-footer" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'depth' => '1', 'fallback_cb' => 'false' ) ); ?>
	</nav><!-- #footer-navigation .navigation-footer-->
<?php endif; ?>

<div id="site-doc" class="site-info">
    &copy; <?php echo date( "Y" ) ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
</div><!-- .site-info -->
<!-- End -->
<?php wp_footer(); ?>
</body>
</html>