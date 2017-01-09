<?php snippet('header') ?>

  <main class="g g--col" role="main">

    <article class="gi--full gi--center event" itemscope itemtype="http://schema.org/Event">
        <h2 class="event__title" itemprop="name"><?php echo $page->title()->html() ?> - <?php echo $page->date('d.m.Y'); ?> - <?php echo $page->time1()->html() ?></h2>
        <div class="g">
            <div class="gi gi--full gi--sm-1of2 ">
                <ul class="event__meta">
                    <li itemprop="startDate" content="<?php echo $page->date('Y-m-d'); ?>">
                        <strong>Wann: </strong><?php echo $page->date('d.m.Y'); ?>
                    </li>
                    <li itemprop="doortime"><strong>Einlass:</strong> <?php echo $page->time1()->html() ?></li>
                    <li><strong>Beginn:</strong> <?php echo $page->time2()->html() ?></li>
                </ul>

                <div itemprop="description">
                    <?php echo $page->text()->kirbytext(); ?>
                </div>

                <?php if ( $page->facebook()->isNotEmpty() ) : ?>
                <p>
                    <em>
                    Verfolge das Event <a title="<?php echo $page->title()->html() ?> auf Facebook" href="<?php echo $page->facebook(); ?>">auf Facebook</a>
                    </em>
                </p>

                <?php endif; ?>

                <?php if ( $page->address()->isNotEmpty() ) : ?>
                <div itemprop="location" itemscope itemtype="http://schema.org/Place">
                    <h4>Wo: </h4>
                    <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <?php echo $page->address()->html(); ?>
                    </span>
                        <?php if ( $page->map()->isNotEmpty() ) : ?>
                        <p itemprop="hasMap">
                            <a class="btn" itemprop="map" itemtype="https://schema.org/Map" href="<?php echo $page->map(); ?>">
                                Auf Karte anzeigen
                            </a>
                        </p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="gi gi--full gi--sm-1of2">
                <?php if ($page->talks()->isNotEmpty()) : ?>
                <?php foreach($page->talks()->toStructure() as $talk): ?>
                <div class="talk" itemprop="subEvent">

                    <?php if ( $talk->img()->isNotEmpty() ) : ?>
                    <figure class="talk__img" itemprop="image">
                        <?php echo thumb($page->image($talk->img()), array('width' => 100) ); ?>
                    </figure>
                    <?php else : ?>
                    <figure class="talk__img" itemprop="image">
                        <img src="/content/<?php echo $site->placeholderspeaker(); ?>" alt="">
                    </figure>
                    <?php endif; ?>

                    <div class="talk__info">
                        <p class="talk__speaker">
                            <em itemprop="performer">
                                <?php echo $talk->speaker(); ?>
                            </em>
                        </p>
                        <p class="talk__title" itemprop="name">
                            <strong>
                                <?php echo $talk->title(); ?>
                            </strong>
                        </p>

                        <?php if ( $talk->desc()->isNotEmpty() ) : ?>
                        <p class="talk__description" itemprop="description">
                            <?php if($talk->desc()->notEmpty()) : ?>
                            <?php echo $talk->desc()->kirbytext(); ?>
                            <?php else: ?>
                            <?php echo $site->placeholderSpeakerDescText(); ?>
                            <?php endif; ?>
                        </p>
                        <?php endif; ?>

                        <ul class="talk__meta">
                            <?php if ( $talk->twitter()->isNotEmpty() ) : ?>
                            <li itemprop="sameAs">
                                <?php echo twitter($talk->twitter()); ?>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->slides()->isNotEmpty() ) : ?>
                            <li>
                                <a itemprop="url" href="<?php echo $talk->slides(); ?>">
                                    Slides
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->xing()->isNotEmpty() ) : ?>
                            <li>
                                <a itemprop="sameAs" href="<?php echo $talk->xing(); ?>">
                                    Xing
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->linkedin()->isNotEmpty() ) : ?>
                            <li>
                                <a itemprop="sameAs" href="<?php echo $talk->linkedin(); ?>">
                                    LinkedIn
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $talk->homepage()->isNotEmpty() ) : ?>
                            <li>
                                <a itemprop="sameAs" href="<?php echo $talk->homepage(); ?>">
                                    Webseite
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
                <?php else : ?>
                    <span class="well"><?php echo $site->placeholderSpeakersText() ?></span>
                <?php endif; ?>
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
