<?php
/**
 * The Template for displaying all single posts
 */
 $cloudy7_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<!-- basic-breadcrumb start -->

<div class="top-header overlay item5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="wrapper">
              <div class="heading"><?php the_title();?></div>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- basic-breadcrumb end -->
<!-- blog-area start -->
<section class="shopping blog mb-80 page-style blog-single1">
    <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-7" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <div class="wrap-blog">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="blogg mb-80">
                    <div class="wrapper">
                      <div class="blog-wrapper blog-details">
                        <div class="blog-thumb">
                          <a href="<?php the_permalink();?>">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  />
                            <?php } ?>
                          </a>
                        </div>
                        <div class="blog-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array(
                            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'cloudy7' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                            ) ); ?>
                        </div>
                        <div class="next-prev-post clearfix">
                          <?php previous_post_link('%link',wp_specialchars_decode(esc_html__( '<i class="ion-arrow-left-c"></i> Previous Post','cloudy7'),ENT_QUOTES), true); ?>
                          <div class='right'><?php next_post_link('%link',wp_specialchars_decode(esc_html__('Next Post <i class="ion-arrow-right-c"></i>','cloudy7'),ENT_QUOTES), true); ?></div>
                        </div>
                       <?php           
                          if ( comments_open() || get_comments_number() ) {
                            comments_template();
                          }
                          ?>
                      </div>
                  </div> 
                </div>       
              </div>
              </div> 
            </div>       
          </div>
          <div class="col-lg-4 col-md-5 shopping">
            <aside class="sidebar b-solid">
            <?php get_sidebar();?>
            </aside>
          </div>
      </div>
    </div>
</section>
  <?php endwhile; ?>

  <!-- blog-area end -->
 <?php get_footer();?>