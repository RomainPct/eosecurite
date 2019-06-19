let form = document.querySelector('form')

if (form != null) {

    let inputs = document.querySelectorAll('input')
    let check = document.querySelector('.check')
    let textarea = document.querySelector('textarea')
    let errors = document.querySelectorAll('.error')

    inputs.forEach(function (input) {
        input.addEventListener("input", function (e) {
            input.classList.remove('error')
            if (input.getAttribute('type') == "checkbox") {
                input.classList.remove('error')
            } else {
                input.parentElement.lastElementChild.innerHTML = ""
            }
        })
    })

    textarea.addEventListener("input", function (textarea) {
        textarea.classList.remove('error')
        textarea.parentElement.lastElementChild.innerHTML = ""
    })

    form.addEventListener("submit", function (e) {
        console.log("submit")
        console.log(inputs)
        if (inputs[0].value.length <= 0) {
            inputs[0].classList.add('error')
            inputs[0].parentElement.lastElementChild.innerHTML = "Champ obligatoire"
            e.preventDefault()
        }
        if (inputs[1].value.length <= 0) {
            inputs[1].classList.add('error')
            inputs[1].parentElement.lastElementChild.innerHTML = "Champ obligatoire"
            e.preventDefault()
        }
        if ((inputs[2].value.length <= 0) || verifMail(inputs[2].value)) { // Vérifier que c'est un email
            inputs[2].classList.add('error')
            inputs[2].parentElement.lastElementChild.innerHTML = "Entrez une adresse mail valide"
            e.preventDefault()
        }
        if (textarea.value.length <= 0) {
            textarea.classList.add('error')
            textarea.parentElement.lastElementChild.innerHTML = "Champ obligatoire"
            e.preventDefault()
        }
        if (!inputs[3].checked) {
            inputs[3].classList.add('error')
            inputs[3].parentElement.lastElementChild.classList.add('error')
            e.preventDefault()
        }
    })

    function verifMail(mail) {
        var regexMail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return !regexMail.test(mail)
    }

}