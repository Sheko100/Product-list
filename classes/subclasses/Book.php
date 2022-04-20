<?php

namespace store\classes\subclasses;

class Book extends \store\classes\Product {

  private $weight;
  
  function __construct($sku, $name, $price, $type, $weight){
    $this->setSku($sku);
    $this->setName($name);
    $this->setPrice($price);
    $this->setType($type);
    $this->setWeight($weight);
  }

  public function getAttribute() {
    $attr = "Weight: ".$this->getWeight()."KG";
    return $attr;
  }

  public function setWeight($weight) {
  $this->weight=$weight;
  }
  public function getWeight() {
  return $this->weight;
  }
  
  }

  ?>