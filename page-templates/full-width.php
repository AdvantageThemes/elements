<?php
/**
 * Template Name: Full Width Page
 *
 *
 * @package Elements
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
                	<!--below main content-->
                <?php if ( is_active_sidebar( 'below-main' ) ) : ?>
                    <section id="below-main" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'below-main' ); ?>
                    </section><!-- #below-main .widget-area -->
                <?php endif; // is active - show below-main widget area ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>