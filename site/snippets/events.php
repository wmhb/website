<section class="archive gi-full">
    <article class="pane g">
        <h3 id="nextevent" class="gi gi--full gi gi--sm-1of4 pane__title">
            <?php echo $data->title() ?>
        </h3>
        <div class="archive__recent gi gi--full gi--sm-1of2">
            <?php foreach( $data->children()->flip()->visible()->offset(0)->limit(1) as $project): ?>
                <article class="archive__article" role="article">
                    <a href="<?php echo $project->url() ?>">
                        <h3>
                            <?php echo $project->title()->html() ?>
                        </h3>
                    </a>
                    <p>
                        <?php echo kirbytext($project->text()->excerpt(200)) ?>
                        <ul class="archive__quicktalks">
                            <?php foreach($project->talks()->toStructure() as $talk): ?>
                            <li>
                                <strong class="archive__quicktitle"><?php echo $talk->title() ?></strong> 
                                <em>
                                    <?php echo $talk->speaker() ?>
                                </em>
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <p>
                            <a class="btn" href="<?php echo $project->url() ?>">Weiterlesen</a>
                            <a class="btn" href="<?php echo $site->find('event-archiv')->url() ?>">Zum Webmontag Archiv</a>
                        </p>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
        <aside class="archive__itself gi gi--full gi--sm-1of4">
            <h4>
                <?php echo $data->title2() ?>
            </h4>
            <div class="sponsor">
                <?php foreach($site->sponsors()->toStructure() as $sponsor): ?>
                <a href="<?php echo $sponsor->homepage() ?>">
                    <figure class="sponsor__item" title="">
                        <img src="/content/<?php echo $sponsor->img(); ?>" alt="<?php echo $sponsor->name() ?> ">
                    </figure>
                </a>
                <?php endforeach ?>
            </div>
        </aside>
    </article>
</section>
