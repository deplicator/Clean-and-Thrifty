<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    
    <body>
    <div id="wrapper">
    <div id="header">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/BSA_Transparent.png" alt="BSA Logo" width="150px">
        <h1><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </div>
