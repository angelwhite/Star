<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package star
 */

get_header(); ?>
	<div class="banner" style="background: url('<?php 
		$image = get_field('banner_image');
		if( !empty($image) ): ?><?php echo $image['url']; ?>
		<?php endif; ?>') no-repeat center center scroll;">
	</div>
	
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'star' ); ?></a>
		<div id="content" class="site-content grid">

		<div id="primary" class="content-area page-wrap grid grid-pad">
			<main id="main" class="site-main" role="main">
				<div class="content col-8-12">
					<h1>Company News</h1>
				
					<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
				</div>
		
				<div class="content col-4-12">
					<?php get_sidebar(); ?>
				</div>
			</main><!-- #main -->
	
<?php get_footer(); ?>
