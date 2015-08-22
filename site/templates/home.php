<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">

      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('recent-events') ?>

  </main>

<?php snippet('footer') ?>
