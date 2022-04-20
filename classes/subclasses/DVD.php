<?php

namespace store\classes\subclasses;

class DVD extends \store\classes\Product {

  private $size;
    
  function __construct($sku, $name, $price, $type, $size) {
  $this->setSku($sku);
  $this->setName($name);
  $this->setPrice($price);
  $this->setType($type);
  $this->setSize($size);
  }

  public function getAttribute() {
    $attr = "Size: ".$this->getSize()." MB";
    return $attr;
  }

 

  public function setSize($size) {
    $this->size = $size;
  }
  public function getSize() {
    return $this->size;
  }

  
    
    }

?>