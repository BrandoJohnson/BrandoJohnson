<?php

    /* Template Name: Homepage */

    get_header();

?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style_sassy.css" media="screen" />

    <body>

    <script type="text/javascript"></script>

    <div class="container">
        <header class="codrops-header">
            <h1><?php the_field('main_title'); ?> <span><?php the_field('headline'); ?></h1>
            <p>Web Developer from Minneapolis MNNK. I own Public Service Websites and also do a fair amount of free lance development work. Feel free to get in touch!</p>
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