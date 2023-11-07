<?php

class Pizza extends Pietanza{
  public $impasto;
  public $dimensione;

  public function __construct(string $_impasto, string $_dimensione, string $_name, float $_price, array $_ingredients, Media $_image=null){
    $this->impasto = $_impasto;
    $this->dimensione = $_dimensione;

    parent::__construct($_name, $_price, $_ingredients, $_image);
  }
}