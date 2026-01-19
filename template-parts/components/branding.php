<div id="branding">
    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <?php
        if (is_front_page() || is_home() || is_front_page() && is_home()) {
            echo '<h1>';
        }
        echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
        if (is_front_page() || is_home() || is_front_page() && is_home()) {
            echo '</h1>';
        }
        ?>
    </div>
    <div id="site-description"<?php if (!is_single()) {
        echo ' itemprop="description"';
    } ?>><?php bloginfo('description'); ?></div>
</div><?php
