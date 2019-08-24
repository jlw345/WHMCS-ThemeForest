<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hostiko
 */
$hostiko_redux_option = get_option('opt_theme_options');
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php if (has_post_thumbnail()) : ?>

          <div class="entry-media">
              <div class="hostiko-thumbnail">
				<?php

				if ( isset($hostiko_redux_option['featureimagesingle']) && $hostiko_redux_option['featureimagesingle'] == 1) {

					?>
                  <div class="ovrly04">
                      <img src="<?php the_post_thumbnail_url('full') ?>" alt="">
                      <div class="ovrlyT"></div>
                      <div class="ovrlyB"></div>
                      <div class="buttons">
                          <a target="_blank" href="<?php the_post_thumbnail_url('full') ?>" class="fa fa-search"></a>

                          <a target="_blank" class="fa fa-twitter"
                             href="http://twitter.com/share?text=<?php echo strip_tags(get_the_excerpt()); ?>&url=<?php echo urlencode(get_permalink()); ?>"></a>
                          <a target="_blank" class="fa fa-facebook"
                             href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"></a>
                          <a target="_blank" class="fa fa-google"
                             href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php echo urlencode(get_permalink()); ?>"></a>
                      </div>
                  </div>

<?php } ?>
              </div>
          </div>


			<?php  endif; ?>


        <div class="post-content-wrapper">
            <header class="entry-header">
							<?php if (has_post_thumbnail()) { ?>
                             <?php  if ( isset($hostiko_redux_option['featureimagesingle']) && $hostiko_redux_option['featureimagesingle'] == 1) {

                                ?>
                  <div class="author-wrap">
            <span class="inside">
            	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                   title="<?php echo get_the_author_meta('display_name'); ?>"> <?php echo get_avatar(get_the_author_meta('ID'), 268); ?></a>
            </span>
                  </div>


							<?php } } ?>
							
							<?php
							if (is_singular()) :
								the_title('<h2 class="entry-title">', '</h2>');
							else :
								the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
							endif;
							?>

                <div class="post-meta single-meta">
                    <ul>
                        <li><i class="fa fa-calendar"></i>
                            <span class="publish-on"><a
                                        href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></span>
                        </li>
											<?php if (has_category()) {?>
                          <li><i class="fa fa-tag"></i><?php the_category(', '); ?></li>
											<?php } ?>

                        <li><i class="fa fa-comment-o"></i><a
                                    href="<?php the_permalink(); ?>#comments"> <?php comments_number(); ?></a></li>


                    </ul>
                </div>

            </header><!-- .entry-header -->

            <div class="entry-content">
							<?php
							the_content(sprintf(
									wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
											__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'hostiko'),
											array(
													'span' => array(
															'class' => array(),
													),
											)
									),
									get_the_title()
							));
							wp_link_pages(array(
									'before' => '<div class="page-links">' . esc_html__('Pages:', 'hostiko'),
									'after' => '</div>',
							));
							?>
            </div><!-- .entry-content -->
					<?php if(has_tag()) { ?>
              <div class="footer-post">
								<?php the_tags(); ?>
              </div>
					<?php } ?>

        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
<?php
if (!empty (get_the_author_meta('description'))) {
	?>

    <div class="author_box clearfix">
        <span class="inside">
            	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                   title="<?php echo get_the_author_meta('display_name'); ?>"> <?php echo get_avatar(get_the_author_meta('ID'), 268); ?></a>
            </span>

        <h4>
					<?php _e('Author by : ', 'hostiko'); ?>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>">
							<?php echo get_the_author_meta('display_name'); ?>
            </a>
        </h4>
			<?php echo get_the_author_meta('description'); ?>

        <div class="author-social">
					<?php  // Get author's website URL
					
					
					// Get author's Facebook
					$user_facebook = get_the_author_meta('facebook', $post->post_author);
					
					// Get author's Skype
					$user_skype = get_the_author_meta('skype', $post->post_author);
					
					// Get author's Twitter
					$user_twitter = get_the_author_meta('twitter', $post->post_author);
					
					// Get author's LinkedIn
					$user_linkedin = get_the_author_meta('linkedin', $post->post_author);
					
					// Get author's Youtube
					$user_youtube = get_the_author_meta('youtube', $post->post_author);
					
					
					
					?>
            <ul>


                <li><?php if ( ! empty( $user_facebook ) ) {?>

                        <a href="<?php echo esc_url($user_facebook,'hostiko'); ?>" target="_blank" rel="nofollow" ><i class="fa fa-facebook"></i></a>
									<?php } ?>
                </li>

                <li><?php if ( ! empty( $user_skype ) ) {?>

                        <a href="<?php echo esc_url($user_skype,'hostiko'); ?>" target="_blank" rel="nofollow" ><i class="fa fa-skype"></i></a>
									<?php } ?>
                </li>
                <li><?php if ( ! empty( $user_twitter ) ) {?>

                        <a href="<?php echo esc_url($user_twitter,'hostiko'); ?>" target="_blank" rel="nofollow" ><i class="fa fa-twitter"></i></a>
									<?php } ?>
                </li>
                <li><?php if ( ! empty( $user_linkedin ) ) {?>

                        <a href="<?php echo esc_url($user_linkedin,'hostiko'); ?>" target="_blank" rel="nofollow" ><i class="fa fa-linkedin"></i></a>
									<?php } ?>
                </li>
                <li><?php if ( ! empty( $user_youtube ) ) {?>

                        <a href="<?php echo esc_url($user_youtube,'hostiko'); ?>" target="_blank" rel="nofollow" ><i class="fa fa-youtube"></i></a>
									<?php } ?>
                </li>


            </ul>


        </div>

    </div>
<?php } ?>