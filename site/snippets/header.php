<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php echo html($page->title()) ?> &bull; <?php echo html($site->title()) ?></title>
    <meta charset="utf-8"/>

    <?php if ($page->description() != ''): ?>
        <meta name="description" content="<?php echo html($page->description()) ?>"/>
    <?php elseif ($page->template() == 'blogpost'): ?>
        <meta name="description" content="<?php echo str::short(trim(str::unhtml(kirbytext($page->text()))), 160) ?>"/>
    <?php else: ?>
        <meta name="description" content="<?php echo html($site->description()) ?>"/>
    <?php endif ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo html($site->keywords()) ?>"/>
    <meta name="robots" content="index, follow"/>

    <?php echo css('assets/mf/styles/out/style.css') ?>

    <!--[if lt IE 9]>
    <?php echo js('assets/mf/scripts/vendor/html5shiv.js') ?>
    <![endif]-->

    <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="MarioFink.de"/>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url('assets/mf/images/favicons/apple-touch-icon-180x180.png') ?>">
    <link rel="shortcut icon" href="<?php echo url('assets/mf/images/favicons/favicon.ico') ?>">
    <link rel="icon" type="image/png" href="<?php echo url('assets/mf/images/favicons/favicon-192x192.png') ?>" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo url('assets/mf/images/favicons/favicon-160x160.png') ?>" sizes="160x160">
    <link rel="icon" type="image/png" href="<?php echo url('assets/mf/images/favicons/favicon-96x96.png') ?>" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo url('assets/mf/images/favicons/favicon-16x16.png') ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo url('assets/mf/images/favicons/favicon-32x32.png') ?>" sizes="32x32">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-TileImage" content="<?php echo url('assets/mf/images/favicons/mstile-144x144.png') ?>">
    <meta name="msapplication-config" content="<?php echo url('assets/mf/images/favicons/browserconfig.xml') ?>">
</head>

<body>

<div class="page-container">
<header class="site-header">
    <a class="site-logo" href="<?php echo url() ?>">
        <img src="<?php echo url('assets/mf/images/logotype.svg') ?>" alt="<?php echo html($site->title()) ?>"/>
    </a>
    <h2><a href="<?php echo url() ?>">Webentwickler <em>&amp;</em> UX Designer</a></h2>
    <?php snippet('menu') ?>
</header>
