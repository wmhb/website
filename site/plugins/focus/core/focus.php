<?php

class Focus {

  /**
   * Calculates the image ratio by dividing width / height
   */
  public static function ratio($width, $height) {
    if ($height === 0) {
      return 0;
    }
    return $width / $height;
  }

  /**
   * Correct format, even for localized floats
   */
  public static function numberFormat($number) {
    return number_format($number,2,'.','');
  }


  /**
   * Calculates crop coordinates and width/height to crop and resize the original image
   */
  public static function cropValues($thumb) {
    // get original image dimensions
    $dimensions = clone $thumb->source->dimensions();

    // calculate new height for original image based crop ratio
    if ($thumb->options['fit'] == 'width') {
      $width  = $dimensions->width();
      $height = floor($dimensions->width() / $thumb->options['ratio']);

      $heightHalf = floor($height / 2);

      // calculate focus for original image 
      $focusX = floor($width * 0.5);
      $focusY = floor($dimensions->height() * $thumb->options['focusY']);

      $x1 = 0;
      $y1 = $focusY - $heightHalf;

      // $x1 off canvas?
      $y1 = ($y1 < 0) ? 0 : $y1;
      $y1 = ($y1 + $height > $dimensions->height()) ? $dimensions->height() - $height : $y1;
      
    }

    // calculate new width for original image based crop ratio
    if ($thumb->options['fit'] == 'height') {
      $width  = $dimensions->height() * $thumb->options['ratio'];
      $height = $dimensions->height();

      $widthHalf = floor($width / 2);

      // calculate focus for original image 
      $focusX = floor($dimensions->width() * $thumb->options['focusX']);
      $focusY = $height * 0.5;

      $x1 = $focusX - $widthHalf;
      $y1 = 0;

      // $x1 off canvas?
      $x1 = ($x1 < 0) ? 0 : $x1;
      $x1 = ($x1 + $width > $dimensions->width()) ? $dimensions->width() - $width : $x1;
      
    }

    $x2 = floor($x1 + $width);
    $y2 = floor($y1 + $height);

    return array(
      'x1' => $x1,
      'x2' => $x2,
      'y1' => $y1,
      'y2' => $y2,
      'width' => floor($width),
      'height' => floor($height),
    );
  }


  /**
   * Get the stored coordinates
   */
  public static function coordinates($file, $axis = null) {  
    $focusCoordinates = array(
      'x' => 0.5,
      'y' => 0.5,
    );
    
    $focusFieldKey = c::get('focus.field.key', 'focus');

    if ($file->$focusFieldKey()->isNotEmpty()) {
      $focus = json_decode($file->$focusFieldKey()->value());
      $focusCoordinates = array(
        'x' => focus::numberFormat($focus->x),
        'y' => focus::numberFormat($focus->y),
      );
    }

    if (isset($axis) && isset($focusCoordinates[$axis])) {
      return $focusCoordinates[$axis];
    }

    return $focusCoordinates;
  }

}

