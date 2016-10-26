<?php

namespace Kirby\distantnative\oEmbed;

use C;
use Embed\Embed;

class Data {

  public static function get($url) {
    try {
      return Embed::create($url, static::config());
    } catch (\Exception $e) {
      return false;
    }
  }

  protected static function config() {
    return [
      'adapter' => [
        'config' => ['getBiggerImage' => true]
      ],
      'providers' => [
        'facebook' => [
          'key' => c::get('plugin.oembed.providers.facebook.key', null)
        ],
        'google' => [
          'key' => c::get('plugin.oembed.providers.google.key', null)
        ],
        'soundcloud' => [
          'key' => c::get('plugin.oembed.providers.soundcloud.key', null)
        ]
      ]
    ];
  }

}
