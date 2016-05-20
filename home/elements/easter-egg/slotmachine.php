
  <meta charset="UTF-8">

  <!--
Copyright (c) 2015 by Ben Norris (http://codepen.io/benjaminsnorris/pen/mtgLK)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->


  <link rel="stylesheet" href="/assets/reset/normalize.css">

  <style>
  .page {
  height: 100%;
position: relative;

  background-image: -webkit-linear-gradient(top, #D8D8D8 0%, #F9F9F9 10%, #F9F9F9 80%, #D8D8D8 100%);
}

/* Mixins */
@-moz-keyframes spin /* Firefox */ {
  from {
    background-position: 0, 0 0;
  }
  to {
    background-position: 0, 0 -1580px;
  }
}
@-webkit-keyframes spin /* Safari and Chrome */ {
  from {
    background-position: 0, 0 0;
  }
  to { 
    background-position: 0, 0 -1580px;
  }
}
@-ms-keyframes spin /* IE */ {
  from {
    background-position: 0, 0 0;
  }
  to {
    background-position: 0, 0 -1580px;
  }
}
@-o-keyframes spin /* Opera */ {
  from {
    background-position: 0, 0 0;
  }
  to {
    background-position: 0, 0 -1580px;
  }
}
@keyframes spin {
  from {
    background-position: 0, 0 0;
  }
  to {
    background-position: 0, 0 -1580px;
  }
}
#equation {
  position: absolute;
  left: 15%;
  margin-left: -50px;
  top: 50%;
  margin-top: -80px;
}
#equation span {
  display: inline-block;
  vertical-align: middle;
  margin-right: 12px;
}
#equation .spinner {
  height: 140px;
  margin: 10px;
  margin-right: 12px;
  background-color: #FFF;
  background-position: 0;
  border-radius: 5px;
  box-shadow: inset 0 0 5px #000;
  position: relative;
  -webkit-animation: spin 3s linear 0s infinite;
  -moz-animation: spin 3s linear 0s infinite;
  -o-animation: spin 3s linear 0s infinite;
  -ms-animation: spin 3s linear 0s infinite;
  animation: spin 3s linear 0s infinite;
}
#equation .spinner:before {
  content: '';
  position: absolute;
  z-index: -1;
  top: -10px;
  left: -10px;
  width: 120px;
  height: 160px;
  border-radius: 10px;
  background-color: #333;
  background-image: -webkit-linear-gradient(#666 0%, #333 60%, #666 100%);
  background-image: -moz-linear-gradient(#666 0%, #333 60%, #666 100%);
  background-image: -ms-linear-gradient(#666 0%, #333 60%, #666 100%);
  background-image: -o-linear-gradient(#666 0%, #333 60%, #666 100%);
  box-shadow: inset 2px 2px 2px rgba(255, 255, 255, 0.2);
}
#equation .drink {
  background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.6) 0%, transparent 15%, transparent 85%, rgba(0, 0, 0, 0.6) 100%), url("http://media.balsamiq.com/img/hashtaghot/drinks.jpg");
  background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.6) 0%, transparent 15%, transparent 85%, rgba(0, 0, 0, 0.6) 100%), url("http://media.balsamiq.com/img/hashtaghot/drinks.jpg");
  background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.6) 0%, transparent 15%, transparent 85%, rgba(0, 0, 0, 0.6) 100%), url("http://media.balsamiq.com/img/hashtaghot/drinks.jpg");
  background-image: -o-linear-gradient(rgba(0, 0, 0, 0.6) 0%, transparent 15%, transparent 85%, rgba(0, 0, 0, 0.6) 100%), url("http://media.balsamiq.com/img/hashtaghot/drinks.jpg");
  width: 80px;
  background-size: 80px auto;
  background-position: 0, 0 20px;
}
#equation .drink:before {
  width: 100px;
}
#equation.zero .drink {
  background-position: 0, 0 -1580px;
}
#equation.one .drink {
  background-position: 0, 0 -1680px;
}
#equation.two .drink {
  background-position: 0, 0 -1780px;
}
#equation.three .drink {
  background-position: 0, 0 -1880px;
}
#equation.four .drink {
  background-position: 0, 0 -1980px;
}
#equation.five .drink {
  background-position: 0, 0 -2080px;
}
#equation.six .drink {
  background-position: 0, 0 -2180px;
}
#equation.seven .drink {
  background-position: 0, 0 -2280px;
}
#equation.done .spinner {
  -webkit-animation: none;
  -moz-animation: none;
  -o-animation: none;
  -ms-animation: none;
  animation: none;
  -webkit-transition: background-position 2s ease-out 0s;
  -moz-transition: background-position 2s ease-out 0s;
  -o-transition: background-position 2s ease-out 0s;
  -ms-transition: background-position 2s ease-out 0s;
  transition: background-position 2s ease-out 0s;
}

