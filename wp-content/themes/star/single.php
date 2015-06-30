<?php
/**
 * The template for displaying all single posts.
 *
 * @package star
 */

get_header(); ?>

	<div id="primary" class="content-area page-wrap grid grid-pad">
		<main id="main" class="site-main" role="main">	
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		         <div class="single-post col-8-12" id="post-<?php the_ID(); ?>">
		      
					<h2 class="topTitle"><?php the_title(); ?></h2>
					<p class="topMeta"><?php the_time('M d, Y') ?> <?php
						$categories = get_the_category();
						$separator = ' ';
						$output = '';
						if($categories){
						foreach($categories as $category) {
						$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
						}
						echo trim($output, $separator);
						}
						?>
					</p>
					 
		            <div class="entry">
			            <?php the_content('Continue reading &raquo;'); ?>
			            <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
		            </p>
		            <?php edit_post_link('Edit', '', ''); ?>
		            </div><!--/entry -->

		         </div><!--/post -->

		   	<?php endwhile; else: ?>

		            <p style="margin-top:25px;">Sorry, no posts matched your criteria.</p>

		   	<?php endif; ?>
			
			
			<div class="sidebar col-4-12">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
		</main><!-- #main -->

<?php get_footer(); ?>
