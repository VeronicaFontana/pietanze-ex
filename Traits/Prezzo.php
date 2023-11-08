<?php

trait Prezzo{
  public $prezzo_acquisto;
  public $prezzo_vendita;

  public function getGain(){
    return $this->prezzo_vendita - $this->prezzo_acquisto;
  }
}