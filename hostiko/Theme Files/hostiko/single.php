	<?php
	/**
	* The template for displaying all single posts
	*
	* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	*
	* @package
	*/
	$hostiko_redux_option = get_option('opt_theme_options');
	//echo 'hostiko_redux_option: <pre>'.print_r($hostiko_redux_option,true).'</pre>';
	get_header();
	if ('default'!= $hostiko_redux_option['headerstyle']) {
		//echo '<pre>'.print_r($hostiko_redux_option,true).'</pre>';
		if(isset($hostiko_redux_option['showsiglepostbanner'])&&$hostiko_redux_option['showsiglepostbanner']){
			$post_banner_url=$hostiko_redux_option['blogbannersingle']['url'];
		}
		else{
			$post_banner_url=get_the_post_thumbnail_url(get_the_ID(),'full');
		}
		?>
		</div>
		<div class="clearfix"></div>
		<div class="sub-banner text-center" <?php if(isset($post_banner_url)){echo 'style="background-image:url('.$post_banner_url.')"';}?> >
		<div class="display-table">
		<h1 class="white-color  text-uppercase semibold-font Poppins_font">
		<?php if(isset($hostiko_redux_option['showsingleblogtitle'])&&$hostiko_redux_option['showsingleblogtitle'])
		{
			echo esc_html__($hostiko_redux_option['singleblogheading'],'hostiko');
		}
		else
		{
			echo esc_html__(get_the_title(get_the_ID()),'hostiko');
		}
		?>
		</h1>
		<h6 class="breadcrumb white-color text-uppercase semibold-font Poppins_font"><?php hostiko_get_breadcrumb(); ?></h6>
		</div>
		</div>
		<div class="clearfix"></div>
		<div id="content1" class="site-content container">
		<?php }
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
				$layoutpos=(isset($hostiko_redux_option['layoutblog1'])&&$hostiko_redux_option['layoutblogsingle']=='left_layout'||$layout=='left'?'pull-right':'pull-left');
			}
		}
		else{
			if($hostiko_redux_option['layoutblogsingle']=='full_layout'){
				$showsidebar=false;
				$blogClass='col-lg-12 col-md-12 col-sm-12 col-xs-12 ';
			}
			else{
				$showsidebar=true;
				$blogClass='col-lg-8 col-md-8 col-sm-12 col-xs-12 ';
				$layoutpos=(isset($hostiko_redux_option['layoutblogsingle'])&&$hostiko_redux_option['layoutblogsingle']=='left_layout'||$layout=='left'?'pull-right':'pull-left');
			}
		}
		?>
		<div id="primary" class="content-area  <?php echo $blogClass;?> <?php echo ($hostiko_redux_option['layoutblogsingle']=='left_layout'||$layout=='left'?'pull-right':'pull-left');?>">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content-single', get_post_type() );
		related_posts_with_thumb();
		the_post_navigation();
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile; // End of the loop.
	?>
	</main><!-- #main -->
	</div><!-- #primary -->
	<?php
	if($showsidebar==true){
		?>
		<div class="sidebar sidebar-blog col-lg-4 col-md-4 col-sm-12 col-xs-12 <?php echo ($hostiko_redux_option['layoutblogsingle']=='left_layout'||$layout=='left'?'pull-left':'pull-right');?>">
		<?php    get_sidebar(); ?>
		</div>
		<?php }
		?>
		</div><!--.site-content --><?php
		get_footer();