#shoulder {
  position: absolute;
  top: 30px;
  left: -100px;
  width: 80px;
  height: 100px;
  border-radius: 10px;
  background-color: #333;
  background-image: -webkit-linear-gradient(#666 0%, #333 60%, #666 100%);
  background-image: -moz-linear-gradient(#666 0%, #333 60%, #666 100%);
  background-image: -ms-linear-gradient(#666 0%, #333 60%, #666 100%);
  background-image: -o-linear-gradient(#666 0%, #333 60%, #666 100%);
  box-shadow: inset 2px 2px 2px rgba(255, 255, 255, 0.2);
}

#arm {
  position: relative;
  top: 10px;
  left: 10px;
  cursor: pointer;
  width: 60px;
  height: 80px;
  border-radius: 10% / 50%;
  background-color: #666;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.3) 0%, transparent 15%, rgba(255, 255, 255, 0) 50%, transparent 85%, rgba(0, 0, 0, 0.3)), -webkit-linear-gradient(top, #333 0%, #666 10%, #999 30%, rgba(255, 255, 255, 0.8) 60%, #999 70%, #666 90%, #333 100%);
  background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0.3) 0%, transparent 15%, rgba(255, 255, 255, 0) 50%, transparent 85%, rgba(0, 0, 0, 0.3)), -moz-linear-gradient(top, #333 0%, #666 10%, #999 30%, rgba(255, 255, 255, 0.8) 60%, #999 70%, #666 90%, #333 100%);
  background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0.3) 0%, transparent 15%, rgba(255, 255, 255, 0) 50%, transparent 85%, rgba(0, 0, 0, 0.3)), -ms-linear-gradient(top, #333 0%, #666 10%, #999 30%, rgba(255, 255, 255, 0.8) 60%, #999 70%, #666 90%, #333 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.3) 0%, transparent 15%, rgba(255, 255, 255, 0) 50%, transparent 85%, rgba(0, 0, 0, 0.3)), -o-linear-gradient(top, #333 0%, #666 10%, #999 30%, rgba(255, 255, 255, 0.8) 60%, #999 70%, #666 90%, #333 100%);
}
#arm:before {
  content: '';
  position: absolute;
  top: -40px;
  left: 16px;
  width: 16px;
  height: 70px;
  border-radius: 8px;
  box-shadow: 0px 2px 0px #333;
  background-color: #999;
  -webkit-transform: rotate(-10deg);
  -moz-transform: rotate(-10deg);
  transform: rotate(-10deg);
  background-image: -webkit-linear-gradient(left, #666 0%, rgba(255, 255, 255, 0.7) 50%, #666 100%);
  background-image: -moz-linear-gradient(left, #666 0%, rgba(255, 255, 255, 0.7) 50%, #666 100%);
  background-image: -ms-linear-gradient(left, #666 0%, rgba(255, 255, 255, 0.7) 50%, #666 100%);
  background-image: -o-linear-gradient(left, #666 0%, rgba(255, 255, 255, 0.7) 50%, #666 100%);
  background-image: linear-gradient(to right, #666666 0%, rgba(255, 255, 255, 0.7) 50%, #666666 100%);
  -webkit-transition: all 0.5s ease-in-out 0s;
  -moz-transition: all 0.5s ease-in-out 0s;
  -o-transition: all 0.5s ease-in-out 0s;
  -ms-transition: all 0.5s ease-in-out 0s;
  transition: all 0.5s ease-in-out 0s;
}
#arm:after {
  content: '';
  position: absolute;
  top: -70px;
  left: -4px;
  width: 40px;
  height: 40px;
  border-radius: 100%;
  background-color: #760209;
  border: 2px solid #5d0207;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background-image: -webkit-radial-gradient(50% 40%, closest-corner, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
  background-image: -moz-radial-gradient(50% 40%, closest-corner, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
  background-image: -ms-radial-gradient(50% 40%, closest-corner, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
  background-image: -o-radial-gradient(50% 40%, closest-corner, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0));
  -webkit-transition: all 0.5s ease-in-out 0s;
  -moz-transition: all 0.5s ease-in-out 0s;
  -o-transition: all 0.5s ease-in-out 0s;
  -ms-transition: all 0.5s ease-in-out 0s;
  transition: all 0.5s ease-in-out 0s;
}

#arm.clicked:before {
  top: -20px;
  left: 20px;
  -webkit-transform: rotate3d(100, 10, 0, 180deg);
  -moz-transform: rotate3d(100, 10, 0, 180deg);
  transform: rotate3d(100, 10, 0, 180deg);
  -webkit-transform-origin: 0% 100%;
  -moz-transform-origin: 0% 100%;
  transform-origin: 0% 100%;
  -webkit-transition: all 0.5s ease-in-out 0s;
  -moz-transition: all 0.5s ease-in-out 0s;
  -o-transition: all 0.5s ease-in-out 0s;
  -ms-transition: all 0.5s ease-in-out 0s;
  transition: all 0.5s ease-in-out 0s;
}
#arm.clicked:after {
  top: 90px;
  -webkit-transition: all 0.5s ease-in-out 0s;
  -moz-transition: all 0.5s ease-in-out 0s;
  -o-transition: all 0.5s ease-in-out 0s;
  -ms-transition: all 0.5s ease-in-out 0s;
  transition: all 0.5s ease-in-out 0s;
}

  </style>

  <script>
    window.console = window.console || function(t) {};
    window.open = function(){ console.log('window.open is disabled.'); };
    window.print = function(){ console.log('window.print is disabled.'); };
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }
  </script>

    <script src="//assets.codepen.io/assets/libs/prefixfree.min-de773054e90c52a3c2631c944681b64e.js">"></script>

    <script src="//assets.codepen.io/assets/libs/modernizr-0e41cf622f0788eca25945c37bdc5b15.js">"></script>

</head>

<body>

          <div id="equation" class="done">
          <span class="drink spinner"></span>
          <div id="shoulder"><div id="arm"></div></div>
        </div>

  <script src='//assets.codepen.io/assets/libs/fullpage/jquery-c152c51c4dda93382a3ae51e8a5ea45d.js'></script>

  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
  </script>

  <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-6c99970ade81e43be51fa877be0f7600.js"></script>

  <script>
    var drinks = [
        'zero',
        'one',
        'two',
        'three',
        'four',
        'five',
        'six',
        'seven'
    ], prev = -1;
$(document).ready(function () {
    $('#arm').click(function (e) {
        var arm = $(this).addClass('clicked'), delay = setTimeout(function () {
                arm.removeClass('clicked');
            }, 500);
        e.preventDefault();
        spin();
    });
});
function spin() {
    do {
        if (window.CP.shouldStopExecution(1)) {
            break;
        }
        index = Math.floor(Math.random() * drinks.length);
    } while (index == prev);
    var equation = $('#equation').removeClass('done').removeClass(drinks[prev]).addClass(drinks[index]), timeout = setTimeout(function () {
            equation.addClass('done');
        }, 3000);
    prev = index;
    window.CP.exitedLoop(1);
}
    //@ sourceURL=pen.js
  </script>

</body>

</html>
