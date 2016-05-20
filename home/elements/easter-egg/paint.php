
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/MatthewReinbold/pen/tzbAD" />
<style class="cp-pen-styles">/*Twitter @locoalien*/
/*Sitio web www.locoaliensoft.com*/
/*www.facebook.com/CulturaInformatica*/


		* {margin: 0; padding: 0;}
		canvas {display: block;
			position: absolute;
			z-index: -2;
		}

/*Version mejorada. Espero les guste*/</style>
</style>

<html>
<body>
  <!--
    Example of paint drips on VoxPopDesign.com
    todo: detect when screen is resized and repaint based on the new window dimensions
  -->
	<canvas id='c'>
	</canvas>
</body>
</html>	

<script>
var width = window.innerWidth - 10;
var height = window.innerHeight - 10;
var c = document.getElementById('c');
var ctx = c.getContext('2d');
c.width = width;
c.height = height;

var paint = [];

var totalPaints = width/50;
var size = 20;

function init(){
    for (var i = 0; i < totalPaints; i++){
        addPaint();
    }
	
	//Set Interval -- Terrible! I know!
    setInterval( update, 40 );
}

function drawPaint(x,y,size, colour) {
    ctx.beginPath();
	ctx.arc(x, y, size ,0 , Math.PI*2, true);
	ctx.closePath();
	ctx.fillStyle=colour;
	ctx.fill();
}

function update(){
    for (var i = 0; i < paint.length; i++){
        paint[i].y = paint[i].y + paint[i].v;
        if (paint[i].y > height + 200){
            paint.splice(i,1);
            addPaint();
        }
        drawPaint(paint[i].x, paint[i].y, paint[i].s, paint[i].c);
    }
}

function addPaint(){
	//Try 50 times
	var i = 0;
	var maxTries = 25;
	var conflict;
	for (i; i < maxTries; i++) {
		size = Math.random() * size + 10;
		x = Math.random() * width;
		
		conflict = false;
		//Dont Allow drips ontop of each other (Overtaking drops destroy the prettyness)
		for (var j = 0; j < paint.length; j++) {
			if ((x + size > paint[j].x) && (x - size < paint[j].x + paint[j].s)) {
				conflict = true;
				break;
			}
			
			if ((x - size < paint[j].x) && (x + size > paint[j].x - paint[j].s)) {
				conflict = true;
				break;
			}
		}
		
		if (conflict == false) {
			paint.push({
				s: size,
				x: x,
				y: -60,
				v: (Math.random() * 3) + 2,
				c: getColor()
			});
			break;
		}
	}
}

function getColor() {
	var aColors = [
		'#990000',
		'#ad3232',
		'#a21616',
		'#a41c1c',
		'#b13b3b',
		'#a11313',
		'#cccccc',
		'#ccaaaa',
		'#aaaaaa',
		'#ddcccc',
		'#000000',
		'#330000'];
	var index = Math.floor( Math.random() * aColors.length);
	var returnVal = aColors[1];
	if( index > -1 && index < aColors.length) {
		returnVal = aColors[index];
	}

	return returnVal;
	
}

init();
//@ sourceURL=pen.js
</script>
<script src='http://codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body></html>