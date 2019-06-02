let part__sliderLeft = document.querySelector('#part__slider').style.marginLeft + 'vw'

document.querySelector('#part__slider').addEventListener("mousemove", roll)
setTimeout(function roll(){
let part__sliderLeft = document.querySelector('#part__slider').style.marginLeft -= 2
}, 30);



console.log(part__sliderLeft)