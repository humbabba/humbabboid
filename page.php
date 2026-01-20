<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
            if(!is_front_page()) {
                ?>
                    <header class="header">
                        <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
                    </header>
                <?php
            }
        ?>
        <div class="entry-content" itemprop="mainContentOfPage">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('itemprop' => 'image'));
            } ?>
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>