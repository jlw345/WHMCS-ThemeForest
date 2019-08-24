<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hostiko
 */
$hostiko_redux_option = get_option('opt_theme_options');
//echo 'hostiko_redux_option: <pre>'.print_r($hostiko_redux_option,true).'</pre>';
get_header();
if(isset($hostiko_redux_option['constructionPage'])&&$hostiko_redux_option['constructionPage']&&!is_user_logged_in()){
	while (have_posts()) : the_post();
				get_template_part('template-parts/content', 'underconstruction');
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
			endwhile; // End of the loop.
}
else{
	 ?>
<?php if ('default'!== $hostiko_redux_option ['headerstyle']) { ?>
    </div>
    <div class="clearfix"></div>
    <div class="sub-banner text-center" >
        <div class="display-table">
            <h1 class="white-color  text-uppercase semibold-font Poppins_font">
				<?php echo esc_html__('Archive','hostiko') ?>
            </h1>
            <h6 class="breadcrumb white-color text-uppercase semibold-font Poppins_font"><?php hostiko_get_breadcrumb(); ?></h6>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="content1" class="site-content container">
<?php } ?>
	<div   id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) : ?>
			<header class="page-header archive">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
    <div class="sidebar sidebar-blog col-lg-4 col-md-4 col-sm-12 col-xs-12">
<?php
get_sidebar(); ?>
    </div> <?php
}?>
</div><!--.site-content --><?php
get_footer();
