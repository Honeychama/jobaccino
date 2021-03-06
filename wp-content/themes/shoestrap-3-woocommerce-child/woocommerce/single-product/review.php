<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $ss_framework;
$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
?>
<li itemprop="reviews" itemscope itemtype="http://schema.org/Review" <?php comment_class( 'media' ); ?> id="comment-<?php comment_ID(); ?>">
	<div class="pull-left"><?php echo get_avatar($comment, $size = '64'); ?></div>
	<div class="media-body">
		
			<?php if ( $rating && get_option( 'woocommerce_enable_review_rating' ) == 'yes' ) : ?>

				<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="<?php echo sprintf( __( 'Rated %d out of 5', 'woocommerce' ), $rating ) ?>">
					<span style="width:<?php echo ( $rating / 5 ) * 100; ?>%"><strong itemprop="ratingValue"><?php echo $rating; ?></strong> <?php _e( 'out of 5', 'woocommerce' ); ?></span>
				</div>

			<?php endif; ?>

		<?php if ( $comment->comment_approved == '0' ) : ?>
			<?php echo $ss_framework->alert( 'info', '<em>'. __( 'Your comment is awaiting approval.', 'woocommerce' ).'</em>', null, 'meta', true ); ?> ?>
		<?php else : ?>
			<div class="meta">
				<strong itemprop="author"><?php comment_author(); ?></strong> <?php

					if ( get_option('woocommerce_review_rating_verification_label') == 'yes' )
						if ( wc_customer_bought_product( $comment->comment_author_email, $comment->user_id, $comment->comment_post_ID ) )
							echo '<em class="verified">(' . __( 'verified owner', 'woocommerce' ) . ')</em> ';

				?>&ndash; <time itemprop="datePublished" datetime="<?php echo get_comment_date('c'); ?>"><?php echo get_comment_date(__( get_option('date_format'), 'woocommerce' )); ?></time>:
			</div>

		<?php endif; ?>

		<div itemprop="description" class="description"><?php comment_text(); ?></div>
	</div>