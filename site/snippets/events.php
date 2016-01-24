<section class="archive gi-full">
    <div class="pane g">
        <h1 class="gi-full gi gi--sm-1of4"><?php echo $data->title() ?></h1>
        <section class="archive__recent gi gi--full gi--sm-1of2">
            <h1>Beim nächsten Mal</h1>
            <?php foreach( $data->children()->flip()->visible()->offset(1)->limit(1) as $project): ?>
                <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
                <p><?php echo $project->text()->excerpt(80) ?><a href="<?php echo $project->url() ?>"></a></p>
            <?php endforeach; ?>
            <figure>
                <img src="http://placehold.it/700x300&text=Bild+dass+wir+ersetzen+sollten" alt="alttext" title="title">
            </figure>
        </section>
        <section class="archive__itself gi gi--full gi--sm-1of4">
            <h1>Bisher</h1>
            <ul>
            <?php foreach($data->children()->flip()->visible()->offset(2)->limit(5) as $project): ?>
                <li>
                    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
                </li>
            <?php endforeach ?>
            </ul>
        </section>
    </div>
</section>
