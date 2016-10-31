<?php if(!defined('KIRBY')) exit ?>

title: Team
pages: false
files: true
template: team
fields:
  title:
    label: Title
    type:  text
  teammembers:
    label: Teammitglieder
    type: structure
    entry: >
      <div class="media" style="margin: 10px; overflow: hidden;">
        <div  style="width: 50px; float: left; margin-right: 10px;" class="img">
            <img class="display: block;" src="/content/4-team/{{img}}">
        </div>
        <div class="bd" class="overflow: hidden; zoom: 1;">
            <strong>{{name}}</strong><br/>
            <em>{{desc}}</em>
        </div>
      </div>
    fields:
      name:
        label: Teammitglied
        type: text
      desc:
        label: Selbstbeschreibung
        type: textarea
      img:
        label: Bild
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
