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
			['methods' => 'POST', 'callback' => [$this, 'emailForm']]
		);
    }

    public function emailForm(\WP_REST_Request $request)
    {
        $fields = $request->get_param("fields");

        $mail = wp_mail(
            'nathanmerry9713@gmail.com',
            'hello',
            wpautop('hello'),
            ['Content-Type: text/html; charset=UTF-8']
        );

        return $mail;

        // return [$fields, $sent];
    }
}