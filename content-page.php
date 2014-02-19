<?php
/**
 * The template used for displaying page content in page.php
 *
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

		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'elements' ),
				'after'  => '</div>',
				'link_after'  => ',',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'elements' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
