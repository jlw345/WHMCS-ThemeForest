<?php $cloudy7_redux_demo = get_option('redux_demo');?> 


<footer class="footer">
      <div class="top-footer-info">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-1' ); ?>
                                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="footer-top">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-2' ); ?>
                                <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-3' ); ?>
                                <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-4' ); ?>
                                <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-area-5' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-5' ); ?>
                                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="subcribe news">
        <div class="container">
          <div class="row">
            <form action="#" class="form">
              <div class="col-4 col-sm-4 col-md-5 col-lg-4">
                <span><?php if(isset($cloudy7_redux_demo['text_footer_1'])){?>
                                    <?php echo wp_specialchars_decode(esc_html($cloudy7_redux_demo['text_footer_1']),ENT_QUOTES);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Get The Newsletter', 'cloudy7' );
                                    }
                                    ?></span>
                <p><?php if(isset($cloudy7_redux_demo['text_footer_2'])){?>
                                    <?php echo wp_specialchars_decode(esc_html($cloudy7_redux_demo['text_footer_2']),ENT_QUOTES);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Subscribe to our newsletter to receive news and updates.', 'cloudy7' );
                                    }
                                    ?></p>
              </div>
              <div class="col-8 col-sm-8 col-md-7 col-lg-8">
                <?php if ( is_active_sidebar( 'footer-area-8' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-8' ); ?>
                                <?php endif; ?>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <?php if ( is_active_sidebar( 'footer-area-6' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-6' ); ?>
                                <?php endif; ?>
              </div>
              <div class="col-lg-6">
                <?php if ( is_active_sidebar( 'footer-area-7' ) ) : ?>
                                <?php dynamic_sidebar( 'footer-area-7' ); ?>
                                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
<?php wp_footer(); ?>
</body>
</html>