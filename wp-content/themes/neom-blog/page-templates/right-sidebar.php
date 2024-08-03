<?php
/**
 * Template Name: Page With Right Sidebar
 **/

get_header();
?>
<section class="post-section theme-default">
	<div class="container-full">
		<!-- Classes for sidebar None -->
		<?php
		if ( ! is_active_sidebar( 'neom-sidebar-primary' ) ) {
			$neom_div_classes = 'theme-column-12 av-md-column-12';
		} else {
			$neom_div_classes = 'theme-column-8 av-md-column-8';
		}
		?>

		<div class="theme-columns-area wow fadeInUp">
			<div class="<?php echo esc_attr( $neom_div_classes ); ?>  wow fadeInUp">
				<?php
					the_post();
				the_content();

				if ( $post->comment_status == 'open' ) {
					comments_template( '', true ); // show comments.
				}
				?>

			</div>

			<?php
			if ( is_active_sidebar( 'neom-sidebar-primary' ) ) {
				get_sidebar();
			}
			?>
		</div>
	</div>
</section> 
<?php get_footer(); ?>
