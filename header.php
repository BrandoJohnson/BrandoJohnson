<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="web development mn, web developer minnesota, web developer mn, web development minneapolis" />
    <meta name="author" content="Brandon Johnson" />

    <!-- Stylesheets -->
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
</head>

<nav id="bt-menu" class="bt-menu">
    <a href="#" class="bt-menu-trigger"><span>Menu</span></a>


    <?php
        wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'menu_class'      => 'btn-icon'
        ));
    ?>

</nav>
</div><!-- /container -->
</body>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60738386-1', 'auto');
    ga('send', 'pageview');

</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/borderMenu.js"></script>
</html>
