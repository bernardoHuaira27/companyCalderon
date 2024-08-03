<?php
/**
 * Theme Page 404.
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package neom
 */

get_header();
?>
<!--404.php file-->
<section id="section-error404" class="section-error404">
	<div class="container-full">
		<div class="theme-columns-area wow fadeInUp">
			<div class="theme-column-6 text-center mx-auto">
				<div class="card-error">	
					<h1><?php esc_html_e( '4', 'neom-blog' ); ?>
						<span class="card-erroricon">
							<i class="fa fa-wrench"></i>
						</span>
						<?php esc_html_e( '4', 'neom-blog' ); ?>
					</h1>
					<h4><?php esc_html_e( 'Page Not Found', 'neom-blog' ); ?></h4>
					<p><?php esc_html_e( 'Oops! We can not find the page you are looking for', 'neom-blog' ); ?></p>
					<div class="card-error-btn mt-3">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="awp-btn awp-btn-primary"> <?php esc_html_e( 'Back To Home', 'neom-blog' ); ?> <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
