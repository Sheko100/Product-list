if (location.pathname == "/add-product/") {
  defaultFormFieldStyling();
}

(function makeClickingFeeling() {
  const eventName = ["mousedown", "mouseup", "mouseout"];
  const shadow = ["2px 2px 2px inset", "2px 2px 3px", "2px 2px 3px"];

  for (let i = 0; i < eventName.length; i++) {
    document
      .getElementById("controls_container")
      .addEventListener(eventName[i], function (e) {
        if (e.target.classList.contains("controls_button")) {
          e.target.style.boxShadow = shadow[i];
        }
      });
  }
})();

const showTypeFields = (typeField, allTypes, visibleTypeFields, typeToShow) => {
  for (let i = 0; i < typeField.length; i++) {
    typeField[i].classList.remove("visible_field");
  }

  for (let i = 0; i < allTypes.length; i++) {
    allTypes[i].style.display = "none";
  }

  for (let i = 0; i < visibleTypeFields.length; i++) {
    visibleTypeFields[i].classList.add("visible_field");
  }

  typeToShow.style.display = "block";
};

function defaultFormFieldStyling() {
  const field = document.getElementsByClassName("visible_field");
  const missingValueAlert = document.getElementById("missingValueAlert");

  for (let i = 0; i < field.length; i++) {
    field[i].oninput = (e) => {
      e.target.style.boxShadow = "0 0 2px 2px grey";
      e.target.parentElement.classList.contains("notAvailableAlert")
        ? e.target.parentElement.classList.remove("notAvailableAlert")
        : null;
      missingValueAlert.classList.contains("showAlert")
        ? missingValueAlert.classList.remove("showAlert")
        : null;
      e.target.parentElement.classList.contains("invalidValueAlert")
        ? e.target.parentElement.classList.remove("invalidValueAlert")
        : null;
    };
  }
}

const stylingSkuField = (sku) => {
  sku.style.boxShadow = "0 0 2px 2px rgb(255,215,0)";
  sku.parentElement.classList.add("notAvailableAlert");
};

const stylingEmptyField = (emptyField) => {
  const missingValueAlert = document.getElementById("missingValueAlert");

  
  for (let i = 0; i < emptyFields.length; i++) {
    emptyField[i].style.boxShadow = "0 0 2px 2px red";
    missingValueAlert.classList.add("showAlert");
  }
};

const stylingInvalidField = (invalidField) => {
  for (let i = 0; i < invalidField.length; i++) {
    invalidField[i].style.boxShadow = "0 0 2px 2px rgb(255,215,0)";
    invalidField[i].parentElement.classList.add("invalidValueAlert");
  }
};
