<?php

namespace store\classes\subclasses;

class Book extends \store\classes\Product {
  protected $weight;
  
  function __construct($sku, $name, $price, $weight){
    $this->sku=$sku;
    $this->name=$name;
    $this->price=$price;
    $this->weight=$weight;
  }

  public function addNewProduct() {
    $sql = "INSERT INTO book (weight) VALUES (".$this->getWeight().")";
    return $sql;
  }

  public function setWeight($weight) {
  $this->weight=$weight;
  }
  public function getWeight() {
  return $this->weight;
  }
  
  }

  ?>