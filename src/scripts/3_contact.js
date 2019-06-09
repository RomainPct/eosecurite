let form = document.getElementsByTagName('form')[0]
let email = document.querySelector('.email')
let inputs = document.getElementsByTagName('input')
let check = document.querySelector('.check')
let error = document.querySelector('.error')

email.addEventListener("input", function (event){
    if (email.validity.valid) {
      error.innerHTML = ""
      error.className = "error"
    }
}, false);

inputs.addEventListener("input", function (event){
    if (input == null) {
        console.log(inputs)
    } 
}, false);

check.addEventListener("check", function (event){
    if (check.checked) {
      error.innerHTML = ""
      error.className = "error"
    }
}, false);


form.addEventListener("submit", function(event){
    if ((!email.validity.valid) || (!input.validity.valid) || (!check.checked)){
      error.innerHTML = "Champs invalide !"
      error.className = "error"
      event.preventDefault()
    }
}, false);
