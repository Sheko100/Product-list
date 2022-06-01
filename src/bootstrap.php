<?php

  spl_autoload_register(function ($class) {
      $classPath = __DIR__ . "/../src/" . str_replace("\\", "/", $class) . ".php";
  
      if (file_exists($classPath)) {
          require_once $classPath;
      }
  });

  

  if ($_GET["state"] == "success") {
      $manager = new \Store\StoreManager(
          $_POST["product_type"],
          $_POST["sku"],
          $_POST["name"],
          $_POST["price"],
          $_POST["product_type"]
      );
      $manager->addNewProduct();
  }
