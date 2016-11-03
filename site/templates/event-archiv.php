<?php snippet('header') ?>

  <main class="g g--col" role="main">

    <article class="gi--full gi--center archive">

        <div class="g">
            <div class="gi gi--full gi--sm-1of3">
                <h2 itemprop="name">
                    <?php echo $page->title()->html() ?>
                </h2>
                <?php echo kirbytext($page->text()->html()) ?>
            </div>
            <div class="gi gi--full gi--sm-2of3">

                <ul class="archive__list">
                <?php foreach($site->find('events')->children()->flip()->visible() as $event): ?>
                    <li itemscope itemtype="http://schema.org/Event">

                        <a itemprop="name" href="<?php echo $event->url() ?>"><?php echo $event->title()->html() ?></a>

                        <ul class="archive__quicktalks">
                            <?php foreach($event->talks()->toStructure() as $monday): ?>
                            <li>
                                <strong class="archive__quicktitle"><?php echo $monday->title() ?></strong> 
                                <em>
                                    <?php echo $monday->speaker() ?>
                                </em>
                            </li>
                            <?php endforeach ?>
                        </ul>

                    </li>
                <?php endforeach ?>
                </ul>

            </div>
        </div>
    </article>

  </main>

<?php snippet('footer') ?>
