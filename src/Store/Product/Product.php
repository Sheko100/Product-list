<?php

namespace Store\Product;

abstract class Product {
    
protected $sku;
protected $name;
protected $price;
protected $type;
protected $attribute_name;

abstract public function getAttributeValue();
abstract public function setValueOf($attribute_name);
abstract public function getAttributeName();

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