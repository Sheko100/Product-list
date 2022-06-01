<?php

namespace Store\View;

class ViewManager {

  public function getWeight($value) {

    $attr = "Weight: ".$value."KG"; 
    return $attr;
  }

  public function getSize($value) {
    $attr = "Size: ".$value." MB";
    return $attr;
  }

  public function getDimensions($value) {
    $attr = "Dimensions: ".$value[0]."x".$value[1]."x".$value[2];
      return $attr;
  }
}



?>