<?php
$prefix = "api";
kirby()->routes([
  [
    'method' => 'GET',
    'pattern' => "{$prefix}/events",
    'action' => function() {
      // Get the projects pages
      $projects = page('events')->children()->flip()->visible()->offset(0)->limit(1);
      $data = [];
      // Transform for API delivery
      foreach ($projects as $project) {
        $data[] = $project->serialize();
      }
      return response::json($data);
    }
  ]
]);
?>
