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
                    <?php } ?>
                </a>
              </div>
              <div class="col-9 col-sm-10">
                <div class="float-right pt-2">
                  <div class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if(isset($cloudy7_redux_demo['flag1']['url']) && $cloudy7_redux_demo['flag1']['url'] != ''){ ?>
                      <img src="<?php echo esc_url($cloudy7_redux_demo['flag1']['url']); ?>" width="16">
                    <?php }else{ ?>
                      <img src="<?php echo get_template_directory_uri();?>/img/en-flag.svg" width="16" alt="en">
                    <?php } ?> 
                    <?php if(isset($cloudy7_redux_demo['language1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['language1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( ' English', 'cloudy7' );
                                    }
                                    ?><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLang">
                      <a class="dropdown-item" href="">
                        <?php if(isset($cloudy7_redux_demo['flag2']['url']) && $cloudy7_redux_demo['flag2']['url'] != ''){ ?>
                          <img src="<?php echo esc_url($cloudy7_redux_demo['flag2']['url']); ?>" width="16">
                        <?php }else{ ?>
                          <img src="<?php echo get_template_directory_uri();?>/img/es-flag.svg" width="16" alt="es">
                        <?php } ?>
                         <?php if(isset($cloudy7_redux_demo['language2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['language2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( ' Español', 'cloudy7' );
                                    }
                                    ?>
                      </a>
                      <a class="dropdown-item" href="">
                        <?php if(isset($cloudy7_redux_demo['flag3']['url']) && $cloudy7_redux_demo['flag3']['url'] != ''){ ?>
                          <img src="<?php echo esc_url($cloudy7_redux_demo['flag3']['url']); ?>" width="16">
                        <?php }else{ ?>
                          <img src="<?php echo get_template_directory_uri();?>/img/de-flag.svg" width="16" alt="de">
                        <?php } ?>
                         <?php if(isset($cloudy7_redux_demo['language3'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['language3']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( ' Deutsch', 'cloudy7' );
                                    }
                                    ?>
                      </a>
                    </div>
                  </div>
                  <div class="dropdown">
                      <a class="dropdown-toggle" id="dropdownMenuCoin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo esc_html__( 'USD ($)&nbsp; ', 'cloudy7' );?><span class="caret"></span>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuCoin">
                        <a class="dropdown-item" href=""><?php echo esc_html__( 'EUR (€)', 'cloudy7' );?></a>
                        <a class="dropdown-item" href=""><?php echo esc_html__( 'CNY (¥)', 'cloudy7' );?></a>
                      </div>
                  </div>
                  <span><?php if(isset($cloudy7_redux_demo['phone_text'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['phone_text']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Phone :', 'cloudy7' );
                                    }
                                    ?></span> 
                        <a class="phone" href="<?php if(isset($cloudy7_redux_demo['phone_link'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['phone_link']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'tel:+0000000000', 'cloudy7' );
                                    }
                                    ?>">
                        <?php if(isset($cloudy7_redux_demo['phone_number'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($cloudy7_redux_demo['phone_number']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '+ (123) 1300-656-1046', 'cloudy7' );
                                    }
                                    ?></a>
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

                        'items_wrap'      => '<ul  class="main-menu %2$s">%3$s</ul>',

                        'depth'           => 0,        

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