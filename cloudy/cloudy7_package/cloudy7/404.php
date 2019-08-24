<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
    $cloudy7_redux_demo = get_option('redux_demo');
    get_header(); 
?> 
    <!-- 
    404 ERROR
    -->
    <section class="sec-normal">
      <div class="container">
        <div class="sec-main sec-bg1 sec-grad-purple">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-404">
                <div class="title">
                  <span><?php if(isset($cloudy7_redux_demo['404_heading'])){?>
                                    <?php echo wp_specialchars_decode(esc_html($cloudy7_redux_demo['404_heading']),ENT_QUOTES);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404 Page Not Found', 'cloudy7' );
                                    }
                                    ?></span>
                </div><br>
                <h5><?php if(isset($cloudy7_redux_demo['404_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_html($cloudy7_redux_demo['404_title']),ENT_QUOTES);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Page you looking for does not exist', 'cloudy7' );
                                    }
                                    ?></h5>
                <p class="subtitle"><?php if(isset($cloudy7_redux_demo['404_subtitle'])){?>
                                    <?php echo wp_specialchars_decode(esc_html($cloudy7_redux_demo['404_subtitle']),ENT_QUOTES);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Use button below to go main page', 'cloudy7' );
                                    }
                                    ?></p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-default-grad-purple-fill"><?php if(isset($cloudy7_redux_demo['404_textbutton'])){?>
                                    <?php echo wp_specialchars_decode(esc_html($cloudy7_redux_demo['404_textbutton']),ENT_QUOTES);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Go Home Page', 'cloudy7' );
                                    }
                                    ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  
<?php
get_footer(); ?> 
