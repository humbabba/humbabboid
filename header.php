<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php humbabboidGetSchemaType(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('m-[0px]'); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner" class="flex">
        <?php get_template_part('template-parts/components/branding'); ?>
        <?php get_template_part('template-parts/nav/top'); ?>
    </header>
    <div id="container">
        <main id="content" role="main">
