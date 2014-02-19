<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Elements
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php elements_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

                <!--below main content-->
                <?php if ( is_active_sidebar( 'below-main' ) ) : ?>
                    <section id="below-main" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'below-main' ); ?>
                    </section><!-- #below-main .widget-area -->
                <?php endif; // is active - show below-main widget area ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>