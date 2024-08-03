<?php
/**
 * Single.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package neom
 */

get_header();
?>
<section id="post-section" class="post-section theme-default">
	<div class="container-full">
		<div class="theme-columns-area">
			<?php
			$neom_single_blog_pages_layout = get_theme_mod( 'neom_single_blog_pages_layout', 'neom_right_sidebar' );
			if ( 'neom_left_sidebar' === $neom_single_blog_pages_layout ) :
				get_sidebar();
				endif;
			?>
			<div id="awp-main-content" class="<?php echo esc_attr( neom_single_post_layout() ); ?>">

				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<?php get_template_part( 'template-pages/content/content', 'single' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php comments_template( '', true ); ?>
			</div>
			<?php if ( 'neom_right_sidebar' === $neom_single_blog_pages_layout ) : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
