<?php

use Kirby\distantnative\oEmbed\Html;

$kirby->set('route', [
  'pattern' => 'api/plugin/oembed/preview',
  'action'  => function() {
    $oembed   = oembed(get('url'), ['lazyvideo' => true]);
    $response = [];

    if($oembed->data === false) {
      $response['success'] = 'false';

    } else {
      $response['success']      = 'true';
      $response['title']        = Html::removeEmojis($oembed->title());
      $response['authorName']   = $oembed->authorName();
      $response['authorUrl']    = $oembed->authorUrl();
      $response['providerName'] = $oembed->providerName();
      $response['providerUrl']  = $oembed->url();
      $response['type']         = ucfirst($oembed->type());
      $response['parameters']   = Html::cheatsheet($oembed->urlParameters());
    }

    if(get('code') === 'true') {
      $response['code'] = (string)$oembed;
    }

    return \response::json($response);
  },
  'method'  => 'POST'
]);
