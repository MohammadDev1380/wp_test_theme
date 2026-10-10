<?php
define('THEME_DIR', get_template_directory_uri());

add_action('init','add_theme_support_func');

add_action('init','register_my_menu');

// add_action('page_content', 'page_content_callback', 2);

// add_action('page_content','page_content_callback2', 1);

function add_theme_support_func() {
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}

function register_my_menu() {
    register_nav_menus(array('primary' => 'منوی اصلی', 'secondary' => 'منوی ثانویه'));
}

// function page_content_callback() {
//     echo '<div class="page-content">';
//     echo '<h1>محتوای صفحه</h1>';
//     echo '</div>';
// }

// function page_content_callback2() {
//     echo '<p>اینجی واس ماس</p>';
// }

// function wellcome_text() {
//     $text = 'خوش آمدید';
//     return apply_filters('wellcome_text_filter', $text);
// }

// add_filter('wellcome_text_filter','wellcome_text_callback');
// function wellcome_text_callback($text) {
//     return $text.'<p>this is a  filter</p>';
// }