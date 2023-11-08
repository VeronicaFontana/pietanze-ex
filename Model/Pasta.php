<?php

class Pasta extends Pietanza{
  public $formato;
  public $farina;
  public $tempo_cottura;

  public function __construct(string $_name, array $_ingredients, Media $_image=null, string $_formato, string $_farina, float $_prezzo_vendita, float $_prezzo_acquisto){
    $this->formato = $_formato;
    $this->farina = $_farina;

    parent::__construct( $_name, $_ingredients, $_image, $_prezzo_vendita, $_prezzo_acquisto);
  }

  public function getFullInfo(){
    $pietanza_info = parent::getFullInfo();
    return "$pietanza_info, $this->formato, $this->farina";
  }
};