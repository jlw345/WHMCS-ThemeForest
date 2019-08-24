<?php
/**
 * Template Name: subpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hostiko
 */

$hostiko_redux_option = get_option('opt_theme_options');
get_header();
 ?>
<?php if ('hostiko'== $hostiko_redux_option ['headerstyle']) { ?>
	</div>
	<div class="clearfix"></div>
	<div class="sub-banner text-center" >
		<div class="display-table">
			<h1 class="white-color  text-uppercase semibold-font Poppins_font">
				<?php the_title( ); ?>
			</h1>
			<h6 class="breadcrumb white-color text-uppercase semibold-font Poppins_font"><?php hostiko_get_breadcrumb(); ?></h6>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="site-content container">
<?php } ?>

	<div id="primary-visualcomposer" class="content-area-vc">
		<main id="main-vc" class="site-main-vc">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'vc' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
