<?php

class Pasta extends Pietanza{
  public $formato;
  public $farina;
  public $tempo_cottura;

  public function __construct(string $_name, float $_price, array $_ingredients, Media $_image=null, string $_formato, string $_farina){
    $this->formato = $_formato;
    $this->farina = $_farina;

    parent::__construct( $_name, $_price, $_ingredients, $_image);
  }
};