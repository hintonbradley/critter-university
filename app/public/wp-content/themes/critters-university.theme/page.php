<?php

    get_header();
    while(have_posts()) {
        the_post(); ?>
        <h1>This is a Page, and not posts</h1>
        <h3>
            <?php the_title(); ?>
        </h3>
        <p>
            <?php the_content(); ?>
        </p>
    <?php }

    get_footer();
?>