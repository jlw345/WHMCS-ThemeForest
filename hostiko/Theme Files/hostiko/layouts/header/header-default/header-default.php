<?php
/**
 * Created by PhpStorm.
 * User: akd
 * Date: 8/12/2017
 * Time: 5:05 PM
 */
$hostiko_redux_option = get_option('opt_theme_options');
?>

<header id="masterhead" class="site-header">

    <div class="container">

        <div class="row">

            <nav class="navbar navbar-default">

                <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                        <div class="site-branding">

							<?php
							the_custom_logo();
							if (is_front_page() && is_home()) : ?>

                                <h3 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                          rel="home"><?php bloginfo('name'); ?></a></h3>

							<?php else : ?>

                                <h3 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                          rel="home"><?php bloginfo('name'); ?></a></h3>

								<?php
							endif;
							$description = get_bloginfo('description', 'display');
							if ($description || is_customize_preview()) : ?>

                                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>

								<?php
							endif; ?>

                        </div>

                    </div>


					<?php
					wp_nav_menu(array(
							'menu' => 'primary',
							'theme_location' => 'menu-1',
							'depth' => 2,
							'container' => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'bs-example-navbar-collapse-1',
							'menu_class' => 'nav navbar-nav pull-right',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker())
					);
					?>

                </div>

            </nav>

            <!--row-->

        </div>

        <!--container-->

    </div>

</header>


<div class="clearfix"></div>