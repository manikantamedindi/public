<?php
/*
Plugin Name: Advanced Custom Fields: MailChimp
Description: Ajax backend for handling MailChimp sign-ups. Uses Advanced Custom fields for configuration.
Author: Grid LLC
Author URI: https://workwithgrid.com/
Version: 2015.05.15
*/


require_once(dirname(plugin_dir_path(__FILE__)) . '/vendor/autoload.php');


add_action('wp_ajax_nopriv_acf-mailchimp-signup', 'acf_mailchimp_signup__ajax');
add_action('wp_ajax_acf-mailchimp-signup', 'acf_mailchimp_signup__ajax');


/**
 * ACF MailChimp: Ajax
 *
 * Ajax endpoint. Use acf_mailchimp_signup__url() to get URL.
 */
function acf_mailchimp_signup__ajax() {
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		acf_mailchimp_signup__json(array('error' => 'Request must use POST method.'));
	}

	$mc_api_key = get_field('mailchimp_api_key', 'options');
	$mc_reports_list_id = get_field('mailchimp_reports_list_id', 'options');

	if (!$mc_api_key) {
		acf_mailchimp_signup__json(array('error' => 'MailChimp API key option not set.'));
	}

	if (!$mc_reports_list_id) {
		acf_mailchimp_signup__json(array('error' => 'MailChimp list option not set.'));
	}

	$email = (isset($_REQUEST['email']) ? $_REQUEST['email'] : null);
	if (empty($email)) {
		acf_mailchimp_signup__json(array('error' => 'Email not provided.'));
	}

	$data = array('success' => true);
	$mc = new Mailchimp($mc_api_key);
	try {
		$response = $mc->lists->subscribe($mc_reports_list_id, array('email' => $email));
		$email = (isset($response['email']) ? $response['email'] : null);
	} catch (Mailchimp_List_AlreadySubscribed $e) {
	} catch (Mailchimp_ValidationError $e) {
		$data = array('error' => $e->getMessage());
	} 

	acf_mailchimp_signup__json($data);
}


/**
 * ACF MailChimp: JSON
 *
 * Helper for returning JSON.
 */
function acf_mailchimp_signup__json($data) {
	header('Content-Type: application/json');
	echo json_encode($data);
	exit;
}


/**
 * ACF MailChimp: Register Fields
 *
 * Call in functions.php to add MailChimp fields to ACF options page.
 */
function acf_mailchimp_signup__register_fields() {
	register_field_group(array(
		'key' => 'acf_mailchimp',
		'title' => 'MailChimp',
		'fields' => array(
			array(
				'key' => 'acf_mailchimp__key',
				'label' => 'MailChimp API Key',
				'name' => 'mailchimp_api_key',
				'type' => 'text',
			),
			array(
				'key' => 'acf_mailchimp__list',
				'label' => 'MailChimp Reports List ID',
				'name' => 'mailchimp_reports_list_id',
				'type' => 'text',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
				),
			),
		),
	));
}


/**
 * ACF MailChimp: URL
 *
 * @return string URL
 */
function acf_mailchimp_signup__url() {
	return get_bloginfo('url').'/wp-admin/admin-ajax.php?action=acf-mailchimp-signup';
}
