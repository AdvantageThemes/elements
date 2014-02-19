<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package Elements
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<div class="status-permalink">
		<a href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'elements' ),
				'after'  => '</div>',
				'link_after'  => ',',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'elements' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->