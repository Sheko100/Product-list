<?php

namespace Store\Product\Types;

class DVD extends \Store\Product\Product {

  private $size;
    
  function __construct($sku, $name, $price, $type) {
  $this->setSku($sku);
  $this->setName($name);
  $this->setPrice($price);
  $this->setType($type);
  $this->attribute_name = ["size"];
  }


  public function getAttributeName() {
    return $this->attribute_name;
  }


  public function getAttributeValue() {
    $attr = "Size: ".$this->getSize()." MB";
    return $attr;
  }

  public function setValueOf($attribute_name) {

    for($i=0;$i<count($attribute_name);$i++) {
      $attr[$i] = $_POST[$attribute_name[$i]];
      }


    $this->size = $attr[0];
  }

  public function getSize() {
    return $this->size;
  }

  
    
    }

?>