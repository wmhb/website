<?php snippet('header') ?>

  <main class="main g--col" role="main">

    <section class="gi-full">
        <article class="pane g">
            <h3 class="gi gi--full gi gi--sm-1of4 pane__title">
                <?php echo $page->title() ?>
            </h3>
            <div class="gi gi--full gi gi--sm-3of4">
                <div class="about__text">
                    <?php echo kirbytext($page->text()) ?>
                </div>
            </div>
        </article>
    </section>

  </main>

<?php snippet('footer') ?>
