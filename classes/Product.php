<?php

namespace store\classes;

abstract class Product {
    
protected $sku;
protected $name;
protected $price;
protected $type;

abstract public function getAttribute();

public function setSku($sku){
    $this->sku = $sku;
}
public function getSku(){
    return $this->sku;
}
public function setName($name){
    $this->name = $name;
}
public function getName(){
    return $this->name;
}
public function setPrice($price){
    $this->price = $price;
}
public function getPrice(){
    return $this->price;
}
public function setType($type) {
    $this->type = $type;
}
public function getType() {
    return $this->type;
}

}

?>