<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;

global $ss_framework;
?>

<?php foreach ( $messages as $message ) : ?>
	<?php $content = wp_kses_post( $message ); ?>
	<?php echo $ss_framework->alert( 'info', $content, null, 'woocommerce-info', true ); ?>
<?php endforeach;
