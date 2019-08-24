<?php
/**
 * The template for displaying all pages
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

    <div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <main id="main" class="site-main">

			<?php
			while (have_posts()) : the_post();
				get_template_part('template-parts/content', 'page');
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <div class="sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
<?php
get_sidebar(); ?>
    </div> <?php

get_footer();
