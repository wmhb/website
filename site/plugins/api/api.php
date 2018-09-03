<?php
$prefix = "api";
kirby()->routes([
  [
    'method' => 'GET',
    'pattern' => "{$prefix}/events",
    'action' => function() {
      // Get the projects pages
      $projects = page('events')->children()->flip()->offset(0)->limit(2)->flip();
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
