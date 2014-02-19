<?php
/**
 * The template for displaying Author information.
 *
 * Learn more: http://codex.wordpress.org/Author_Templates
 *
 * @package Elements
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

			<!-- This sets the $curauth variable -->
			<?php
				if (isset($_GET['author_name'])) :
					$curauth = get_user_by('slug', $author_name);
				else :
					$curauth = get_userdata(intval($author));
				endif;
				$authorID = $curauth -> ID;
			?>
			<div class="author-avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?>
			<h2><?php echo $curauth->display_name; ?></h2>
			</div><!-- .author-avatar -->
			<dl>
				<?php if ( get_the_author_meta( 'user_url' ) ) : ?>
				<dt>Website</dt>
				<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
				<?php endif; ?>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<dt>Profile</dt>
				<dd><?php echo $curauth->user_description; ?></dd>
				<?php endif; ?>
			</dl>

			<h2>Posts by <?php echo $curauth->display_name; ?>:</h2>
			<ul>
				<!-- The Loop - Added a query array -->
				<?php query_posts(array( 'post_type' => 'post', 'post_status' => 'publish', 'author' => $authorID, 'showposts' => 10 ));?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
							<?php the_title(); ?></a><br />
							<div class="author-post-indent">
							<?php the_time(get_option('date_format')); ?> in <?php the_category(' & ');?>
							</div>
						</li>
					<?php endwhile; else: ?>
					<li>
					<?php _e('No posts by this author.', 'elements'); ?>
					</li>
				<?php endif; ?>
				<!-- End Loop -->
			</ul>
			<?php elements_paging_nav(); ?>
			<?php wp_reset_postdata(); ?>

			<h2>Pages by <?php echo $curauth->display_name; ?>:</h2>
			<ul>
				<!-- The Loop - Added a new wp_query array -->
			<?php $author_query = new WP_Query(array( 'post_type' => 'page', 'post_status' => 'publish', 'author' => $authorID, 'showposts' => -1 )); ?>
			<?php if ( $author_query->have_posts() ) : while ( $author_query->have_posts() ) : $author_query->the_post(); ?>
						<li>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
							<?php the_title(); ?></a><br />
							<div class="author-post-indent">
							<?php the_time(get_option('date_format')); ?>
							</div>
						</li>
						<?php endwhile; else: ?>
					<li>
					<?php _e('No pages by this author.', 'elements'); ?>
					</li>
				<?php endif; ?>
				<!-- End Loop -->
			</ul>
			<?php wp_reset_postdata(); ?>


	</main><!-- #main -->
</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>