<?php
/**
 * Archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package neom
 */

get_header();
?>
<section id="post-section" class=" theme-default post-section">
	<div class="container-full">
		<div class="theme-columns-area">
			<?php
			$neom_archive_blog_pages_layout = get_theme_mod( 'neom_archive_blog_pages_layout', 'neom_right_sidebar' );
			if ( 'neom_left_sidebar' === $neom_archive_blog_pages_layout ) :
				get_sidebar();
				endif;
			?>
			<div id="awp-main-content" class="<?php echo esc_attr( neom_post_layout() ); ?>">

				<?php if ( have_posts() ) : ?>

					<?php
					while ( have_posts() ) :
						the_post();

							get_template_part( 'template-pages/content/content', 'page' );

					endwhile;
					?>

					<!-- Pagination -->
					<?php
						$posts_pagination = get_the_posts_pagination(
							array(
								'mid_size'  => 1,
								'prev_text' => '<i class="fa fa-angle-double-left"></i>',
								'next_text' => '<i class="fa fa-angle-double-right"></i>',
							)
						);
						echo wp_kses_post( $posts_pagination );
					?>
					<!-- Pagination -->	

				<?php else : ?>

					<?php get_template_part( 'template-pages/content/content', 'none' ); ?>

				<?php endif; ?>
			</div>
			<?php if ( 'neom_right_sidebar' === $neom_archive_blog_pages_layout ) : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
