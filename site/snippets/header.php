<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>

    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <meta name="author" content="Florenz Heldermann">

    <meta name="DC.title" content="<?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?>">
    <meta name="DC.subject" content="<?php echo $site->description()->html() ?>">

    <meta property="og:title" content="<?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?>">
    <meta property="og:url" content="<?php echo $page->url() ?>">
    <meta property="og:image" content="/assets/favicon/ms-icon-144x144.png">
    <meta property="og:site_name" content="<?php echo $site->title() ?>">
    <meta property="og:description" content="<?php echo $site->description()->html() ?>">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@webmontag_hb" />

    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">

    <?php echo css('assets/css/main.css') ?>
    <?php echo css('assets/plugins/oembed/css/oembed.css') ?>

</head>
<body>

    <nav class="navigation-wrapper" role="navigation">
        <div class="g navigation">
            <a href="/" class="layout__logo">
                <h1>
                    <?php echo $site->title()->html() ?>
                </h1>
            </a>
            <a href="mailto:<?php echo $site->contactmail() ?>?subject=Meine%20Webmontags-Vortrags-Idee&body=Moin," class="btn">Mitmachen!</a>
        </div>
    </nav>
    <?php if ($page->template() == 'home')  : ?>
    <header class="layout__header" role="banner"

        <?php if ($homeImage = $site->image($site->siteBgImage())): ?>

        <?php 
            $cropHomeImage = $homeImage->focusCrop(1280,600);
        ?>
        style="background: url(<?php echo $cropHomeImage->url() ?>) center top/ cover no-repeat; "
        <?php endif; ?>
    >

        <?php
            $nextMonday = $site->children()->find('events')->children()->flip()->visible()->first();
        ?>

        <a href="#nextevent" title="Der nächste Webmontag" class="header__link">
            <h1><?php echo $nextMonday->title(); ?> </h1>
            <h2><?php echo $nextMonday->date('d.m.Y'); ?> </h2>
        </a>
    </header>
    <?php elseif ($page->template() == 'event')  : ?>
    <header class="layout__header layout__header--small" role="banner"
        <?php if ( $eventImage = $page->image( $page->customheader() )): ?>

            <?php 
                $cropEventImage = $eventImage->focusCrop(1200,400);
            ?>
            style="background: url(<?php echo $cropEventImage->url() ?>) center top/ cover no-repeat; "

        <?php else : ?>

            <?php if ($bgImage = $site->image($site->siteBgImage())): ?>
            <?php 
                $cropImage = $site->image( $site->siteBgImage() )->focusCrop(1280,400);
            ?>
            style="background: url(<?php echo $cropImage->url() ?>) center top/ cover no-repeat; "
            <?php endif; ?>

        <?php endif; ?>
    >
    </header>
    <?php endif ?>


