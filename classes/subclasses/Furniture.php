<?php

namespace store\classes\subclasses;
class Furniture extends \store\classes\Product {

    protected $height;
    protected $width;
    protected $length;
    
    function __construct($sku, $name, $price, $type, $height, $width, $length) {
      $this->sku=$sku;
      $this->name=$name;
      $this->price=$price;
      $this->type=$type;
      $this->height=$height;
      $this->width=$width;
      $this->length=$length;
  }

    public function addNewProduct() {
      $sql = "INSERT INTO furniture (height, width, length) VALUES ("
      .$this->getHeight().", ".$this->getWidth().", ".$this->getLength().")";
      return $sql;
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