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
  customheader:
    label: Custom Header Image
    type: image
  date:
    label: Date
    type: date
    width: 1/3
  time1:
    label: Einlass
    type: text
    default: 18:30 Uhr
    width: 1/3
  time2:
    label: Beginn
    type: text
    default: 19:00 Uhr
    width: 1/3
  text:
    label: Text
    type:  textarea
  address:
    label: Address
    type: textarea
    default: > 
      Karton - Alte Schnapsfabrik </br>
      Am Deich 86 </br>
      28199 Bremen
  map:
    label: Google Map Link
    type: text
    default: https://www.google.com/maps/place/K+A+R+T+O+N/@53.0728882,8.8010668,15z/data=!4m2!3m1!1s0x0:0xd487f58fdd54d175?sa=X&ved=0ahUKEwiH-czfq_jPAhVFQBoKHRAgDgcQ_BIIgAEwCg
  talks:
    label: Sprecher
    type: structure
    entry: >
      <em>{{speaker}}</em><br />
      {{title}}<br /> 
    fields:
      speaker:
        label: Sprecher
        type: text
      title:
        label: Titel
        type: text
      desc:
        label: Talk Beschreibung
        type: textarea
      slides: 
        label: Slides online?
        type: text
      img:
        label: Beispielbild / Sprecherbild / Whatever
        type: image
      twitter:
        label: Twitter Name
        type: text
      xing:
        label: xing URL
        type:  text
      linkedin:
        label: LinkedIn URL
        type:  text
      homepage:
        label: Webseite URL
        type: text
  facebook:
    label: Facebook Event URL
    type:  text
