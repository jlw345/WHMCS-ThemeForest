<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hostiko
 */
$hostiko_redux_option = get_option('opt_theme_options');
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
				<?php echo esc_html__('Search','hostiko')?>
            </h1>
            <h6 class="breadcrumb white-color text-uppercase semibold-font Poppins_font"><?php hostiko_get_breadcrumb(); ?></h6>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="content" class="site-content container">
<?php } ?>
	<section id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) : ?>
			<header class="page-header search">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'hostiko' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->
    <div class="sidebar sidebar-blog col-lg-4 col-md-4 col-sm-12 col-xs-12"
<?php
get_sidebar(); ?>
    </div> <?php }
get_footer();
