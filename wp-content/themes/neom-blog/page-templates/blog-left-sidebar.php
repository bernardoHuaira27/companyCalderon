<?php
/**
 * Template Name: Blog Left Sidebar
 */
get_header();
?>
<section id="post-section" class="post-section theme-default">
	<div class="container-full">
		<div class="theme-columns-area">
			<?php get_sidebar(); ?>
			<div id="awp-main-content" class="<?php echo esc_attr( neom_template_layout() ); ?>">

				<?php
					$neom_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$neom_args  = array(
						'post_type' => 'post',
						'paged'     => $neom_paged,
					);

					$neom_loop = new WP_Query( $neom_args );
					if ( $neom_loop->have_posts() ) :
						// Start the Loop.
						while ( $neom_loop->have_posts() ) :
							$neom_loop->the_post();
							// includelude the post format-specific template for the content.
							get_template_part( 'template-pages/content/content', 'page' );
						endwhile;
						?>

					<!-- Custom Pagination -->
						<?php
						$neom_big        = 999999999; // Set a big number to ensure all pages are included in the pagination links.
						$neom_pagination = paginate_links(
							array(
								'base'      => str_replace( $neom_big, '%#%', esc_url( get_pagenum_link( $neom_big ) ) ),
								'format'    => '?paged=%#%',
								'current'   => max( 1, get_query_var( 'paged' ) ),
								'total'     => $neom_loop->max_num_pages,
								'prev_text' => '<i class="fa fa-angle-double-left"></i>',
								'next_text' => '<i class="fa fa-angle-double-right"></i>',
								'type'      => 'array', // Generate an array of links.
							)
						);

						if ( $neom_pagination ) :
							?>
							<nav class="navigation pagination" aria-label="<?php echo esc_attr__( 'Posts navigation', 'neom-blog' ); ?>">
								<h2 class="screen-reader-text"><?php echo esc_html__( 'Posts navigation', 'neom-blog' ); ?></h2>
								<div class="nav-links">
								<?php
								foreach ( $neom_pagination as $neom_page_link ) {
									echo $neom_page_link;
								}
								?>
								</div>
							</nav>
							<?php endif; ?>
					<!-- Custom Pagination -->

				<?php else : ?>
					<?php get_template_part( 'template-pages/content/content', 'none' ); ?>
				<?php endif; ?>
			</div>

		</div>
	</div>
</section>
<?php get_footer(); ?>
