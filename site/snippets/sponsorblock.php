<section class="gi-full">
    <article class="pane g">
        <h3 class="gi gi--full gi gi--sm-1of4 pane__title">
            <?php echo $data->title() ?>
        </h3>
        <div class="gi gi--full gi gi--sm-3of4">
            <div class="sponsor">
                <?php foreach($site->sponsors()->toStructure() as $sponsor): ?>
                <a href="<?php echo $sponsor->homepage() ?>">
                    <figure class="sponsor__item" title="">
                        <img src="/content/<?php echo $sponsor->img(); ?>" alt="<?php echo $sponsor->name() ?> ">
                    </figure>
                </a>
                <?php endforeach ?>
            </div>
        </div>
    </article>
</section>
