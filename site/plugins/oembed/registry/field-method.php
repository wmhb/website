<?php

// ================================================
//  $page->video()->oembed()
// ================================================

$kirby->set('field::method', 'oembed', function($field, $args = []) {
  return oembed($field->value, $args);
});
