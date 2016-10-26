<?php

namespace Kirby\Plugins\distantnative\oEmbed\Providers;

class Meetup extends Provider {

  public function code($code) {
    $code .= $this->fixStyles();
    return $code;
  }


  // ================================================
  //  Fix styles
  // ================================================

  protected function fixStyles() {
    return '<style>#meetup_oembed{height: auto !important; text-align: left;}</style>';
  }

}
