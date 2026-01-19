<?php

function humbabboidDocumentTitleSeparator($sep)
{
    $sep = esc_html('|');
    return $sep;
}
add_filter('document_title_separator', 'humbabboidDocumentTitleSeparator');

function humbabboidTitle($title)
{
    if ($title == '') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    }
}
add_filter('the_title', 'humbabboidTitle');

add_filter('big_image_size_threshold', '__return_false');
function humbabboidImageInsertOverride($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'humbabboidImageInsertOverride');

function humbabboidSchemaUrl($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'humbabboidSchemaUrl', 10);