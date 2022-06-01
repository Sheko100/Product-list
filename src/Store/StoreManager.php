<?php

namespace Store;

class StoreManager
{
    private $product_type;
    private $product_sku;
    private $product_name;
    private $product_price;

    public function __construct($type, $sku, $name, $price)
    {
        $this->product_type = $type;
        $this->product_sku = $sku;
        $this->product_name = $name;
        $this->product_price = $price;
    }

    public function addNewProduct()
    {
        $view = new \Store\View\ViewManager();
        $db = new \Store\Database\DatabaseManager();

        $typeClass = "\\Store\\Product\\Types\\".$this->product_type;
        $newProduct = new $typeClass(
            $this->product_sku,
            $this->product_name,
            $this->product_price,
            $this->product_type
        );
        $attrName = $newProduct->getAttributeName();
        $newProduct->setValueOf($attrName);

        $db->connect();
        $db->addNewRecord(
            $newProduct->getSku(),
            $newProduct->getName(),
            $newProduct->getPrice(),
            $newProduct->getType(),
            $newProduct->getAttribute($view)
        );

        header("Location: /");
        exit();
    }
}
