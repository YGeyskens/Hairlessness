<?php
// activate wordpress component
add_theme_support('post-thumbnails');

//register main menu
register_nav_menu('main','main navigation');

//page title
add_filter('wp_title', 'custom_wp_title');

//functions page title

function custom_wp_title($title){
    if(empty($title)){
        $title = 'Acceuil';
    }
    $title .= ' | ' . get_bloginfo('name');
    return trim($title);
}

// function nav menu

function hairlessness_getMenu($location)
{
    $menu = [];
    $locations = get_nav_menu_locations();

    foreach (wp_get_nav_menu_items($locations[$location]) as $post) {
        $item = new stdClass();
        $item->url = $post->url;
        $item->label = $post->title;
        $item->children = [];
        if (!$post->menu_item_parent) {
            $menu[$post->ID] = $item;
        } else {
            $menu[$post->menu_item_parent]->children[$post->ID] = $item;
        }
    }
    return $menu;
}

//history stories
function create_post_type()
{
    register_post_type('chaton',
        array(
            'labels' => array(
                'name' => 'chaton',
                'singular_name' => 'chaton'
            ),
            'description' => 'Ajouter un nouveau chaton',
            'hierarchical' => true,
            'support' => array('title', 'thumbnail', 'custom-fields', 'excerpt', 'revisions'),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'create_post_type');

function chat_adult(){
    register_post_type('adulte',
        array(
            'labels' => array(
                'name' => 'adulte',
                'singular_name' => 'adulte'
            ),
            'description' => 'Ajouter un nouveau chat adulte',
            'hierarchical' => true,
            'support' => array('title', 'thumbnail', 'custom-fields', 'excerpt', 'revisions'),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'chat_adult');