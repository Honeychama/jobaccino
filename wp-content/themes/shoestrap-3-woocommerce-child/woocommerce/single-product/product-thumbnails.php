<?php
/**
 * Single Product Thumbnails
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();
$total = sizeof($attachment_ids);
if ( $total > 0 ) : ?>
	<div id="carousel" class="flexslider hidden-xs">
		<ul class="slides">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'thumbnail', false, '' ); ?>
				<li><a href="<?php echo $src[0]; ?>" rel="thumbnails"><?php the_post_thumbnail('thumbnail'); ?></a></li>
			<?php endif;

			$loop = 0;
			$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 3 );

			foreach ( $attachment_ids as $attachment_id ) :
				$image_link = wp_get_attachment_url( $attachment_id );

				if ( !$image_link ) :
					continue;
				endif;

				$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ) );
				$image_title = esc_attr( get_the_title( $attachment_id ) );

				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<li><a href="%s" rel="thumbnails">%s</a></li>', $image_link, $image), $attachment_id, $post->ID );

				$loop++;

			endforeach; ?>
		</ul>
	</div>
	<?php
endif;