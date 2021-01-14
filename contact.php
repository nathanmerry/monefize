<?php
/*
    Template Name: Contact
    Template Post Type: page
*/

class Contact extends Monefize\Controller\Base {
    public $template = "contact";

    use \Monefize\Controller\Modular;
}

new Contact;