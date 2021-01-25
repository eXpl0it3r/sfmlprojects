<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page->title(); ?> - SFML Projects</title>
    <meta name="author" content="Lukas Dürrenberger">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/images/logo.png">
    <link rel="preload" href="/assets/css/theme.css" as="style">
    <?php snippet('layout/piwik') ?>
    <link href="/assets/css/theme.css" rel="stylesheet">
    <script defer src="/assets/javascript/jquery.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/transition.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/alert.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/button.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/carousel.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/collapse.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/dropdown.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/modal.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/tooltip.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/popover.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/scrollspy.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/tab.js"></script>
    <script defer src="/assets/vendor/bootstrap/js/affix.js"></script>
    <script defer src="/assets/vendor/flat-ui/js/bootstrap-select.js"></script>
    <script defer src="/assets/vendor/flat-ui/js/bootstrap-switch.js"></script>
    <script defer src="/assets/vendor/flat-ui/js/flatui-checkbox.js"></script>
    <script defer src="/assets/vendor/flat-ui/js/flatui-radio.js"></script>
    <script defer src="/assets/vendor/flat-ui/js/jquery.tagsinput.js"></script>
    <script defer src="/assets/vendor/flat-ui/js/jquery.placeholder.js"></script>
    <script defer src="/assets/javascript/app.js"></script>
</head>
<body class="<?php //page-{{ this.page.id }} layout-{{ this.layout.id }}?>">

<header id="layout-header" class="header-navbar">
    <?php snippet('layout/nav') ?>
</header>

<div id="layout-content">
