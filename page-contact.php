<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div id="content" class="site-content" role="main">
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div><!-- #content .site-content -->

<?php get_footer(); ?>