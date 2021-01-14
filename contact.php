<?php
/*
    Template Name: Contact
    Template Post Type: page
*/

class Contact extends Monefize\Controller\Base {
    public $template = "contact";

    public function getContactAttribute() {
        $fields = get_field('contact');        
        
        return $fields;
    }
}

new Contact;