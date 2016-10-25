<section class="gi-full">
    <div class="pane g">
        <h1 class="gi gi--full gi gi--sm-1of4">
                <?php echo $data->title() ?>
        </h1>
        <article class="gi gi--full gi gi--sm-3of4">
            <div class="team g">
            <?php foreach($data->teammembers()->toStructure() as $teammember): ?>
                <div class="team__member gi gi--sm-full gi--md-1of4">
                    <figure class="team__member-img ">
                        <?php echo thumb($data->image($teammember->img()), array('width' => 300) ); ?>
                    </figure>
                    <figcaption>
                    <h4><?php echo $teammember->name() ?></h4>
                    <p><?php echo $teammember->desc() ?></p>
                </div>
                </figcaption>
            <?php endforeach ?>
            </div>
        </article>
    </div>
</section>
