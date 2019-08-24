<?php
   $cloudy7_redux_demo = get_option('redux_demo');
   get_header(); 
?>
<?php 
    while (have_posts()): the_post();
?>
<?php $post_select = get_post_meta(get_the_ID(),'_cmb_post_select', true); ?>
<?php $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true); ?>
<?php $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true); ?>
<?php $single_linkedin = get_post_meta(get_the_ID(),'_cmb_single_linkedin', true); ?>
<!-- page title start -->
    <div class="top-header overlay item5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="wrapper">
              <div class="heading"><?php the_title();?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- page title end -->
<section class="shopping blog mb-80 post-style blog-single1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div class="wrap-blog">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="blogg mb-80">
                    <div class="wrapper">
                    <?php if ( has_post_thumbnail() ) { ?>
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"   class="img-responsive single-thumbnail">
                    <?php } ?>
                      <div class="row text-blog mt-0">
                        <div class="col-sm-12 col-md-12 col-lg-8 p-0">
                          <i class="icon-man"></i>
                          <span class="pl-2">  <?php the_author_posts_link(); ?></span>
                          <i class="icon-calendar"></i>
                          <span class="pl-2 pr-4"> <?php the_time(get_option( 'date_format' ));?></span>
                        </div>
                        <p><?php if ( is_sticky() )
                                           echo '<span class="featured-post">' . esc_html__( 'Sticky', 'cloudy7' ) . '</span>';
                                           ?>
                                         </p>
                      </div>
                      <div class="blog-info">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array(
                            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'cloudy7' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                            ) ); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                    <?php comments_template();?>
            </div>
          </div>
          <!-- sidebar -->
          <div class="col-lg-4 col-md-5 shopping">
            <aside class="sidebar b-solid">
              <?php get_sidebar();?>
            </aside>
          </div>
        </div>
      </div>
    </section>


<?php endwhile; ?>
    <!-- FOOTER -->
<?php
    get_footer();
?>