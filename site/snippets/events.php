<section class="archive gi-full">
    <div class="pane g">
        <h2 class="gi-full gi gi--sm-1of4"><?php echo $data->title() ?></h2>
        <section class="archive__recent gi gi--full gi--sm-1of2">
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
                        </p>
                    </p>
                </article>
            <?php endforeach; ?>
        </section>
        <section class="archive__itself gi gi--full gi--sm-1of4">
            <h3><?php echo $data->title2() ?></h3>
            <ul>
            <?php foreach($data->children()->flip()->visible()->offset(2)->limit(5) as $project): ?>
                <li>
                    <a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a>
                </li>
            <?php endforeach ?>
            </ul>
        </section>
    </div>
</section>
