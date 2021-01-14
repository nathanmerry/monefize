<?php

namespace Monefize\Route\Api;

class ContactForm extends \WP_REST_Controller
{
    public $namespace = 'wordpressbase/v1';

    public function __construct()
    {
        add_action('rest_api_init', [$this, 'registerRoutes']);
    }

    public function registerRoutes()
    {
        register_rest_route(
			$this->namespace,
			'/contact/',
			['methods' => 'GET', 'callback' => [$this, 'emailForm']]
		);
    }

    public function emailForm(\WP_REST_Request $request)
    {
        $body = $request->get_params();

        $headers = [
            "From: {$body['firstName']} {$body['lastName']} <{$body['email']}>", 
            "Phone Number: {$body['phone']}", 
            "Company: {$body['phone']}", 
        ];

        $mail = wp_mail( 'nathanmerry9713@gmail.com', 'Contact Form', 'hello', $headers );

        if ($mail) {
            return ['ok' => true];
        } else {
            return ['ok' => false];
        }
    }
}