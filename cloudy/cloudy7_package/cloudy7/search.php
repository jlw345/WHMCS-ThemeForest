<?php
     $cloudy7_redux_demo = get_option('redux_demo');
     get_header(); 
?>


    <div class="top-header overlay item5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="wrapper">
              <div class="heading"><?php printf( esc_html__( 'Search Results for: %s', 'cloudy7' ), get_search_query() ); ?>     
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


 <section class="shopping blog mb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <?php  if ( have_posts() ) :
                while (have_posts()): the_post(); 
            ?>
            <?php $post_select = get_post_meta(get_the_ID(),'_cmb_post_select', true); ?>
            <div class="wrap-blog">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="blogg1">
                    
                    <?php if ( has_post_thumbnail() ) { ?>
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"   class="img-responsive">
                    <?php } ?>
                    <div class="wrapper">
                      <div class="heading blog"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                        <?php if ( is_sticky() )
                                   echo '<span class="featured-post">' . esc_html__( 'Sticky', 'cloudy7' ) . '</span>';
                                   ?></div>
                      <div class="text-blog">
                        <i class="icon-man"></i>
                        <span class="pl-2"> <?php the_author_posts_link(); ?></span>
                        <i class="icon-calendar"></i>
                        <span class="pl-2 pr-4"> <?php the_time(get_option( 'date_format' ));?></span>
                      </div>
                      <div class="blog-info">
                        <p>
                        <?php echo cloudy7_content(35); ?>
                        </p>
                      </div>
                      <a href="<?php the_permalink();?>" class="btn btn-default-green-fill"><?php if(isset($cloudy7_redux_demo['read_more'])){?>
                                    <?php echo wp_specialchars_decode(esc_html($cloudy7_redux_demo['read_more']),ENT_QUOTES);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read More', 'cloudy7' );
                                    }
                                    ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; else :?>
            <div class="search-custom" ><h4><?php
                // If no content, include the "No posts found" template.
                echo esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cloudy7' ) ;?></h4>
                <?php get_search_form();?>
            </div>
            <?php endif;?>
            <div class="pagination">
            <?php cloudy7_pagination();?>
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

    <!-- FOOTER -->
<?php
    get_footer();
?>