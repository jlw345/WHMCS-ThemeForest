<?php
/**
 * * Template Name: Card-Blog
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
	 if ('hostiko'== $hostiko_redux_option['headerstyle']) {
//echo '<pre>'.print_r($hostiko_redux_option,true).'</pre>';
$page_for_posts = get_option( 'page_for_posts' );
if(isset($hostiko_redux_option['showblogbanner'])&&$hostiko_redux_option['showblogbanner']){
	$post_banner_url=$hostiko_redux_option['blogbanner1']['url'];
}
else{
	$post_banner_url=get_the_post_thumbnail_url($page_for_posts,'full');
}
?>
</div>
    <div class="clearfix"></div>
    <div class="sub-banner text-center" <?php if(isset($post_banner_url)){echo 'style="background-image:url('.$post_banner_url.')"';}?> >
        <div class="display-table">
            <h1 class="white-color  text-uppercase semibold-font Poppins_font">
				<?php if(isset($hostiko_redux_option['showblogtitle'])&&$hostiko_redux_option['showblogtitle'])
				{
					echo esc_html__($hostiko_redux_option['blogheading'],'hostiko');
				}
				else
				{
					echo esc_html__(get_the_title($page_for_posts),'hostiko');
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
if(isset($_REQUEST['layout'])){
	$layout=$_REQUEST['layout'];
	if($layout=='full'){
		$showsidebar=false;
		$blogClass='col-lg-12 col-md-12 col-sm-12 col-xs-12 ';
	}
	else{
		$showsidebar=true;
		$blogClass='col-lg-8 col-md-8 col-sm-12 col-xs-12 ';
	}
}
else{
	
	if($hostiko_redux_option['layoutblog1']=='full_layout'){
			$showsidebar=false;
			$layout='full';
			$blogClass='col-lg-12 col-md-12 col-sm-12 col-xs-12 ';
		}
	else{
			$showsidebar=true;
			$blogClass='col-lg-8 col-md-8 col-sm-12 col-xs-12 ';
		}
}
?>

	<div id="primary" class="content-area  <?php echo $blogClass;?> <?php echo ($hostiko_redux_option['layoutblog1']=='left_layout'||$layout=='left'?'pull-right':'pull-left');?>">
		<div id="content-card-blog">
            <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged=' . get_query_var('paged')); ?>
			<?php if (have_posts()): ?>
            <?php $count = 0; ?>

				<?php while (have_posts()): the_post(); ?>
<?php $count++; ?>
<?php if (is_sticky() && is_home() && !is_paged()) {?>

                        <article id="post-<?php the_ID(); ?>" class="<?php echo (isset($layout)&&$layout!='full'?'col-lg-6 col-md-6':'col-lg-4 col-md-4');?> col-sm-6 col-xs-12 blog-card sticky">
                            <div class="featurepost stickypost">
                                    <div class="entry-media">
		                                <?php if (has_post_thumbnail()) : ?>
                                            <div class="tw-thumbnail-sticky">
				                                <?php the_post_thumbnail('blog-img'); ?>
                                                <div class="image-overlay tw-middle">
                                                    <div class="image-overlay-inner">
                                                        <a href="<?php the_permalink(); ?>"  class="overlay-icon" title="<?php the_title_attribute(); ?>"></a>
                                                    </div>
                                                </div>
                                            </div>
		                                <?php endif; ?>
                                    </div>


                                    <div class="entry-post-grid sticky-content">
                                        <div class="entry-content-container">
			                                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>

                                            <div class="blog-card-meta">
				                                <?php $author = get_the_author();?>
                                                <div class="entry-author">
                                                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )) ?>" >
					                                <?php echo esc_html('by '.$author) ; ?>
                                                    </a>
                                                </div>
                                                <div class="entry-date">
                                                    <a href="<?php the_permalink(); ?>">
                                                    <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
                                                    </a>

                                                </div>
                                                <div class="entry-comment">
                                                    <a href="<?php the_permalink(); ?>">
                                                    <?php comments_number( 'no comment', 'one comment', '% comments' ); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                        </article>

                        <?php } else {?>

                    <article id="post-<?php the_ID(); ?>" class="<?php echo (isset($layout)&&$layout!='full'?'col-lg-6 col-md-6':'col-lg-4 col-md-4');?> col-sm-6 col-xs-12 blog-card" >
                        <div class="entry-post-container">
                            <div class="entry-media">
					            <?php if (has_post_thumbnail()) : ?>
                                    <div class="tw-thumbnail">
	                                    <?php the_post_thumbnail('blog-img'); ?>
                                        <div class="image-overlay tw-middle">
                                            <div class="image-overlay-inner">
                                                <a href="<?php the_permalink(); ?>"  class="overlay-icon" title="<?php the_title_attribute(); ?>"></a>
                                            </div>
                                        </div>
                                    </div>
					            <?php endif; ?>
                            </div>
                            <div class="entry-post-grid">
                                <div class="entry-content-container">
                                    <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                    <div class="entry-content clearfix">
	                                    <?php  echo esc_html (hostiko_excerpt(15)); ?>

                                    </div>
                                    <div class="blog-card-meta">
		                                <?php $author = get_the_author();?>
                                        <div class="entry-author">
                                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )) ?>" >
				                                <?php echo esc_html('by '.$author) ; ?>
                                            </a>
                                        </div>
                                        <div class="entry-date">
                                            <a href="<?php the_permalink(); ?>">
				                                <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?>
                                            </a>

                                        </div>
                                        <div class="entry-comment">
                                            <a href="<?php the_permalink(); ?>">
				                                <?php comments_number( 'no comment', 'one comment', '% comments' ); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </article>
                    <?php if(!isset($layout)||$layout!='full'?$max=2:$max=3);
						if($count == $max) { ?>
							<div class="clearfix"></div>
							<?php $count = 0; ?>

						<?php } ?>

				<?php }  endwhile; ?>

                <div id="blog-nav"><?php
					hostiko_numeric_posts_nav();
					?>
                </div>

			<?php else: ?>

                <div id="post-404" class="noposts">

                    <p><?php _e('None found.', 'hostiko'); ?></p>

                </div><!-- /#post-404 -->

			<?php endif;
			wp_reset_query(); ?>

    </div>
        </div>
<?php
if($showsidebar==true){
	?>
    <div class="sidebar sidebar-blog col-lg-4 col-md-4 col-sm-12 col-xs-12 <?php echo ($hostiko_redux_option['layoutblog1']=='left_layout'||$layout=='left'?'pull-left':'pull-right');?>">
<?php    get_sidebar(); ?>
    </div>
	<?php }
}?>
</div><!--.site-content --><?php
	get_footer();