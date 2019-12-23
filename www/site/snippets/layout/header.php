<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page->title(); ?> - SFML Projects</title>
    <base href="/">
    <meta name="author" content="Lukas Dürrenberger">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/images/logo.png">
    <script type="text/javascript" src="assets/bundle.js"></script>
    <?php // snippet('layout/piwik'); ?>
</head>
<body>

<header id="layout-header" class="header-navbar">
    <?php snippet('layout/nav'); ?>
</header>

<div id="layout-content">
