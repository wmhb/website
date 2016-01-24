<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

    <nav class="navigation g">
        <a href="#" class="layout__logo"><?php echo $site->title()->html() ?></a>
        <a href="mailto:moin@webmontag-bremen.de?subject=Meine%20Webmontags-Vortrags-Idee&body=Moin," class="btn">Mitmachen!</a>
    </nav>
    <header class="layout__header" role="banner">
    <?php 
        $nextMonday = $site->children()->find('events')->children()->flip()->visible()->first();
    ?>

        <a href="#" title="some title" class="header__link">
            <h1><?php echo $nextMonday->title(); ?> </h1>
            <h2><?php echo $nextMonday->date('d.m.Y'); ?> </h2>
        </a>
    </header>
