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
 <a href="add-product/" class="controls_button">
 ADD
</a>
<button id="delete-product-btn" class="controls_button">
  MASS DELETE
</button>
 </aside>
  </header>

  <article id="main_content">
  
  </article>

  <footer id="main_footer">
  <span>Scandiweb Test assignment</span>
  </footer>
  </main> 
  <script>
  <?php
    require_once ("src/Store/Database/DatabaseManager.php");
    $db =  new \Store\Database\DatabaseManager();
    $db->connect();
    $product = $db->getAllRecords();

    
  ?>
const product = <?php echo $product ?>;
</script>
  <script src="script/script.js"></script>
  
  <!-- Load React. -->
  <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
   <!-- Load React component. -->
  <script src="script/component.js" type="text/babel"></script>
</body>
</html>









