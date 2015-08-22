<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
test
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>


  </main>

<?php snippet('footer') ?>
