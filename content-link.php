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
		<div class="link-permalink">
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
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'elements' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'elements' ) );

			if ( ! elements_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged <span class="tags-links">%2$s.</span> Bookmark the <span class="bookmark-permalink"><a href="%3$s" rel="bookmark">permalink</a>.</span>', 'elements' );
				} else {
					$meta_text = __( 'Bookmark the <span class="bookmark-permalink"><a href="%3$s" rel="bookmark">permalink</a>.</span>', 'elements' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in <span class="cat-links">%1$s</span> and tagged <span class="tags-links">%2$s.</span> Bookmark the <span class="bookmark-permalink"><a href="%3$s" rel="bookmark">permalink</a>.</span>', 'elements' );
				} else {
					$meta_text = __( 'This entry was posted in <span class="cat-links">%1$s.</span> Bookmark the <span class="bookmark-permalink"><a href="%3$s" rel="bookmark">permalink</a>.</span>', 'elements' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'elements' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->