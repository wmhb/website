<?php

namespace Kirby\distantnative\oEmbed;

use A;
use C;

use Kirby\distantnative\Cache;
use Kirby\distantnative\Thumb;

class Core {

  public $provider = null;

  public function __construct($url, $args = []) {
    $this->input = $url;
    $this->cache = c::get('plugin.oembed.caching', true) ? new Cache('oembed', $url) : false;

    $this->load();

    if($this->data !== false) {
      $this->options  = $this->options($args);
      $this->provider = $this->provider();
      $this->url      = new Url($this->data()->code);
    }
  }

  // ================================================
  //  Load remote or cached data
  // ================================================

  protected function load() {
    // get data from cache
    if($this->cache && $this->cache->exists()) {
      return $this->data = $this->cache->get();

    // load data from source
    } else {
      $this->data = Data::get($this->input);
    }

    // cache the data
    if($this->cache && $this->data) {
      $this->cache->set($this->data, c::get('plugin.oembed.caching.duration', 24) * 60);
    }
  }

  // ================================================
  //  Default options
  // ================================================

  protected function options($options) {
    return a::merge([
      'class'     => null,
      'thumb'     => null,
      'autoplay'  => c::get('plugin.oembed.video.autoplay', false),
      'lazyvideo' => c::get('plugin.oembed.video.lazyload', true),
      'jsapi'     => c::get('plugin.oembed.providers.jsapi', false),
    ], $options);
  }


  // ================================================
  //  Thumb
  // ================================================

  public function thumb() {
    // if custom thumbnail is set
    $thumb = $this->options['thumb'] ?: $this->image();

    return $this->cache ? new Thumb('oembed', $thumb,       (c::get('plugin.oembed.caching.duration', 24) * 60 * 60)) : $thumb;
  }


  // ================================================
  //  Custom provider instance
  // ================================================

  protected function provider() {
    $namespace = 'Kirby\Plugins\distantnative\oEmbed\Providers\\';
    $class     =  $namespace . $this->data()->providerName;
    $class     =  class_exists($class) ? $class : $namespace . 'Provider';
    return $this->provider ?: new $class($this, $this->input);
  }


  // ================================================
  //  Magic methods
  // ================================================

  public function __call($name, $args) {
    if(method_exists($this->provider, $name)) {
      return $this->provider->{$name}($this->data()->{$name}, $args);
    } else {
      return $this->data()->{$name};
    }
  }

  public function data() {
    return is_array($this->data) ? $this->data[0] : $this->data;
  }

  public function __toString() {
    return !$this->data ? Html::error($this->input) : (string)new Html($this);
  }
}
