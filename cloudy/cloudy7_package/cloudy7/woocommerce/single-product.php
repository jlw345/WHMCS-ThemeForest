<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
 $cloudy7_redux_demo = get_option('redux_demo');
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="top-header overlay bg-shop">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="wrapper">
              <div class="heading"><?php if(isset($cloudy7_redux_demo['shop_details_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['shop_details_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'E-Shop Details', 'cloudy7' );
                                    }
                                    ?></div>
              <div class="subheding">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="link"><?php if(isset($cloudy7_redux_demo['item1'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['item1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Home', 'cloudy7' );
                                    }
                                    ?></a> <i class="fas fa-star"></i>
                <a href="<?php the_permalink();?>" class="link active"><?php if(isset($cloudy7_redux_demo['item_shop_active'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['item_shop_active']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'e-shop details', 'cloudy7' );
                                    }
                                    ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    <section class="shopping details pb-80 sec-grad-green">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content-details b-solid">
                  <div class="plans badge feat bg-green"><?php echo esc_html('Only online' ,'cloudy7'); ?></div>

            

                <?php wc_get_template_part( 'content', 'single-product' ); ?>

                </div>
            </div>
            <div class="col-md-4">
                <aside class="sidebar b-solid">
                    <?php
            /**
             * woocommerce_sidebar hook.
             *
             * @hooked woocommerce_get_sidebar - 10
             */
            do_action( 'woocommerce_sidebar' );
                    ?>
                </aside>
            </div>
		</div>
	   </div>
	</section>

 <?php endwhile; // end of the loop. ?>
<?php get_footer( 'shop' ); ?>
