<?php

namespace Store\Product\Types;

class Book extends \Store\Product\Product
{
    private $weight;
  
    public function __construct($sku, $name, $price, $type)
    {
        $this->setSku($sku);
        $this->setName($name);
        $this->setPrice($price);
        $this->setType($type);
        $this->attribute_name = ["weight"];
    }

    public function getAttributeName()
    {
        return $this->attribute_name;
    }

    public function getAttribute($view)
    {
        $attributeValue = $view->getWeight($this->getWeight());
        return $attributeValue;
    }

    public function setValueOf($attribute_name)
    {
        for ($i=0;$i<count($attribute_name);$i++) {
            $attr[$i] = $_POST[$attribute_name[$i]];
        }

        $this->weight=$attr[0];
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
