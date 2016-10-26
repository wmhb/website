<?php

namespace Kirby\distantnative;

use C;
use F;

class Thumb {

  protected $dir;
  protected $root;

  public function __construct($plugin, $url, $lifetime) {
    $this->plugin    = $plugin;
    $this->source    = $url;
    $this->lifetime  = $lifetime;

    $this->root      = kirby()->roots()->thumbs() . DS . '_plugins';
    $this->dir       = $this->root . DS . $this->plugin;
    $this->file      = md5($this->source) . '.' . pathinfo(strtok($this->source, '?'), PATHINFO_EXTENSION);
    $this->path      = $this->dir . DS . $this->file;

    $this->dirs();
    $this->cache();
  }

  public function __toString() {
    return url('thumbs/_plugins/' . $this->plugin . '/' . $this->file);
  }

  protected function cache() {
    if($this->expired() or !f::exists($this->path)) {
      file_put_contents($this->path, file_get_contents($this->source));
    }
  }

  protected function expired() {
    if((f::modified($this->path) + $this->lifetime) < time()) {
      return f::remove($this->path);
    }

    return false;
  }

  protected function dirs() {
    if(!file_exists($this->root)) mkdir($this->root, 0755, true);
    if(!file_exists($this->dir))  mkdir($this->dir, 0755, true);
  }


}
