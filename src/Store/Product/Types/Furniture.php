<?php

namespace Store\Product\Types;

class Furniture extends \Store\Product\Product
{
    private $height;
    private $width;
    private $length;
    
    public function __construct($sku, $name, $price, $type)
    {
        $this->setSku($sku);
        $this->setName($name);
        $this->setPrice($price);
        $this->setType($type);
        $this->attribute_name = ["height", "width", "length"];
    }


    public function getAttributeName()
    {
        return $this->attribute_name;
    }
   
    public function getAttribute($view)
    {
        $dimension = [$this->getHeight(), $this->getWidth(), $this->getLength()];

        $attributeValue = $view->getDimensions($dimension);
        return $attributeValue;
    }

    public function setValueOf($attribute_name)
    {
        for ($i=0;$i<count($attribute_name);$i++) {
            $dimension[$i] = $_POST[$attribute_name[$i]];
        }

        $this->height=$dimension[0];
        $this->width=$dimension[1];
        $this->length=$dimension[2];
    }

    public function getHeight()
    {
        return $this->height;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function getLength()
    {
        return $this->length;
    }
}
