<?php

namespace store\classes\subclasses;

class DVD extends \store\classes\Product {

    protected $size;
    
    function __construct($sku, $name, $price, $type, $size) {
        $this->sku=$sku;
        $this->name=$name;
        $this->price=$price;
        $this->type=$type;
        $this->size=$size;
    }
    public function addNewProduct() {
        $sql = "INSERT INTO DVD (size) VALUES (".$this->getSize().")";
        return $sql;
    }

    public function setSize($size) {
        $this->size=$size;
    }
    public function getSize() {
        return $this->size;
    }
    
    }

?>