<?php

namespace Kirby\distantnative\oEmbed {

  use Kirby\distantnative\Autoloader;
  require_once('core/lib/autoloader.php');

  $kirby    = kirby();
  $language = $kirby->site()->language();

  Autoloader::load([
    'vendor'         => ['Embed/src/autoloader'],
    'translations'   => ['en', $language ? $language->code() : null],
    'core'           => ['core', 'data', 'url', 'html'],
    'core/lib'       => ['cache', 'thumb'],
    'core/providers' => ['provider', true],
  ]);

  include('registry/field-method.php');
  include('registry/tag.php');
  include('registry/field.php');
  include('registry/route.php');

}


// ================================================
//  Global helper
// ================================================

namespace {
  function oembed($url, $args = []) {
    return new Kirby\distantnative\oEmbed\Core($url, $args);
  }
}
