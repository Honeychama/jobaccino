<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php _e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'n/a', 'woocommerce' ); ?></span>.</span>

	<?php endif; ?>

	<?php echo $product->get_categories( ', ', '<span class="posted_in"><i class="el-icon-chevron-right"></i> ' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?>

	<?php echo $product->get_tags( ', ', '<span class="tagged_as"><i class="el-icon-chevron-right"></i> ' . _n( 'Tag:', 'Tags:', sizeof( get_the_terms( $post->ID, 'product_tag' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>