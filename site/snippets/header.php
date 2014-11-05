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
