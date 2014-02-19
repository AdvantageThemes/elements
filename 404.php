<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Elements
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'elements' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="error-message-primary">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'elements' ); ?></p>
							<?php get_search_form(); ?>
					</div>

					<div class="error-message-secondary">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					<?php the_widget( 'WP_Widget_Archives' ); ?>
					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>