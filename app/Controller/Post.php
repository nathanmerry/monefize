<?php 
namespace Monefize\Controller;

use Tightenco\Collect\Support\Collection;

trait Post
{
    public $post = [];

    public function getPostAttribute($post = null, $loop = false)
    {
        if (!is_single() && !is_page() && !$post) {
            $this->post = new Collection([]);
            $this->keys($this->post);
        } else {
            $this->post = new Collection($post ?? get_post());
            $this->keys($this->post);
        }

        return $this->post->toArray();
    }

    private function keys($post)
    {
        foreach ($post as $key => $item) {
            unset($post[$key]);
            $key = str_replace('post_', '', strtolower($key));
            $post[$key] = $item;
        }

        $this->post = $post;
    }

    private function title($post, $loop = false)
    {
        if ($loop) {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                $title = get_the_title($home);
            } else {
                $title = 'Latest Posts';
            }
        }

        if (is_404()) {
            $title = 'Not Found';
        }

        $this->post['post_title'] = isset($title) ? $title : get_the_title();
    }

}