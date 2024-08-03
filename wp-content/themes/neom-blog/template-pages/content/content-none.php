<?php
/**
 * Theme Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package neom
 */

?>
<!-- Content-none.php file -->
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-items' ); ?>>
	<div class="blog-wrapup">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p class="pt-5"><?php printf( esc_html__( 'Ready to publish your first post? %1$sGet started here%2$s.', 'neom-blog' ), '<a href="' . esc_url( admin_url( 'post-new.php' ) ) . '">', '</a>' ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p class="pt-5"><?php esc_html_e( 'Oops, nothing matched your search terms. Please try again with some different words.', 'neom-blog' ); ?></p>
		<?php else : ?>
			<p class="pt-5"><?php esc_html_e( 'It seems we can not find what you are looking for. Perhaps searching can help you.', 'neom-blog' ); ?></p>
		<?php endif; ?>
	</div>
</article>
