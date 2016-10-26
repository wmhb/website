<?php

namespace Kirby\Plugins\distantnative\oEmbed\Providers;

class CollegeHumor extends Provider {

  public function code($code) {
    $this->setAutoplay();
    return $code;
  }

}
