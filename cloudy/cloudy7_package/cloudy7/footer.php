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