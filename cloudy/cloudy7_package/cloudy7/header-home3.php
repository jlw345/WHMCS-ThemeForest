<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<?php $cloudy7_redux_demo = get_option('redux_demo'); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($cloudy7_redux_demo['favicon']['url'])){?><?php echo esc_url($cloudy7_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
  
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- preloader -->
        <div id="spinner-area">
              <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                    <div class="spinner-txt"><?php if(isset($cloudy7_redux_demo['loading'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['loading']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Cloudy...', 'cloudy7' );
                                    }
                                    ?></div>
              </div>
        </div>
        <!-- preloader -->

        <!-- header start -->

        <div class="menu-wrap navigation-menu classic">
            <div class="main-header">
                <div class="container">
                  <div class="header-info">
                    <div class="row">
                      <div class="col-3 col-sm-2">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php if(isset($cloudy7_redux_demo['logo']['url']) && $cloudy7_redux_demo['logo']['url'] != ''){ ?>
                                <img src="<?php echo esc_url($cloudy7_redux_demo['logo']['url']); ?>" alt="logo" class="logo-menu p-0">
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="logo" class="logo-menu p-0">
                            <?php } ?></a>
                      </div>
                      <div class="col-9 col-sm-10">
                        <div class="float-right pt-2">
                          <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuCoin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo esc_html__( 'USD ($)&nbsp; ', 'cloudy7' );?><span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuCoin">
                              <a class="dropdown-item" href=""><?php echo esc_html__( 'EUR (€)', 'cloudy7' );?></a>
                              <a class="dropdown-item" href=""><?php echo esc_html__( 'CNY (¥)', 'cloudy7' );?></a>
                            </div>
                          </div>
                          <span><?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['phone_text']));?></span> <a class="phone" href="<?php echo (esc_url($cloudy7_redux_demo['phone_link']));?>"><?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['phone_number']));?></a>
                          <a href="<?php echo (esc_url($cloudy7_redux_demo['cart_link']));?>" class="cart"> <i class="icon-cart"></i> <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['cart']));?></a>
                          <a href="<?php echo (esc_url($cloudy7_redux_demo['register_link']));?>" class="register"><?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['register_text']));?></a>
                          <a href="<?php echo (esc_url($cloudy7_redux_demo['button_link']));?>"> <div class="btn btn-default-green-fill question"><?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['text_button']));?></div></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="nav-menu">
        <?php 

                  wp_nav_menu( 

                  array( 

                        'theme_location' => 'primary',

                        'container' => '',

                        'menu_class' => '', 

                        'menu_id' => '',

                        'menu'            => '',

                        'container_class' => '',

                        'container_id'    => '',

                        'echo'            => true,

                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                         'walker'            => new cloudy7_wp_bootstrap_navwalker(),

                        'before'          => '',

                        'after'           => '',

                        'link_before'     => '',

                        'link_after'      => '',

                        'items_wrap'      => '<ul  class="main-menu  %2$s">%3$s</ul>',

                        'depth'           => 1,        

                    )

                 ); ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
        <!-- header end -->
        <div class="menu-wrap mobile">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php if(isset($cloudy7_redux_demo['logo-menu']['url']) && $cloudy7_redux_demo['logo-menu']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($cloudy7_redux_demo['logo-menu']['url']); ?>" alt="logo" class="logo-menu p-0">
                  <?php }else{ ?>
                      <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="logo" class="logo-menu p-0">
                  <?php } ?></a>
          </div>
          <div class="col-6">
            <nav class="nav-menu">
              <button id="nav-toggle" class="menu-toggle">
                <span class="icon"></span>
                <span class="icon"></span>
                <span class="icon"></span>
              </button>
              <?php 

                  wp_nav_menu( 

                  array( 

                        'theme_location' => 'primary',

                        'container' => '',

                        'menu_class' => '', 

                        'menu_id' => '',

                        'menu'            => '',

                        'container_class' => '',

                        'container_id'    => '',

                        'echo'            => true,

                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                         'walker'            => new cloudy7_wp_bootstrap_navwalker(),

                        'before'          => '',

                        'after'           => '',

                        'link_before'     => '',

                        'link_after'      => '',

                        'items_wrap'      => '<ul  class="main-menu  %2$s">%3$s</ul>',

                        'depth'           => 0,        

                    )

                 ); ?>
            </nav>
          </div>
        </div>
      </div>
    </div>