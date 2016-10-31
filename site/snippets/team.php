<section class="gi-full">
    <div class="pane g">
        <h1 class="gi gi--full gi gi--sm-1of4">
                <?php echo $data->title() ?>
        </h1>
        <article class="gi gi--full gi gi--sm-3of4">
            <div class="team g">
            <?php foreach($data->teammembers()->toStructure()->shuffle() as $teammember): ?>
                <div class="team__member gi gi--sm-full gi--md-1of4" itemscope itemtype="http://schema.org/Event">
                    <figure class="team__member-img " itemprop="image">
                        <?php echo thumb($data->image($teammember->img()), array('width' => 300) ); ?>
                    </figure>
                    <figcaption>
                    <h4 itemprop="name"><?php echo $teammember->name() ?></h4>
                    <p itemprop="description"><?php echo $teammember->desc() ?></p>
                    <ul class="talk__meta">
                        <?php if ( $teammember->twitter()->isNotEmpty() ) : ?>
                        <li itemprop="sameAs">
                            <?php echo twitter($teammember->twitter()); ?>
                        </li>
                        <?php endif; ?>

                        <?php if ( $teammember->xing()->isNotEmpty() ) : ?>
                        <li>
                            <a itemprop="sameAs" href="<?php echo $teammember->xing(); ?>">
                                Xing
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if ( $teammember->linkedin()->isNotEmpty() ) : ?>
                        <li>
                            <a itemprop="sameAs" href="<?php echo $teammember->linkedin(); ?>">
                                LinkedIn
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if ( $teammember->homepage()->isNotEmpty() ) : ?>
                        <li>
                            <a itemprop="sameAs" href="<?php echo $teammember->homepage(); ?>">
                                Webseite
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                </figcaption>
            <?php endforeach ?>
            </div>
        </article>
    </div>
</section>
