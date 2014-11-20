<?php

/* Template Name: Websites */

get_header();

?>
<body>

    <script type="text/javascript"></script>

<div class="container">
    <header class="codrops-header">
        <h1><?php the_field('main_title'); ?> <span><?php the_field('headline'); ?></h1>
        <p class="codrops-links"><a class="codrops-icon codrops-icon-drop" href="<?php the_field('left_text_link_url'); ?>"><span><?php the_field('left_text_link'); ?></span></a>
            <span class="right"><a class="codrops-icon codrops-icon-drop" href="<?php the_field('right_text_link_url'); ?>"><span><?php the_field('right_text_link'); ?></span></a></span></p>
        <nav class="left-box codrops-demos col-md-6 ">
            <a href="<?php the_field('left_button_url'); ?>"><?php the_field('left_button_text'); ?></a>
        </nav>
          <nav class="right-box codrops-demos col-md-6">
              <a href="<?php the_field('right_button_url'); ?>"><?php the_field('right_button_text'); ?></a>
          </nav>
    </header>

<?php get_footer(); ?>