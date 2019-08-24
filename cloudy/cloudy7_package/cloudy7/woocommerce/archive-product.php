<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

	<div class="top-header overlay bg-shop">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="wrapper">
              <div class="heading"><?php if(isset($cloudy7_redux_demo['shop_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['shop_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'E-Shop ', 'cloudy7' );
                                    }
                                    ?></div>
              <div class="subheding">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="link"><?php if(isset($cloudy7_redux_demo['item1'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['item1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Home', 'cloudy7' );
                                    }
                                    ?></a> <i class="fas fa-star"></i>
                <a href="<?php the_permalink();?>" class="link active"><?php if(isset($cloudy7_redux_demo['item_shopindex_active'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['item_shopindex_active']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'e-shop', 'cloudy7' );
                                    }
                                    ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
	<main class="cd-main-content">
    <section class="cd-gallery eshop">
        <div class="container">
          <ul class="p-0 m-0">

		<?php if ( have_posts() ) : ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>
		</ul>
	</div> 
  </section>
</main>

<?php get_footer(); ?>
