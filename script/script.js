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


function validateData() {
const field = document.getElementsByClassName("visible_field");
const missingValueAlert = document.getElementById("missingValueAlert");
const emptyFields = isEmpty(field);
const invalidFields = isInvalid(field);

//window.alert(emptyFields);
//window.alert(invalidFields);

if(emptyFields.length > 0 || invalidFields.length > 0) {

for(let i=0;i<emptyFields.length;i++) {
    
emptyFields[i].style.boxShadow="0 0 2px 2px red";

emptyFields[i].oninput=function(e) {
e.target.style.boxShadow="0 0 2px 2px grey";

const hideAlert = missingValueAlert.classList.contains("showAlert") ? 
missingValueAlert.classList.remove("showAlert") : false;
// reduce the number of the event listeners
}

missingValueAlert.classList.add("showAlert");


}

for(let i=0;i<invalidFields.length;i++) {

invalidFields[i].style.boxShadow="0 0 2px 2px rgb(255,215,0)";

invalidFields[i].parentElement.classList.add("invalidValueAlert");

invalidFields[i].oninput=function(e) {
e.target.style.boxShadow="0 0 2px 2px grey";
e.target.parentElement.classList.remove("invalidValueAlert");
// reduce the number of the events
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
const invalidChars = /^\s$|\s{2}|[0-9\\\/\(\)\$\[\]\{\}\%\<\>\|\"\'\-\+\=\*\`\!\?\#\@\&\:\;\,\.\^\~]/;

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


function toDeleteProduct(checkbox){
checkbox.classList.toggle("checked");
}



function deleteProduct() {
    const checkedbox = document.getElementsByClassName("checked");

    for (let i = 0; i < checkedbox.length; i++) {
            checkedbox[i].parentElement.style.display="none";
    }

}

function addProduct() {
    const productContainer = document.getElementById("product_container");
}

//window.alert(productManager);