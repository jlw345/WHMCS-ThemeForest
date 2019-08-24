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
	<?php if (is_sticky() && is_home() && !is_paged()) : ?>
      <div class="featurepost stickypost">
				<?php if (has_post_thumbnail()) : ?>
            <div class="entry-media-sticky">
                <div class="hostiko-thumbnail-sticky">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<?php the_post_thumbnail('full'); ?> </a>
                </div>
            </div>
            <div class="post-content-sticky">
                <header class="entry-header-sticky">
									<?php
									if (is_singular()) :
										the_title('<h1 class="entry-title-sticky">', '</h1>');
									else :
										the_title('<h2 class="entry-title-sticky"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
									endif;
									?>
                </header><!-- .entry-header -->
                <footer class="entry-footer-sticky">
									<?php //hostiko_entry_footer();
									if ('post' === get_post_type()) : ?>
                      <div class="entry-meta-sticky">
												<?php hostiko_posted_on(); ?>
                      </div><!-- .entry-meta -->
										<?php
									endif;
									?>
                </footer><!-- .entry-footer -->
            </div>
				<?php else: ?>
            <div class="post-content-wrapper">
                <header class="entry-header">
									<?php
									if (is_singular()) :
										the_title('<h1 class="entry-title">', '</h1>');
									else :
										the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
									endif;
									?>
                </header><!-- .entry-header -->
                <div class="entry-content">
									<?php
									the_excerpt(sprintf(
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
                <footer class="entry-footer">
									<?php //hostiko_entry_footer();
									if ('post' === get_post_type()) : ?>
                      <div class="entry-meta">
												<?php hostiko_posted_on(); ?>
                      </div><!-- .entry-meta -->
										<?php
									endif;
									?>
                </footer><!-- .entry-footer -->
            </div>
				<?php endif; ?>
      </div>
	<?php else: ?>
		<?php if (has_post_thumbnail()) : ?>
          <div class="entry-media">
              <div class="hostiko-thumbnail">
	              <?php
//echo 'value'.$hostiko_redux_option['featureimagesblog'] ;
	              if ( isset($hostiko_redux_option['featureimagesblog']) && $hostiko_redux_option['featureimagesblog'] == 1) {
	              ?>
                  <div class="ovrly04">
                      <img src="<?php the_post_thumbnail_url('full') ?>" alt="">
                      <div class="ovrlyT"></div>
                      <div class="ovrlyB"></div>
                      <div class="buttons">
                          <a href="<?php echo get_permalink(); ?>" class="fa fa-link"></a>
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
		<?php endif; ?>
      <div class="post-content-wrapper">
          <header class="entry-header">
						<?php if (has_post_thumbnail()) { ?>
	          <?php
	          if ( isset($hostiko_redux_option['featureimagesblog']) && $hostiko_redux_option['featureimagesblog'] == 1) {
		          ?>
                <div class="author-wrap">
            <span class="inside">
            	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                   title="<?php echo get_the_author_meta('display_name'); ?>"> <?php echo get_avatar(get_the_author_meta('ID'), 268); ?></a>
            </span>
                </div>
						<?php }  }?>
						<?php
						if (is_singular()) :
							the_title('<h1 class="entry-title">', '</h1>');
						else :
							the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
						endif;
						?>
              <div class="post-meta">
                  <ul>
                      <li><i class="fa fa-calendar"></i>
                          <span class="publish-on"><a
                                      href="<?php echo get_permalink(); ?>"><?php echo get_the_date(); ?></a></span></li>
                      <li><i class="fa fa-tag"></i><?php the_category(', '); ?></li>
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
      </div>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
