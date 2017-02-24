<?php
class EventPage extends Page {
  public function serialize() {
    return [
      'uid'     => $this->uid(),
      'date'    => $this->date('d.m.Y'),
      'einlass' => $this->time1()->html()->toString(),
      'beginn'  => $this->time2()->html()->toString(),
      'url'     => $this->url(),
      'title'   => $this->title()->html()->toString(),
      'talks'   => $this->talks()->yaml()
     ];
  }
}
?>
