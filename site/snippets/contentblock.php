<section class="gi-full">
    <article class="pane g">
        <h3 class="gi gi--full gi gi--sm-1of4 pane__title">
            <?php echo $data->title() ?>
        </h3>
        <div class="gi gi--full gi gi--sm-3of4">
            <div class="about__text">
                <?php echo kirbytext($data->text()) ?>
            </div>
        </div>
    </article>
</section>
