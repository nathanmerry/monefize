<?php

namespace Monefize\Enqueue;

class Enqueue
{
    public function __construct()
    {
        add_action('init', [$this, 'navigation']);
        add_action('wp_enqueue_scripts', [$this, 'enqueueStyle']);
        add_action('admin_enqueue_scripts', [$this, 'enqueueAdminStyle']);
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
        add_theme_support('post-thumbnails');
        add_filter('allowed_block_types', [$this, 'removeEditor'], 10, 2);
    }

    public function navigation()
    {
        register_nav_menus([
            'primary' => 'Primary Menu',
            'footer' => 'Footer Menu'
        ]);
    }

    public function getAsset($asset)
    {
        $manifest = get_stylesheet_directory() . '/dist/mix-manifest.json';

        if (file_exists($manifest)) {
            $manifest = json_decode(file_get_contents($manifest), true);
            if (isset($manifest[$asset])) {
                return get_stylesheet_directory_uri() . '/dist' . $manifest[$asset];
            }
        }

        return false;
    }

    public function enqueueStyle()
    {
        if ($this->getAsset('/css/app.css')) {
            wp_enqueue_style('MonefizeApp', $this->getAsset('/css/app.css'), false);
        }
    }

    public function enqueueAdminStyle() 
    {
        if ($this->getAsset('/css/admin.css')) {
            wp_enqueue_style('MonefizeAdmin', $this->getAsset('/css/admin.css'), false);
        }
    }

    public function enqueueScripts()
    {
        if ($this->getAsset('/js/app.js')) {
            wp_enqueue_script('themezilla', $this->getAsset('/js/app.js'), [], false, true);
        }
    }

    public function removeEditor($allowedBlocks, $post){
        if ($post->post_type === 'page') {
            return [];
        }       
    }
}
