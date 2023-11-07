<?php 

  class Pietanza{
    public $name;
    public $price;
    public $ingredients;
    public $image;

    public function __construct(string $_name, float $_price, array $_ingredients, Media $_image=null )
    {
      $this->name = $_name;
      $this->price = $_price;
      $this->ingredients = $_ingredients;
      $this->image = $_image;
    }

    public function setImage(Media $_image){ 
      $this->image = $_image;
    }
  };


