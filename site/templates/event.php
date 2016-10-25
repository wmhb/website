<?php snippet('header') ?>

  <main class="g g--col" role="main">

    <article class="gi--full gi--center event">
        <h2><?php echo $page->title()->html() ?></h2>
        <div class="g">
            <div class="gi gi--1of2">
                <ul>
                    <li>Einlass: <?php echo $page->time1()->html() ?></li>
                    <li>Beginn: <?php echo $page->time2()->html() ?></li>
                    <li><?php echo $page->date('d.m.Y'); ?></li>
                    <li><?php echo $page->address()->html(); ?></li>
                    <li>
                        Verfolge das Event <a title="<?php echo $page->title()->html() ?> auf Facebook" href="<?php echo $page->facebook(); ?>">auf Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="gi gi--1of2">
                <?php echo $page->text()->kirbytext() ?>
                <?php foreach($page->talks()->toStructure() as $talk): ?>
                <div class="talk">

                    <?php if ( $talk->img()->isNotEmpty() ) : ?>
                    <figure class="talk__img">
                        <?php echo thumb($page->image($talk->img()), array('width' => 70) ); ?>
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
                        <p class="talk__description">
                                <?php echo $talk->desc()->kirbytext(); ?>
                        </p>
                        <ul class="talk__meta">
                            <li>
                                <?php echo twitter($talk->twitter()); ?>
                            </li>
                            <li>
                                <a href="<?php echo $talk->xing(); ?>">
                                    Xing
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $talk->linkedin(); ?>">
                                    LinkedIn
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $talk->homepage(); ?>">
                                    Webseite
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </article>

  </main>

<?php snippet('footer') ?>
