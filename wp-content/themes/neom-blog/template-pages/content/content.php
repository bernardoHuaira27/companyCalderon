<?php
/**
 * Theme Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package neom
 */

?>
<!-- content.php file -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}

		if ( 'post' === get_post_type() ) :
			?>
		<div class="entry-meta">
			<?php neom_posted_on(); ?>
		</div>
			<?php
		endif;
		?>
	</header>

	<div class="entry-content">
		<?php
		$neom_excerpt_disabled = get_theme_mod( 'neom_excerpt_disabled', true );
		if ( true === $neom_excerpt_disabled ) {
			the_excerpt();
		} else {
			the_content(
				sprintf(
				/* translators: %s: Name of current post. */
					wp_kses( __( 'Read More %s <span class="meta-nav">&rarr;</span>', 'neom-blog' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);
		}
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'neom-blog' ),
					'after'  => '</div>',
				)
			);
			?>
	</div>

	<footer class="entry-footer">
		<?php neom_entry_footer(); ?>
	</footer>
</article>
