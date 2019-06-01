var part__cntWd, part__sldWd, part__tb

function part__mouseMove() {
    part__cntWd = document.querySelector('#part__partners').innerWidth;
		part__tb = document.querySelector('.part__partnersSquare');
		part__sldWd = part__tb.outerWidth;
		
		document.querySelector('part__partners').mousemove(function(e){
			part__tb.css({left: ((part__cntWd - part__sldWd)*((e.pageX / part__cntWd).toFixed(3))).toFixed(1) +"px" });
 		});
}

part__mouseMove()