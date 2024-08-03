<?php
/**
 * Template Name: Page Full Width
 **/

get_header();
?>
<section class="post-section theme-default">
	<div class="container-full">
		<div class="theme-columns-area wow fadeInUp">
			<div class="theme-column-12 wow fadeInUp">
				<?php
					the_post();
				the_content();

				if ( $post->comment_status == 'open' ) {
					comments_template( '', true ); // show comments.
				}
				?>
			</div>
		</div>
	</div>
</section> 
<?php get_footer(); ?>
