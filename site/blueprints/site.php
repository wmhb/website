<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
files:
  fields:
    focus:
      label: Set Focalpoint for headerimages
      type: focus
fields:
  title:
    label: Title
    type:  text
  siteBgImage:
    label: Author Image
    type:  image
    width: 1/2
  globalheaderimage:
    label: Author
    type:  text
  contactmail:
    label: Globabale E-Mail Adresse
    type: email
  description:
    label: Description
    type:  textarea
  sponsors:
    label: Sponsoren
    type: structure
    entry: >
      <div class="media" style="margin: 10px; overflow: hidden;">
        <div  style="width: 50px; float: left; margin-right: 10px;" class="img">
            <img class="display: block;" src="/content/{{img}}">
        </div>
        <div class="bd" class="overflow: hidden; zoom: 1;">
            <strong>{{name}}</strong><br/>
            <em>{{desc}}</em>
        </div>
      </div>
    fields:
      name:
        label: Sponsorname
        type: text
      desc:
        label: Sponsorenbeschreibung
        type: text
      img:
        label: Sponsorenlogo
        type: image
      homepage:
        label: Webseite URL
        type: text
  placeholderspeaker:
    label: Platzhalterbild für fehlende Portraitaufnahmen
    type:  image
  placeholderSpeakersText:
    label: Platzhaltertext für fehlende Sprecherliste
    type:  textarea
  placeholderSpeakerDescText:
    label: Platzhaltertext für fehlende Themenbeschreibung
    type:  text
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
