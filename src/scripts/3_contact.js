/*let form = document.querySelector('form')[0]
let email = document.querySelector('.email')
let inputs = document.querySelectorAll('input')
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
*/
let form = document.querySelector('form')
let inputs = document.querySelectorAll('input')
let check = document.querySelector('.check')
let textarea = document.querySelector('textarea')
let errors = document.querySelectorAll('.error')

inputs.forEach(function(input){
    input.addEventListener("input", function(e){
        input.classList.remove('error')
        input.parentElement.lastElementChild.innerHTML = ""
    })
})

textarea.addEventListener("input", function(textarea){
    // errors.innerHTML = "Champs invalide !"
    // errors.classList.remove("error")
})

form.addEventListener("submit", function(e){
    console.log("submit")
    if(inputs[0].value.length <= 0) {
        inputs[0].classList.add('error')
        inputs[0].parentElement.lastElementChild.innerHTML = "Erreur"
        e.preventDefault()
    }
    else if(inputs[1].value.length <= 0) {
        // errors.innerHTML = "Champs invalide !"
        // errors.classList.add("error active")
        e.preventDefault()
    }
    else if(inputs[2].value.length <= 0) { // Vérifier que c'est un email
        // errors.innerHTML = "Champs invalide !"
        // errors.classList.add("error active")
        e.preventDefault()
    }
    else if(textarea.value.length <= 0) {
        e.preventDefault()
    }
    else if(inputs[3].checked <= 0) {
        // errors.innerHTML = "Champs invalide !"
        // errors.classList.add("error active")
        e.preventDefault()
    }
})