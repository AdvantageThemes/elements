<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Elements
 */
?>
	<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
		<div id="sidebar-right" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		</div><!-- #sidebar-right .widget-area -->
	<?php endif; // is active show right sidebar widget area ?>

	<?php if ( ! is_front_page() && ! is_active_sidebar( 'sidebar-right' ) ) : ?>
		<div id="widget-content-message">
			<p><?php _e( 'This is default content to let you know that you have no widgets assigned to the right sidebar column. Once you publish your first widget to this position, this sample content will be replaced by your widget.', 'elements' ); ?></p>
			<p><?php _e( 'If you are not adding any widgets you may wish to use the Full Width page template.', 'elements' ); ?></p>
		</div>
	<?php endif; // is not Front Page and Right Sidebar not active -  show message widget area ?>

	<?php if ( is_front_page() && ! is_active_sidebar( 'sidebar-right' ) ) : ?>
		<div id="widget-content-message">
			<p><?php _e( 'This is default content to let you know that you have no widgets assigned to the right sidebar column. Once you publish your first widget to this position, this sample content will be replaced by your widget.', 'elements' ); ?></p>
		</div>
	<?php endif; // is Front Page and Right Sidebar not active -  show message widget area ?>