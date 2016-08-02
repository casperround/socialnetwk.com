
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/josemc/pen/JoKOZm" />

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:300'>
<style class="cp-pen-styles">
#calculator {
  width: 12em;
  height: auto;
  background: linear-gradient(#4389a2, #5c258d);
}
.top span.clear {
  float: left;
  box-shadow: 0 4px #ff7c87;
  color: #FFF;
}
.top .input {
  height: 3em;
  width: 9em;
  padding-right: 1em;
  float: right;
  color: #FFF;
  line-height: 3em;
  text-align: right;
  letter-spacing: 1px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}
.keys,
.top {
  overflow-x:auto;
}
.keys span,
.top span.clear {
  float: left;
  cursor: pointer;
  width: 3em;
  height: 3em;
  line-height: 3em;
  color: #fff;
  text-align: center;
  user-select: none;
  transition: background-color 0.2s ease;
  border-right: 1px solid rgba(255, 255, 255, 0.3);
  border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}
.keys span.operator {
  background: rgba(255, 255, 255, 0.2);
  border-right: 0;
  color: rgba(0, 0, 0, 0.5);
}
.keys span.equals {
  color: #888e5f;
}
.keys span:hover {
  background: rgba(255, 255, 255, 0.3);
  color: #FFF;
}
.keys span.equals:hover {
  background: rgba(255, 255, 255, 0.2);
  color: #fff;
}
.top span.clear:hover {
  background: rgba(255, 255, 255, 0.2);
  color: #FFF;
}
</style></head><body>
<div id="calculator">
	<!-- Screen and clear key -->
	<div class="top">
		<span class="clear" data-value="C">C</span>
		<div class="input"></div>
    <div class="result"></div>
	</div>
	
	<div class="keys">
		<!-- operators and other keys -->
		<span data-value="7">7</span>
		<span data-value="8">8</span>
		<span data-value="9">9</span>
		<span class="operator" data-value="/">/</span>
		<span data-value="4">4</span>
		<span data-value="5">5</span>
		<span data-value="6">6</span>
		<span class="operator" data-value="*">x</span>
		<span data-value="1">1</span>
		<span data-value="2">2</span>
		<span data-value="3">3</span>
		<span class="operator" data-value="-">-</span>
		<span data-value="0">0</span>
		<span data-value=".">.</span>
		<span class="equals" data-value="=">=</span>
		<span class="operator" data-value="+">+</span>
	</div>
</div>

<!-- PrefixFree -->
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>
<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
<script>
var keys = document.querySelectorAll('#calculator span');
var operators = [
    '+',
    '-',
    'x',
    '\xF7'
];
var decimalAdded = false;
for (var i = 0; i < keys.length; i++) {
    if (window.CP.shouldStopExecution(1)) {
        break;
    }
    keys[i].onclick = function (e) {
        var input = document.querySelector('.input');
        var inputVal = input.innerHTML;
        var btnVal = this.getAttribute('data-value');
        if (btnVal == 'C') {
            input.innerHTML = '';
            decimalAdded = false;
        } else if (btnVal == '=') {
            var equation = inputVal;
            var lastChar = equation[equation.length - 1];
            equation = equation.replace(/x/g, '*').replace(/÷/g, '/');
            if (operators.indexOf(lastChar) > -1 || lastChar == '.')
                equation = equation.replace(/.$/, '');
            if (equation)
                input.innerHTML = eval(equation);
            decimalAdded = false;
        } else if (operators.indexOf(btnVal) > -1) {
            var lastChar = inputVal[inputVal.length - 1];
            if (inputVal != '' && operators.indexOf(lastChar) == -1)
                input.innerHTML += btnVal;
            else if (inputVal == '' && btnVal == '-')
                input.innerHTML += btnVal;
            if (operators.indexOf(lastChar) > -1 && inputVal.length > 1) {
                input.innerHTML = inputVal.replace(/.$/, btnVal);
            }
            decimalAdded = false;
        } else if (btnVal == '.') {
            if (!decimalAdded) {
                input.innerHTML += btnVal;
                decimalAdded = true;
            }
        } else {
            input.innerHTML += btnVal;
        }
        e.preventDefault();
    };
}
window.CP.exitedLoop(1);
//# sourceURL=pen.js
</script>
<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body></html>