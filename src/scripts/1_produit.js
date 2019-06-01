let part__sliderLeft = document.querySelector('#part__slider').style.marginLeft + 'vw'

document.querySelector('#part__slider').addEventListener("mousemove", roll)
function roll(){
let part__sliderLeft = document.querySelector('#part__slider').style.marginLeft -= 2
}
setTimeout(function roll(){
; }, 30);


console.log(part__sliderLeft)