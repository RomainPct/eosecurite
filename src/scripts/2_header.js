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