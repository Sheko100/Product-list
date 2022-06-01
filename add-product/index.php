<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Add</title>
  <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <main id="main_container">
    <header id="main_header">
      <h1 id="main_title">Product Add</h1>
      <aside id="controls_container">
        <button class="controls_button" form="product_form">Save</button>
        <a href="../" class="controls_button">Cancel</a>
      </aside>
      <span id="missingValueAlert">Please, submit required data</span>
    </header>
    <article id="main_content">
      <form action="?state=success" target="_self" method="post" id="product_form" onsubmit="return  validateData()">
        <div class="field_container">
          <label class="field_label" for="sku">SKU:</label>
          <span>
            <input type="text" id="sku" class="form_field visible_field" name="sku" onchange="checkAvailabilityOf(this)"
              placeholder="E.G. TR120555">
          </span>
        </div>
        <div class="field_container">
          <label class="field_label" for="name">Name:</label>
          <span>
            <input type="text" id="name" class="form_field visible_field" name="name" placeholder="E.G. Table">
          </span>
        </div>
        <div class="field_container">
          <label class="field_label" for="price">Price ($):</label>
          <span>
            <input type="text" id="price" class="form_field visible_field" name="price" placeholder="E.G. 15.50">
          </span>
        </div>
        <div class="field_container">
          <label class="field_label" for="productType">Type Switcher:</label>
          <select id="productType" name="product_type" onchange="showFieldsOf(this.value)">
            <option>DVD</option>
            <option>Book</option>
            <option>Furniture</option>
          </select>
        </div>

        <div id="DVD" class="type_container">
          <div class="field_container">
            <label for="size">Size (MB)</label>
            <span>
              <input type="text" id="size" class="form_field visible_field type_field" name="size"
                placeholder="E.G. 500">
            </span>
          </div>

          <span class="type_description">
            *Please, provide size
          </span>

        </div>

        <div id="Book" class="type_container">

          <div class="field_container">
            <label for="weight">Weight (KG)</label>
            <span><input type="text" id="weight" class="form_field visible_field type_field" name="weight"
                placeholder="E.G. 2">
            </span>
          </div>

          <span class="type_description">
            *Please, provide weight
          </span>

        </div>

        <div id="Furniture" class="type_container visible_type">

          <div class="field_container">
            <label for="height">Height (CM)</label>
            <span>
              <input type="text" id="height" class="form_field visible_field type_field" name="height"
                placeholder="E.G. 45">
            </span>
          </div>

          <div class="field_container">
            <label for="width">Width (CM)</label>
            <span>
              <input type="text" id="width" class="form_field visible_field type_field" name="width"
                placeholder="E.G. 24">
            </span>
          </div>

          <div class="field_container">
            <label for="length">Length (CM)</label>
            <span>
              <input type="text" id="length" class="form_field visible_field type_field" name="length"
                placeholder="E.G. 15">
            </span>
          </div>

          <span class="type_description">
            *Please, provide dimensions
          </span>

        </div>

      </form>
    </article>
    <footer id="main_footer">
      <span>Scandiweb Test assignment</span>
    </footer>
  </main>

  <script src="../script/styling.js"></script>
  <script src="../script/script.js"></script>
  


</body>

</html>
<?php

  require_once("../src/bootstrap.php");

?>