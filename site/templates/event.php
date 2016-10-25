<?php snippet('header') ?>

  <main class="g g--col" role="main">

    <div class="gi--2of3 gi--center">
        <h2><?php echo $page->title()->html() ?></h2>
        <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>
