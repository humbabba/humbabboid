<?php

function humbabboidSetup()
{
    load_theme_textdomain('humbabboid', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets'));
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
    add_theme_support('appearance-tools');
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'humbabboid')));
}
add_action('after_setup_theme', 'humbabboidSetup');

function humbabboidEnqueue()
{
    wp_enqueue_style('humbabboid-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'humbabboidEnqueue');
function humbabboidFooter()
{
    ?>
    <script>
        (function () {
            const ua = navigator.userAgent.toLowerCase();
            const html = document.documentElement;
            if (/(iphone|ipod|ipad)/.test(ua)) {
                html.classList.add('ios', 'mobile');
            } else if (/android/.test(ua)) {
                html.classList.add('android', 'mobile');
            } else {
                html.classList.add('desktop');
            }
            if (/chrome/.test(ua) && !/edg|brave/.test(ua)) {
                html.classList.add('chrome');
            } else if (/safari/.test(ua) && !/chrome/.test(ua)) {
                html.classList.add('safari');
            } else if (/edg/.test(ua)) {
                html.classList.add('edge');
            } else if (/firefox/.test(ua)) {
                html.classList.add('firefox');
            } else if (/brave/.test(ua)) {
                html.classList.add('brave');
            } else if (/opr|opera/.test(ua)) {
                html.classList.add('opera');
            }
        })();
    </script>
    <?php
}
add_action('wp_footer', 'humbabboidFooter');
function humbabboidWidgetsInit()
{
    register_sidebar(array(
            'name' => esc_html__('Sidebar Widget Area', 'humbabboid'),
            'id' => 'primary-widget-area',
            'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'humbabboidWidgetsInit');