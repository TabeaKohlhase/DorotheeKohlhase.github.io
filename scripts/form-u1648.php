<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.0.0.379
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Kontakt Formular Übermittlung',
	'heading' => 'Neue Formularübermittlung',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Aktiviert',
		'checkbox_unchecked' => 'Nicht aktiviert',
		'submitted_from' => 'Von Website übermitteltes Formular: %s',
		'submitted_by' => 'Besucher-IP-Adresse: %s',
		'too_many_submissions' => 'Zu viele Sendungen in letzter Zeit von dieser IP',
		'failed_to_send_email' => 'E-Mail konnte nicht gesendet werden',
		'invalid_reCAPTCHA_private_key' => 'Ungültiger privater reCAPTCHA-Schlüssel.',
		'invalid_reCAPTCHA2_private_key' => 'Ungültiger privater reCAPTCHA 2.0-Schlüssel.',
		'invalid_reCAPTCHA2_server_response' => 'Ungültige private reCAPTCHA 2.0-Server-Reaktionszeit.',
		'invalid_field_type' => 'Unbekannter Feldtyp „%s“.',
		'invalid_form_config' => 'Die Konfiguration im Feld „%s“ ist ungültig.',
		'unknown_method' => 'Unbekannte Serveranfragemethode'
	),
	'email' => array(
		'from' => 'dorotheekohlhase@gmail.com',
		'to' => 'dorotheekohlhase@gmail.com'
	),
	'fields' => array(
		'custom_U1655' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Feld „Name“ ist erforderlich.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'E-Mail',
			'required' => true,
			'errors' => array(
				'required' => 'Feld „E-Mail“ ist erforderlich.',
				'format' => 'Die E-Mail-Adresse in Feld „E-Mail“ ist ungültig.'
			)
		),
		'custom_U1649' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Nachricht',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
