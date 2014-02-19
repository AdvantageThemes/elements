<?php
/**
 * The Footer widget areas.
 *
 * @package Elements
 *
 * Modified from Twenty Eleven 1.0 theme - Automattic, Inc.
 */
?>

<?php
	if (   ! is_active_sidebar( 'footer-1'  )
		&& ! is_active_sidebar( 'footer-2' )
		&& ! is_active_sidebar( 'footer-3' )
		&& ! is_active_sidebar( 'footer-4' )
	)
		return;
?>
<div id="above-footer" <?php elements_footer_sidebar_class(); ?>>
	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	<div id="first" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
	<div id="second" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
	<div id="third" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
	<div id="fourth" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-4' ); ?>
	</div><!-- #fourth .widget-area -->
	<?php endif; ?>

</div><!-- #above-footer -->