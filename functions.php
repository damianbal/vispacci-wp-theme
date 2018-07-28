<?php

function startvispacci_scripts()
{
    wp_enqueue_style('blog', get_template_directory_uri() . '/styles/theme.css');
}

add_action('wp_enqueue_scripts', 'startvispacci_scripts');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');
