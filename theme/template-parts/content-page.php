<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title-panel">
		<header class="entry-header">
			<?php the_title( '<h1 class="title">', '</h1>' ); ?>
			<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail">
				<?php pb_post_thumbnail(); ?>
			</div>
			<?php endif; ?>
		</header>
	</div>
	<div class="panel">
		<div class="container">
			<div class="row">
				<div class="full">

					<div class="entry-content">
						<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pb' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pb' ),
							'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->

				</div><!-- .full -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .panel -->
</article><!-- #post-<?php the_ID(); ?> -->
