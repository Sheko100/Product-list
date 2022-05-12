
if(location.pathname == "/add-product/") {
    showFieldsOf("DVD");
}


function showFieldsOf(type) {

const allTypes = document.getElementsByClassName("type_container");
const typeToShow = document.getElementById(type);
const visibleTypeFields = document.querySelectorAll("#"+type+" input");
const typeField = document.getElementsByClassName("type_field");



    for(let i=0;i<typeField.length;i++) {

        typeField[i].classList.remove("visible_field");
    }



for(let i = 0; i<allTypes.length;i++) {
allTypes[i].style.display="none"
}

for(let i=0;i<visibleTypeFields.length;i++) {
visibleTypeFields[i].classList.add("visible_field");
}

typeToShow.style.display="block";


}


function checkAvailabilityOf(sku) {
const skuValue = sku.value;


fetch(`../src/Store/Database/skuAvailability.php?sku=${skuValue}`)
.then(response => response.json())
.then(isAvailable => {
  if(!isAvailable) {
    sku.style.boxShadow="0 0 2px 2px rgb(255,215,0)";
    sku.parentElement.classList.add("notAvailableAlert");
    sku.oninput = function(e) {
      e.target.style.boxShadow="0 0 2px 2px grey";
      e.target.parentElement.classList.remove("notAvailableAlert");
    }
  }
});


}


function validateData() {
const field = document.getElementsByClassName("visible_field");
const missingValueAlert = document.getElementById("missingValueAlert");
const emptyFields = isEmpty(field);
const invalidFields = isInvalid(field);


if(emptyFields.length > 0 || invalidFields.length > 0) {

for(let i=0;i<emptyFields.length;i++) {
    
emptyFields[i].style.boxShadow="0 0 2px 2px red";

emptyFields[i].oninput=function(e) {
e.target.style.boxShadow="0 0 2px 2px grey";

const hideAlert = missingValueAlert.classList.contains("showAlert") ? 
missingValueAlert.classList.remove("showAlert") : false;
}

missingValueAlert.classList.add("showAlert");


}

for(let i=0;i<invalidFields.length;i++) {

invalidFields[i].style.boxShadow="0 0 2px 2px rgb(255,215,0)";

invalidFields[i].parentElement.classList.add("invalidValueAlert");

invalidFields[i].oninput=function(e) {
e.target.style.boxShadow="0 0 2px 2px grey";
e.target.parentElement.classList.remove("invalidValueAlert");
}

}

return false;
}



}

function isEmpty(field) {

const emptyFields=[];

for(i=0;i<field.length;i++) {

if(field[i].value == "") {
emptyFields.push(field[i]);
}

}

return emptyFields;
}

function isInvalid(field) {

const nameField = field[1];
const invalidChars = /^\s$|\s{2}|[\\\/\(\)\$\[\]\{\}\%\<\>\|\"\'\-\+\=\*\`\!\?\#\@\&\:\;\,\.\^\~]/;

const invalidFields = [];
const startNumberFieldIndex = 2;


if(invalidChars.test(nameField.value)) {
invalidFields.push(nameField);
}



for(i=startNumberFieldIndex;i<field.length;i++) {

if(isNaN(field[i].value)) {

invalidFields.push(field[i]);

}

}

return invalidFields;

}

(function makeClickingFeeling() {
  const eventName = ["mousedown", "mouseup", "mouseout"];
  const shadow = ["2px 2px 2px inset", "2px 2px 3px", "2px 2px 3px"];

  for(let i=0;i<eventName.length;i++) {
  document.getElementById("controls_container").addEventListener(eventName[i], function(e) {

    if(e.target.classList.contains("controls_button")) {
      e.target.style.boxShadow = shadow[i];
    }

  });
  }
})();

