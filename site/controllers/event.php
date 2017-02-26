<?php
return function ($site, $pages, $page) {
  if (get('format') == 'json') {
    $data = [
      'uid'     => $page->uid(),
      'date'    => $page->date('d.m.Y'),
      'einlass' => $page->time1()->html()->toString(),
      'beginn' => $page->time2()->html()->toString(),
      'title'   => $page->title()->toString(),
      'talks'   => $page->talks()->yaml()
    ];
    die(response::json($data, 200));
  }
}
?>
