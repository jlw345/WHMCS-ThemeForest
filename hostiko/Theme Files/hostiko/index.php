<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foodbooz
 */
$hostiko_redux_option = get_option('opt_theme_options');
get_header();
if ('default'!= $hostiko_redux_option['headerstyle'] && is_array($hostiko_redux_option)) {
$page_for_posts = get_option( 'page_for_posts' );
if(!isset($hostiko_redux_option['showblogbanner'])&&!$hostiko_redux_option['showblogbanner']){
	$post_banner_url=get_the_post_thumbnail_url($page_for_posts,'full');
}
?>
    </div>
    <div class="clearfix"></div>
    <div class="sub-banner text-center" >
        <div class="display-table">
            <h1 class="white-color  text-uppercase semibold-font Poppins_font">
				<?php echo $hostiko_redux_option['blogheading'] ?>
            </h1>
            <h6 class="breadcrumb white-color text-uppercase semibold-font Poppins_font"><?php hostiko_get_breadcrumb(); ?></h6>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="content1" class="site-content container">
<?php } ?>
    <div class="blog-page-con">
<?php
$showsidebar=true;
$blogClass='';
$layout='';
if(isset($_REQUEST['layout'])){
	$layout=$_REQUEST['layout'];
	if($layout=='full'){
		$showsidebar=false;
		$blogClass='col-lg-12 col-md-12 col-sm-12 col-xs-12 ';
	}
	else{
		$showsidebar=true;
		$blogClass='col-lg-8 col-md-8 col-sm-12 col-xs-12 ';
		$layoutpos=(isset($hostiko_redux_option['layoutblog1'])&&$hostiko_redux_option['layoutblog1']=='left_layout'||$layout=='left'?'pull-right':'pull-left');
	}
}
else{
	if($hostiko_redux_option['layoutblog1']=='full_layout'){
			$showsidebar=false;
			$blogClass='col-lg-12 col-md-12 col-sm-12 col-xs-12 ';
		}
	else{
			$showsidebar=true;
			$blogClass='col-lg-8 col-md-8 col-sm-12 col-xs-12 ';
			$layoutpos=(isset($hostiko_redux_option['layoutblog1'])&&$hostiko_redux_option['layoutblog1']=='left_layout'||$layout=='left'?'pull-right':'pull-left');
		}
}
?>
	<div id="primary" class="content-area  <?php echo $blogClass; echo (isset($layoutpos)?$layoutpos:''); ?>">
		<main id="main" class="site-main">
		<?php
		//echo 'Redux layout Select: '.$hostiko_redux_option['blogstyle'];
		$blogStyle=explode('-',$hostiko_redux_option['blogstyle']);
		if ( have_posts() ) :
			if($blogStyle[0]=='grid'){
			 ?>
            <div class="otw_portfolio_manager-grid-layout-wrapper clearfix">
				<div class="otw-row otw_portfolio_manager-portfolio-items-holder">
            <?php }
			elseif($blogStyle[0]=='list'){
				switch($blogStyle[2]){
					case 'left':
					$layoutClass='otw_portfolio_manager-image-left';
					break;
					case 'right':
					$layoutClass='otw_portfolio_manager-image-right';
					break;
				}
				?>
            <div class="otw-row otw_portfolio_manager-portfolio-items-holder <?php echo $layoutClass;?>">
            <?php
				}
			elseif($blogStyle[0]=='news'){?>
            <div class="otw-row">
		<section class="otw-twentyfour otw-columns">
            <div class="otw-row otw_portfolio_manager-portfolio-items-holder otw_portfolio_manager-portfolio-newspaper">
				<?php }
			$count = 0; ?>
			<?php
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			$count++;
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/blog/blog', $blogStyle[0] );
						$max=(isset($blogStyle[1])?$blogStyle[1]:1);
						if($count == $max&&'news'!=$blogStyle[0]) { ?>
							<div class="clearfix"></div>
							<?php $count = 0; ?>
						<?php }
			endwhile;
            ?>
             <?php
			if('grid'==$blogStyle[0]):?>
          	  </div></div>
            <?php
			elseif('list'==$blogStyle[0]):?>
          	  </div>
             <?php
			elseif('news'==$blogStyle[0]):?>
              </div>
            </section>
            </div>
            <?php
			endif;
			?>
            <div class="clearfix"></div>
            <div id="blog-nav"><?php
			if($hostiko_redux_option['pagenav']=='btn'){
			global $wp_query;
			if (  $wp_query->max_num_pages > 1 )
				echo '<div class="AKD_loadmore">More posts</div>';
			}
			elseif($hostiko_redux_option['pagenav']=='nav'){
				hostiko_numeric_posts_nav();
				}
			// you can use <a> as well
			//
			?>
            </div>
            <?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
if($showsidebar==true){
	?>
    <div class="sidebar sidebar-blog col-lg-4 col-md-4 col-sm-12 col-xs-12 <?php echo ($hostiko_redux_option['layoutblog1']=='left_layout'||$layout=='left'?'pull-left':'pull-right');?>">
<?php    get_sidebar(); ?>
    </div>
	<?php }
?>
</div>
</div><!--.site-content --><?php
blogstyle_register();
	get_footer();
