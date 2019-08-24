<?php
/**
 * * Template Name: Blog-column
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mediplex
 */
$hostiko_redux_option = get_option('opt_theme_options');
$blogStyle=explode('-',$hostiko_redux_option['blogstyle']);
			switch($blogStyle[1]){
				case 1:
				$layoutClass='otw-twentyfour';
				break;
				case 2:
				$layoutClass='otw-twelve';
				break;
				case 3:
				$layoutClass='otw-eight';
				break;
				case 4:
				$layoutClass='otw-six';
				break;
			}?><div class="<?php echo $layoutClass;?> otw-columns">
<div class="otw_portfolio_manager-portfolio-full otw_portfolio_manager-hover-effect-5">
							<!-- Portfolio Media -->
							<figure class="otw_portfolio_manager-portfolio-media otw_portfolio_manager-format-image">
								<a href="<?php the_permalink(); ?>">
									 <?php 
									if(has_post_thumbnail()){
										 if($blogStyle[1]==1){
									 the_post_thumbnail('full');
										 }
										 else{
											 the_post_thumbnail('blog-img'); 
											 }
									 }
									 else{?>
                                     <img src="<?php echo get_template_directory_uri();?>/assets/images/blank-img.png" />
                                     <?php }?>
								</a>
							</figure>
							<!-- End Portfolio Media -->

							<div class="clear"></div>

							<!-- Portfolio Title -->
							<div class="otw_portfolio_manager-portfolio-title-wrapper">
								<h3 class="otw_portfolio_manager-portfolio-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
							</div>
							<!-- End Portfolio Title -->

							<!-- Portfolio Info -->
							<div class="otw_portfolio_manager-portfolio-meta-wrapper">
								<div class="otw_portfolio_manager-portfolio-meta-item">
										<?php the_category( ',', get_the_ID() ); ?> 
								</div>
							</div>
							<!-- End Portfolio Info -->

							<div class="clear otw_portfolio_manager-mb20"></div>
									
							<div class="otw_portfolio_manager-portfolio-delimiter"></div> <!-- Separator -->
						</div>

</div>
