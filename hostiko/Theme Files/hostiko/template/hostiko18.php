<?php
/**
 * Template Name:hostiko Layout 18
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

get_header(); ?>

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
