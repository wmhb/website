<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: false
template: event
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
  time:
    type: time
    interval: 30
  address:
    label: Address
    type: textarea
    default: Karton - Alte Schnapsfabrik / Am Deich 86 / 28199 Bremen
  facebook:
    label: Facebook link
    type:  text
  sponsors:
    label: Sponsors
    type: text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
