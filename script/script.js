if (location.pathname == "/add-product/") {
  showFieldsOf("DVD");
}

function showFieldsOf(type) {
  const allTypes = document.getElementsByClassName("type_container");
  const typeToShow = document.getElementById(type);
  const visibleTypeFields = document.querySelectorAll("#" + type + " input");
  const typeField = document.getElementsByClassName("type_field");

  showTypeFields(typeField, allTypes, visibleTypeFields, typeToShow);
}

function checkAvailabilityOf(sku) {
  const skuValue = sku.value;

  fetch(`../src/Store/Database/skuAvailability.php?sku=${skuValue}`)
    .then((response) => response.json())
    .then((isAvailable) => {
      if (!isAvailable) {
        stylingSkuField(sku);
      }
    });
}

function validateData() {
  const field = document.getElementsByClassName("visible_field");
  const emptyFields = isEmpty(field);
  const invalidFields = isInvalid(field);

  if (emptyFields.length > 0 || invalidFields.length > 0) {

      stylingEmptyField(emptyFields);
      stylingInvalidField(invalidFields);

    return false;
  }
}

function isEmpty(field) {
  const emptyFields = [];

  for (i = 0; i < field.length; i++) {
    if (field[i].value == "") {
      emptyFields.push(field[i]);
    }
  }

  return emptyFields;
}

function isInvalid(field) {
  const nameField = field[1];
  const invalidChars =
    /^\s$|\s{2}|[\\\/\(\)\$\[\]\{\}\%\<\>\|\"\'\-\+\=\*\`\!\?\#\@\&\:\;\,\.\^\~]/;

  const invalidFields = [];
  const startNumberFieldIndex = 2;

  if (invalidChars.test(nameField.value)) {
    invalidFields.push(nameField);
  }

  for (i = startNumberFieldIndex; i < field.length; i++) {
    if (isNaN(field[i].value)) {
      invalidFields.push(field[i]);
    }
  }

  return invalidFields;
}
