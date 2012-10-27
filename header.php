<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title (); ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/scripts/menu.js" ></script>
	</head>
    
    <body>
	<div id="wrapper">
	<div id="header">
		<img src="<?php bloginfo('template_directory'); ?>/images/BSA_Transparent.png" alt="BSA Logo" width="150px">
			<h1><?php bloginfo('name'); ?></h1>
			<h2><?php bloginfo('description'); ?></h2>
	</div>	