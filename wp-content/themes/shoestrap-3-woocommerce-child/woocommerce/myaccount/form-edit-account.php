<?php
/**
 * Edit account form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $ss_framework;
?>

<?php wc_print_notices(); ?>

<form action="" method="post">

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<p class="form-row form-row-first form-group">
		<label for="account_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text <?php echo $ss_framework->form_input_classes(); ?>" name="account_first_name" id="account_first_name" value="<?php esc_attr_e( $user->first_name ); ?>" />
	</p>
	<p class="form-row form-row-last form-group">
		<label for="account_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text <?php echo $ss_framework->form_input_classes(); ?>" name="account_last_name" id="account_last_name" value="<?php esc_attr_e( $user->last_name ); ?>" />
	</p>
	<p class="form-row form-row-wide form-group">
		<label for="account_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="email" class="input-text <?php echo $ss_framework->form_input_classes(); ?>" name="account_email" id="account_email" value="<?php esc_attr_e( $user->user_email ); ?>" />
	</p>
	<p class="form-row form-row-first form-group">
		<label for="password_1"><?php _e( 'Password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
		<input type="password" class="input-text <?php echo $ss_framework->form_input_classes(); ?>" name="password_1" id="password_1" />
	</p>
	<p class="form-row form-row-last form-group">
		<label for="password_2"><?php _e( 'Confirm new password', 'woocommerce' ); ?></label>
		<input type="password" class="input-text <?php echo $ss_framework->form_input_classes(); ?>" name="password_2" id="password_2" />
	</p>
	<?php echo $ss_framework->clearfix(); ?>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<p><input type="submit" class="<?php echo $ss_framework->button_classes( 'primary', 'block', null, null ); ?>" name="save_account_details" value="<?php _e( 'Save changes', 'woocommerce' ); ?>" /></p>

	<?php wp_nonce_field( 'save_account_details' ); ?>
	<input type="hidden" name="action" value="save_account_details" />

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>