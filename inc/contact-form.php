<?php
/**
 * Contact form handler.
 *
 * @package Idiom_Digital
 */

add_action( 'admin_post_nopriv_idiom_contact_form', 'idiom_handle_contact_form' );
add_action( 'admin_post_idiom_contact_form', 'idiom_handle_contact_form' );

function idiom_handle_contact_form() {
	if (
		! isset( $_POST['idiom_contact_nonce'] ) ||
		! wp_verify_nonce(
			sanitize_text_field( wp_unslash( $_POST['idiom_contact_nonce'] ) ),
			'idiom_contact_form'
		)
	) {
		wp_die( esc_html__( 'Security check failed.', 'idiom-digital' ) );
	}

	$name    = isset( $_POST['name'] )
		? sanitize_text_field( wp_unslash( $_POST['name'] ) )
		: '';

	$email   = isset( $_POST['email'] )
		? sanitize_email( wp_unslash( $_POST['email'] ) )
		: '';

	$company = isset( $_POST['company'] )
		? sanitize_text_field( wp_unslash( $_POST['company'] ) )
		: '';

	$project = isset( $_POST['project'] )
		? sanitize_textarea_field( wp_unslash( $_POST['project'] ) )
		: '';

	$budget  = isset( $_POST['budget'] )
		? sanitize_text_field( wp_unslash( $_POST['budget'] ) )
		: '';

	if ( empty( $name ) || empty( $email ) || empty( $project ) || ! is_email( $email ) ) {
		idiom_contact_redirect( 'error' );
	}

	$budget_labels = array(
		'under-5k' => 'Under £5,000',
		'5k-10k'   => '£5,000–£10,000',
		'10k-25k'  => '£10,000–£25,000',
		'25k-plus'  => '£25,000+',
		'not-sure'  => 'Not sure yet',
	);

	$budget_label = isset( $budget_labels[ $budget ] )
		? $budget_labels[ $budget ]
		: 'Not provided';

	$subject = sprintf(
		'New Idiom Digital enquiry from %s',
		$name
	);

	$message = implode(
		"\n\n",
		array(
			"Name:\n{$name}",
			"Email:\n{$email}",
			"Company:\n" . ( $company ? $company : 'Not provided' ),
			"Budget:\n{$budget_label}",
			"Project:\n{$project}",
		)
	);

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $name, $email ),
	);

	$sent = wp_mail(
		'hello@idiomdigital.com',
		$subject,
		$message,
		$headers
	);

	idiom_contact_redirect( $sent ? 'success' : 'error' );
}

function idiom_contact_redirect( $status ) {
	$url = add_query_arg(
		'contact',
		$status,
		home_url( '/contact/' )
	);

	wp_safe_redirect( $url );
	exit;
}