<?php

namespace store\classes\subclasses;

class Furniture extends \store\classes\Product {

    private $height;
    private $width;
    private $length;
    
    function __construct($sku, $name, $price, $type, $height, $width, $length) {
      $this->setSku($sku);
      $this->setName($name);
      $this->setPrice($price);
      $this->setType($type);
      $this->setDimensions($height, $width, $length);
  }

    public function getAttribute() {
      $attr = "Dimensions: ".$this->getHeight()."x".$this->getWidth()."x".$this->getLength();
      return $attr;
    }

    public function setDimensions($height, $width, $length) {
    $this->height=$height;
    $this->width=$width;
    $this->length=$length;
    }
    public function getHeight() {
      return $this->height;
    }
    public function getWidth(){
      return $this->witdth;
    }
    public function getLength() {
      return $this->length;
    }
    
    }

?>