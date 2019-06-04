/*
-----------
Global
-----------
*/
// récupérer la width totale de #part__slider
var slider = document.querySelector('#part__slider')
var sliderWidth = slider.offsetWidth
console.log(sliderWidth)
// récupérer la width de l'écran de l'utilisateur
var screenWidth = window.innerWidth - 220
console.log(screenWidth)
// Determiner la taille en vw de #part_slider
var prctSlider = (sliderWidth / screenWidth) * 100
console.log(prctSlider)
// Déterminer la taille qui dépasse en vw
var offScreen = prctSlider - 100
console.log(offScreen)


// Detecter le mouvement de la souris sur la div #part__sliderCont
    slider.onmousemove = function(e){
        let rapportWidth = (e.clientX / window.innerWidth) * offScreen
        slider.style.left = -(rapportWidth)+ "vw"
        console.log(rapportWidth)
    }
    // selon la pos x de ta souris
    // Calculer sa position en pourcentage de la width de l'écran
    // appliquer à #part_slider.style.left la valeur -x vw
    window.onresize = function(){
         sliderWidth = slider.offsetWidth
         screenWidth = window.innerWidth - 220
         prctSlider = (sliderWidth / screenWidth) * 100
         offScreen = prctSlider - 100

    }

var menuBtn = document.querySelector('.menuButton')
var subMenu = document.querySelector('.subMenu')

menuBtn.addEventListener(
    'click',
    function(){
        if(subMenu.classList.contains('visible') == true){
            subMenu.classList.remove('visible')
            menuBtn.innerHTML = "MENU"
        }else{
            subMenu.classList.add('visible')
            menuBtn.innerHTML = "FERMER"
        }
    }
)