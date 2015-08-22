<h2>Letzte Veranstaltung</h2>
<?php foreach(page('veranstaltungen')->children()->flip()->visible()->offset(1)->limit(1) as $project): ?>

  <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
  <p><?php echo $project->text()->excerpt(80) ?><a href="<?php echo $project->url() ?>"></a></p>

<?php endforeach; ?>

<h2>Archiv</h2>

<ul class="teaser cf">
  <?php foreach(page('veranstaltungen')->children()->flip()->visible()->offset(2)->limit(5) as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(80) ?><a href="<?php echo $project->url() ?>"></a></p>
  </li>
  <?php endforeach ?>
</ul>