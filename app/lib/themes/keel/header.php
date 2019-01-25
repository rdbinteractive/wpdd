<!doctype html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?= (new WPDD\Favicon\Display())->favicons('WP DryDock', '#fff'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div class="t_wrap">
    <a class="u_screen-reader-text" href="#content">Skip To Content</a>
    <div id="content">
