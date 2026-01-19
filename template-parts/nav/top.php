<nav id="menu" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'humbabboid'); ?>" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
    <div id="search" role="search"
         aria-label="<?php esc_attr_e('Search', 'humbabboid'); ?>"><?php get_search_form(); ?></div>
</nav>