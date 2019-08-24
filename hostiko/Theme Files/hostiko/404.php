<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package default
 */
$hostiko_redux_option = get_option('opt_theme_options');
//echo '<pre>'.print_r($hostiko_redux_option,true).'</pre>';
if(isset($hostiko_redux_option['404bg'])&&$hostiko_redux_option['404bg']){
	$post_banner_url=$hostiko_redux_option['404bg']['url'];
}
//echo $post_banner_url;
get_header('blank'); ?>
<div class="error_page_wrap text-center col-xs-12" style="display:table; background-size: cover; <?php if(isset($post_banner_url)){echo 'background-image:url('.$post_banner_url.')';}?>"  >
<div style="vertical-align:middle; display:table-cell">
 <div id="content" class="site-content container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
<div class="logo text-center">  <a href="<?php echo get_home_url(); ?>">
                            <?php
						if (isset($hostiko_redux_option['logo']))
					   {
							if(isset($hostiko_redux_option['logo-text-en'])) {
								echo '
				<h1 class="logo-wrapper">'.$hostiko_redux_option['logo-text'].'</h1>';
							}
							else
							{
								if(!empty($hostiko_redux_option['logo'])) {
								?>
									<img class="enter-logo" src="<?php echo $hostiko_redux_option['logo']['url']; ?>" title="">
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
			</a></div>
            <section class="error-404 ">
                <header class="page-header">
                    <h1 class="page-title">
					  <?php if(isset($hostiko_redux_option['404text2'])&&$hostiko_redux_option['404text2'])
				{
					echo esc_html_e($hostiko_redux_option['404text2'],'hostiko');
				}
				else
				{
					echo esc_html_e('Oops! That page can&rsquo;t be found.', 'hostiko');
				}
				 ?>
					</h1>
                </header><!-- .page-header -->
                <div class="page-404-content">
                    <p>
					 <?php if(isset($hostiko_redux_option['404text3'])&&$hostiko_redux_option['404text3'])
				{
					echo esc_html_e($hostiko_redux_option['404text3'],'hostiko');
				}
				else
				{
					echo esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'hostiko'); ;
				}
				 ?></p>
                    <div class="404page">
						<?php get_search_form();
						?>
                    </div>
                </div><!-- .page-content -->
            </section><!-- .error-404 -->
        </main><!-- #main -->
    </div><!-- #primary -->
    </div>
    </div>
</div>
<?php
get_footer('blank');
