class Slider{
    constructor(slider){
        this.slider = slider
        this.setVariables()

    }
    setVariables(){
        this.sliderWidth = this.slider.offsetWidth
        this.screenWidth = window.innerWidth - 220
        this.prctSlider = (this.sliderWidth / this.screenWidth) * 100
        this.offScreen = this.prctSlider - 100
    }
    mouseMove(e){
        let rapportWidth = (e.clientX / window.innerWidth) * this.offScreen
        this.slider.style.left = -(rapportWidth)+ "vw"
    }
}

var sliderElem = document.querySelector('.part__slider')
if (sliderElem != null) {
    var slider = new Slider(sliderElem)
    window.onmousemove = function(e){
        slider.mouseMove(e)
    }
    window.onresize = slider.setVariables()
}