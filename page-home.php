<?php

    /* Template Name: Homepage */

    get_header();

?>
    <body>

    <script type="text/javascript"></script>

    <div class="container">
        <header class="codrops-header">
            <h1><?php the_field('main_title'); ?> <span><?php the_field('headline'); ?></h1>
            <p class="codrops-links"><a class="codrops-icon codrops-icon-drop" href="<?php the_field('left_text_link_url'); ?>"><span><?php the_field('left_text_link'); ?></span></a>
                <span class="right"><a class="codrops-icon codrops-icon-drop" href="<?php the_field('right_text_link_url'); ?>"><span><?php the_field('right_text_link'); ?></span></a></span></p>
            <nav class="codrops-demos">
                <a href="<?php the_field('button1_link'); ?>"><?php the_field('button1'); ?></a>
                <a href="<?php the_field('button2_link'); ?>"><?php the_field('button2'); ?></a>
                <!-- <a class="current-demo" href="index.php">On State</a> -->
            </nav>
            <div class="codrops-related">
                <?php the_field('footer_content_line'); ?><br />
                <a href="<?php the_field('footer_link1_text_url'); ?>"><?php the_field('footer_link1_text'); ?></a><br/>
                <a href="<?php the_field('footer_link2_text_url'); ?>"><?php the_field('footer_link2_text'); ?></a>
            </div>
        </header>

<?php get_footer(); ?>