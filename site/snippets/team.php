<section class="gi-full">
    <div class="pane g">
        <h1 class="gi gi--full gi gi--sm-1of4">
                <?php echo $data->title() ?>
        </h1>
        <article class="gi gi--full gi gi--sm-3of4">
            <div class="team g">
            <?php foreach($data->teammembers()->toStructure()->shuffle() as $teammember): ?>
                <div class="team__member gi--full gi--xs-full gi--sm-1of4 media" itemscope itemtype="http://schema.org/Event">
                    <figure class="team__member-img img" itemprop="image">
                        <?php echo thumb($data->image($teammember->img()), array('width' => 300) ); ?>
                    </figure>
                    <figcaption class="bd">
                        <h4 itemprop="name"><?php echo $teammember->name() ?></h4>
                        <p itemprop="description"><?php echo $teammember->desc() ?></p>
                        <ul class="team__meta">
                            <?php if ( $teammember->twitter()->isNotEmpty() ) : ?>
                            <li >
                                <a itemprop="sameAs" href="http://twitter.com/<?php echo $teammember->twitter(); ?>" title="Twitter">
                                    <img src="/assets/images/SVG/twitter2.svg" alt="Twitter">
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $teammember->xing()->isNotEmpty() ) : ?>
                            <li>
                                <a itemprop="sameAs" href="<?php echo $teammember->xing(); ?>" title="Xing">
                                    <img src="/assets/images/SVG/xing.svg" alt="Xing">
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $teammember->linkedin()->isNotEmpty() ) : ?>
                            <li>
                                <a itemprop="sameAs" href="<?php echo $teammember->linkedin(); ?>" title="Linkedin">
                                    <img src="/assets/images/SVG/linkedin.svg" alt="Linkedin">
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $teammember->homepage()->isNotEmpty() ) : ?>
                            <li>
                                <a itemprop="sameAs" href="<?php echo $teammember->homepage(); ?>" title="Webseite">
                                    <img src="/assets/images/SVG/share.svg" alt="Webseite">
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </figcaption>
                </div>
            <?php endforeach ?>
            </div>
        </article>
    </div>
</section>
