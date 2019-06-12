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
let error = document.querySelectorAll('.error')

inputs.forEach(function(input){
    input.addEventListener("input", function(e){
        error.innerHTML = "Champs invalide !"
        error.classList.remove("error")
        console.log(error)
    })
})

textarea.addEventListener("input", function(textarea){
    error.innerHTML = "Champs invalide !"
    error.classList.remove("error")
})

form.addEventListener("submit", function(e){
    if(inputs[0].value.lenght <= 0) {
        error.innerHTML = "Champs invalide !"
        error.classList.add("error active")
        e.preventDefault()
    }
    else if(inputs[1].value.lenght <= 0) {
        error.innerHTML = "Champs invalide !"
        error.classList.add("error active")
        e.preventDefault()
    }
    else if(inputs[2].value.lenght <= 0) {
        error.innerHTML = "Champs invalide !"
        error.classList.add("error active")
        e.preventDefault()
    }
    else if(inputs[3].value.lenght <= 0) {
        error.innerHTML = "Champs invalide !"
        error.classList.add("error active")
        e.preventDefault()
        console.log(e)
    }
},)