<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page->title(); ?> - SFML Projects</title>
    <meta name="author" content="Lukas Dürrenberger">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/images/logo.png">
    <?php echo krb('assets/css/theme.css', 'css', 0.24, true, false, false); ?>
    <?php snippet('layout/piwik'); ?>
</head>
<body class="<?php //page-{{ this.page.id }} layout-{{ this.layout.id }}?>">

<header id="layout-header" class="header-navbar">
    <?php snippet('layout/nav'); ?>
</header>

<div id="layout-content">
