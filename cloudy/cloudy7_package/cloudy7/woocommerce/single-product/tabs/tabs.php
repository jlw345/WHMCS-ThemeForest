<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

$product_spe = get_post_meta(get_the_ID(),'_cmb_product_spe', true);
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

<div class="container">
	<div class="row">
		<div class="section-offer img-bg services">
			<div class="tabs offers-tabs">
                <div class="tabs-header mb-5">
					<ul class="nav nav-tabs">
						<?php $i = 1; foreach ( $tabs as $key => $tab ) : ?>
							<li class="<?php if ($i == 1){echo 'active'; } ?> <?php echo esc_attr( $key ); ?>_tab">
								<a href="#tab-<?php echo esc_attr( $key ); ?>" data-toggle="tab"><i class="icon-document"></i></a>
								<a href="#tab-<?php echo esc_attr( $key ); ?>" data-toggle="tab"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
							</li>
						<?php $i++; endforeach; ?>
						<?php if($product_spe){ ?>
						<li><a href="#tab2default" data-toggle="tab"><?php echo esc_html__( 'Specification', 'cloudy7' );?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="tabs-content text-left">
        <div class="tab-content">
			<?php $i = 1; foreach ( $tabs as $key => $tab ) : ?>
				<div class="tab-pane fade <?php if ($i == 1){echo 'in active show'; } ?>" id="tab-<?php echo esc_attr( $key ); ?>">
					<?php call_user_func( $tab['callback'], $key, $tab ); ?>
				</div>
			<?php $i++; endforeach; ?>
			<div id="tab2default" class="tab-pane fade">
	          <p><?php echo esc_attr($product_spe); ?></p>
	        </div>
		</div>
	</div>

</div>

<?php endif; ?>
