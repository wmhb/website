<?php snippet('header') ?>

  <main class="main g g--col" role="main">

    <section class="gi--full gi--center">

        <article class="g">
            <div class="gi gi--full gi--sm-1of3">
                <h3 itemprop="name">
                    <?php echo $page->title() ?>
                </h3>
            </div>
            <div class="gi gi--full gi--sm-2of3">
                <?php echo kirbytext($page->text()) ?>
            </div>
        </article>
    </section>

  </main>

<?php snippet('footer') ?>
