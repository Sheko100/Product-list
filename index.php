<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product List</title>
  <link rel="stylesheet" href="style/style.css">
</head>
  <body>
 <main id="main_container"> 
 <header id="main_header">
 <h1 id="main_title">Product List</h1>
 <aside id="controls_container">
 <a href="add-product/" class="controls_button" onmousedown="this.style.boxShadow='2px 2px 2px inset'" onmouseup="this.style.boxShadow='2px 2px 3px'" onmouseleave="this.style.boxShadow='2px 2px 3px'">
 ADD
</a>
<button id="delete-product-btn" class="controls_button" onclick="deleteProduct()">
  MASS DELETE
</button>
 </aside>
  </header>
  <article id="main_content">
  <ul id="products_container">
  
 <!-- <li class="product">
 <input type="checkbox" class="delete-checkbox" onchange="toDeleteProduct(this)"> 
 <div class="product_info_container">
 <div>[placeholder]</div>
  <div>[placeholder]</div>
   <div>[placeholder]</div>
    <div>[placeholder]</div>
    </div>
 </li>
<li class="product">
<input type="checkbox" class="delete-checkbox" onchange="toDeleteProduct(this)"> 
 <div class="product_info_container">
 <div>[placeholder]</div>
  <div>[placeholder]</div>
   <div>[placeholder]</div>
    <div>[placeholder]</div>
    </div>
</li>
<li class="product">
<input type="checkbox" class="delete-checkbox" onchange="toDeleteProduct(this)"> 
 <div class="product_info_container">
 <div>[placeholder]</div>
  <div>[placeholder]</div>
   <div>[placeholder]</div>
    <div>[placeholder]</div>
    </div>
</li>
<li class="product">
<input type="checkbox" class="delete-checkbox" onchange="toDeleteProduct(this)"> 
 <div class="product_info_container">
 <div>[placeholder]</div>
  <div>[placeholder]</div>
   <div>[placeholder]</div>
    <div>[placeholder]</div>
    </div>
</li>
<li class="product">
<input type="checkbox" class="delete-checkbox" onchange="toDeleteProduct(this)"> 
 <div class="product_info_container">
 <div>[placeholder]</div>
  <div>[placeholder]</div>
   <div>[placeholder]</div>
    <div>[placeholder]</div>
    </div>
</li>
<li class="product">
<input type="checkbox" class="delete-checkbox" onchange="toDeleteProduct(this)"> 
 <div class="product_info_container">
 <div>[placeholder]</div>
  <div>[placeholder]</div>
   <div>[placeholder]</div>
    <div>[placeholder]</div>
    </div>
</li>
<li class="product"></li>
<li class="product"></li>
<li class="product"></li>-->

   </ul>
  
  
  
  </article>
  <footer id="main_footer">
  <span>Scandiweb Test assignment</span>
  </footer>
  </main>
  <script>
  <?php
    require ("classes/DatabaseManager.php");
    $db =  new \store\classes\DatabaseManager();
    $db->connect();
    $product = $db->getAllRecords();
?>
// change the name of the product array here and in component.js
const product = <?php echo $product ?>;
</script>
  <script src="script/script.js"></script>
  
  <!-- Load React. -->
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
   <!-- Load React component. -->
  <script src="script/component.js" type="text/babel"></script>
</body>
</html>









