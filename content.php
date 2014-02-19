<?php
/**
 * @package Elements
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- Posts and Pages with Featured Images -->
		<?php
			$image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id,'full');
			$image_url = $image_url[0];
		?>
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_page_template( 'page-templates/full-width.php' ) ) : ?>
			<div class="entry-thumbnail">
				<a href="<?php echo $image_url; ?>" title="<?php the_title_attribute(); ?>" target="_blank" >
				<?php the_post_thumbnail(); ?>
				</a>
			</div><!-- .entry-thumbnail -->
		<?php endif; ?>

		<?php if ( has_post_thumbnail() && ! post_password_required() && is_page_template( 'page-templates/full-width.php' ) ) : ?>
			<div class="entry-thumbnail">
				<a href="<?php echo $image_url; ?>" title="<?php the_title_attribute(); ?>" target="_blank" >
					<?php the_post_thumbnail( 'large-feature' ); ?>
				</a>
			</div><!-- .entry-thumbnail -->
		<?php endif; ?>

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php elements_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'elements' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'elements' ),
				'after'  => '</div>',
				'link_after'  => ',',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'elements' ) );
				if ( $categories_list && elements_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'elements' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'elements' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'elements' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'elements' ), __( '1 Comment', 'elements' ), __( '% Comments', 'elements' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'elements' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
