<?php snippet('header') ?>

    <main class="g g--col" role="main">
    <?php 
        foreach($pages->visible() as $section) {
            snippet($section->uid(), array('data' => $section));
        }
    ?>
    </main>
<?php snippet('footer') ?>
