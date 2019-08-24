<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mediplex
 */
 $hostiko_redux_option = get_option('opt_theme_options');
 if(isset($hostiko_redux_option['constructionBg'])&&$hostiko_redux_option['constructionBg']){
	$post_banner_url=$hostiko_redux_option['constructionBg']['url'];
}
if(isset($hostiko_redux_option['constructionoverly'])&&$hostiko_redux_option['constructionoverly']){
	$post_banner_color=$hostiko_redux_option['constructionoverly']['rgba'];
}
if(isset($hostiko_redux_option['contentcolor'])&&$hostiko_redux_option['contentcolor']){
	$contentcolor=$hostiko_redux_option['contentcolor']['rgba'];
}

?>
<div class="background">
  <div class="layer background-image page-bg-3" <?php if(isset($post_banner_url)){echo 'style="background-image:url('.$post_banner_url.')"';}?>></div>
  
  <div class="layer background-overlay page-overlay-3" <?php if(isset($post_banner_url)){echo 'style="background-color:'.$post_banner_color.'"';}?>></div>
</div><!-- .background -->

<header class="site-header">
  <div class="row header-wrap">
		<div class="col-sm-5 header-box">
			
		</div><!-- .header-box -->
		
		<div class="col-sm-2 header-box logo-box text-center">
			<a href="<?php echo get_home_url(); ?>">
                            <?php
						if (isset($hostiko_redux_option['logoc']))
					   {
							
							if($hostiko_redux_option['logo-text-en']) {
								echo '
				<h1 class="logo-wrapper">'.$hostiko_redux_option['logo-text'].'</h1>';
							}
							else
							{
								if(!empty($hostiko_redux_option['logo'])) {
								?>
									<img class="enter-logo" src="<?php echo $hostiko_redux_option['logoc']['url']; ?>" title="">
								<?php
								}else{
									
									echo '<h1 class="logo-wrapper">'.get_bloginfo('name').'</h1>';
								}
							}
					   }
						else
					   {
							echo '<h1 class="logo-wrapper">'.get_bloginfo('name').'</h1>';
					   }
        		?>
			</a>
		</div><!-- .header-box -->
		
		<div class="col-sm-5 header-box text-right hidden-xs">
			<!-- demonstration - //keith-wood.name/countdownRef.html -->
			
		</div><!-- .header-box -->
  </div>
</header><!-- .site-header -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="main">
  <section id="home" class="section active"<?php if(isset($contentcolor)){echo 'style="color:'.$contentcolor.'"';}?>>
		<div class="section-wrap">
			<div class="section-content">
				<div class="container">
					<div class="text-center">
						<div class="clearfix"></div>
						<h1 class="h1-section-title"
							data-animation="fadeInDown"
							data-out-animation="fadeOutUp"
							data-out-animation-delay="300"><?php echo $hostiko_redux_option['headingText'];?></h1>
						
						<div class="row section-description">
							<div class="col-sm-8 col-sm-offset-2">
								<p class="lead"
									data-animation="fadeInDown"
									data-animation-delay="300"
									data-out-animation="fadeOutUp"
									data-out-animation-delay="300"><?php echo $hostiko_redux_option['subheadingText'];?></p>
							</div>
						</div>
						<div class="countdown-box">
				<div class="countdown" data-date="<?php echo $hostiko_redux_option['date'];?>"></div>
			</div>
					</div>
				</div>
			</div><!-- .section-content -->
		</div><!-- .section-wrap -->
  </section><!-- #home.section -->
  
  <!-- #about.section -->
  
  <!-- #contact.section -->
</div><!-- .main -->
</article>
<footer class="site-footer">
  <div class="container-fluid text-center">
		<div class="copyright"><?php echo $hostiko_redux_option['opt-copyrights'];?></div>
		<div class="social">
			<a href="<?php echo $hostiko_redux_option['opt-facebook'];?>"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo $hostiko_redux_option['opt-twitter'];?>"><i class="fa fa-twitter"></i></a>
			<a href="<?php echo $hostiko_redux_option['opt-google'];?>"><i class="fa fa-google-plus"></i></a></div>
  </div>
</footer><!-- #post-<?php the_ID(); ?> -->
