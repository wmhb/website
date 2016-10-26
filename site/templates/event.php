<?php snippet('header') ?>

  <main class="g g--col" role="main">

    <article class="gi--full gi--center event">
        <h2 class="event__title"><?php echo $page->title()->html() ?> - <?php echo $page->date('d.m.Y'); ?> - <?php echo $page->time1()->html() ?></h2>
        <div class="g">
            <div class="gi gi--1of2">
                <ul class="event__meta">
                    <li><strong>Wann: </strong><?php echo $page->date('d.m.Y'); ?></li>
                    <li><strong>Einlass:</strong> <?php echo $page->time1()->html() ?></li>
                    <li><strong>Beginn:</strong> <?php echo $page->time2()->html() ?></li>
                </ul>

                <?php echo $page->text()->kirbytext(); ?>

                <p>
                    <em>
                    Verfolge das Event <a title="<?php echo $page->title()->html() ?> auf Facebook" href="<?php echo $page->facebook(); ?>">auf Facebook</a>
                    </em>
                </p>
                <h4>Wo: </h4>
                <?php echo $page->address()->html(); ?>
                <p>
                    <a href="<?php echo $page->map(); ?>">Auf Karte anzeigen</a>
                </p>
            </div>
            <div class="gi gi--1of2">
                <?php foreach($page->talks()->toStructure() as $talk): ?>
                <div class="talk">

                    <?php if ( $talk->img()->isNotEmpty() ) : ?>
                    <figure class="talk__img">
                        <?php echo thumb($page->image($talk->img()), array('width' => 100) ); ?>
                    </figure>
                    <?php endif; ?>

                    <div class="talk__info">
                        <p class="talk__speaker">
                            <em>
                                <?php echo $talk->speaker(); ?>
                            </em>
                        </p>
                        <p class="talk__title">
                            <strong>
                                <?php echo $talk->title(); ?>
                            </strong>
                        </p>

                        <?php if ( $talk->desc()->isNotEmpty() ) : ?>
                        <p class="talk__description">
                            <?php echo $talk->desc()->kirbytext(); ?>
                        </p>
                        <?php endif; ?>

                        <ul class="talk__meta">
                            <?php if ( $talk->twitter()->isNotEmpty() ) : ?>
                            <li>
                                <?php echo twitter($talk->twitter()); ?>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->slides()->isNotEmpty() ) : ?>
                            <li>
                                <a href="<?php echo $talk->slides(); ?>">
                                    Slides
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->xing()->isNotEmpty() ) : ?>
                            <li>
                                <a href="<?php echo $talk->xing(); ?>">
                                    Xing
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->linkedin()->isNotEmpty() ) : ?>
                            <li>
                                <a href="<?php echo $talk->linkedin(); ?>">
                                    LinkedIn
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->homepage()->isNotEmpty() ) : ?>
                            <li>
                                <a href="<?php echo $talk->homepage(); ?>">
                                    Webseite
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <?php if ( $page->featured_media1()->isNotEmpty() ) : ?>
            <div class="gi gi--full">
                <h3>Nachlese</h3>
                <div class="event__mediawall">
                    <?php if ( $page->featured_media1()->isNotEmpty() ) : ?>
                        <?php echo $page->featured_media1()->oembed(); ?>
                    <?php endif; ?>
                    <?php if ( $page->featured_media2()->isNotEmpty() ) : ?>
                        <?php echo $page->featured_media2()->oembed(); ?>
                    <?php endif; ?>
                    <?php if ( $page->featured_media3()->isNotEmpty() ) : ?>
                        <?php echo $page->featured_media3()->oembed(); ?>
                    <?php endif; ?>
                    <?php if ( $page->featured_media4()->isNotEmpty() ) : ?>
                        <?php echo $page->featured_media4()->oembed(); ?>
                    <?php endif; ?>
                    <?php if ( $page->featured_media5()->isNotEmpty() ) : ?>
                        <?php echo $page->featured_media5()->oembed(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </article>

  </main>

<?php snippet('footer') ?>
