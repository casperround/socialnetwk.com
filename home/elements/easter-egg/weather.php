

  <style>
  @import url(http://fonts.googleapis.com/css?family=Lato:300);


button, input, select, textarea { font-family: "Lato", sans-serif; color: #fcfcfc; }

::-moz-selection { background: #000; color: #ccc; text-shadow: none; }

::selection { background: #000; color: #ccc; text-shadow: none; }

body { max-width: 100%; margin-left: auto; margin-right: auto; background: #1d1f20; }
body:after { content: " "; display: block; clear: both; }

main .input { margin-top: 30px; text-align: center; }
main .input input { color: #222; border: none; line-height: 2; font-size: 2em; padding: 10px; border-radius: 0.25em; }
main .input input:focus { border: none; outline: none; }
main h1 { text-align: center; margin-bottom: 100px; }
main .forecast { text-align: center; }
main .forecast .today { width: 50%; float: left; margin-left: 25%; margin-right: 25%; background: #1d1f20; margin-bottom: 100px; }
main .forecast div:nth-child(2) { display: none; }
main .forecast div:nth-child(3) { width: 33.33333%; float: left; background: #292c2d; }
main .forecast div:nth-child(4) { width: 33.33333%; float: left; background: #27292b; }
main .forecast div:last-child { width: 33.33333%; float: right; margin-right: 0; background: #242728; }
main .forecast h3 { padding: 10px 0; }

.switch { position: absolute; top: 10px; right: 10px; font-size: 0.9em; padding: 5px; background: #292c2d }
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


<body>

  <main ng-controller="WeatherForecastCtrl" ng-app="weather">		
  <div class="input">				
    <input type="text" ng-model="city" autofocus placeholder="Check weather in..">
  </div>
  <h1 ng-show="city">Weather in {{city}}, {{loc.city.country}}</h1>
  <section class="forecast">
    <div ng-repeat-start="day in forecast" ng-if="$first" ng-show="city" class="today">
      <h2>
        Today
        <br>{{day.weather[0].main}}
        <span ng-hide="checked"><br>{{day.temp.day | number: 0}}°C</span>
        <span ng-hide="!checked"><br>{{day.temp.day *(9/5)+32 | number: 0}}°F</span>
        <br>{{day.humidity}}%
        <span ng-hide="checked"><br>{{day.speed | number: 2}} km/h</span>
        <span ng-hide="!checked"><br>{{day.speed * 0.621371 | number: 2}} mph</span>
      </h2>
    </div>
    <div ng-repeat-end ng-show="city" ng-if="!first">
      <h3>
        {{day.dt *1000 | date: 'EEEE'}}
        <br>{{day.weather[0].main}}
        <span ng-hide="checked"><br>{{day.temp.day | number: 0}}°C</span>
        <span ng-hide="!checked"><br>{{day.temp.day *(9/5)+32 | number: 0}}°F</span>
        <br>{{day.humidity}}%
        <span ng-hide="checked"><br>{{day.speed | number: 2}} km/h</span>
        <span ng-hide="!checked"><br>{{day.speed * 0.621371 | number: 2}} mph</span>
      </h3>
    </div>
  </section>
  <div class="switch">
    imperial <input type="checkbox" ng-model="checked">  
  </div>
</main>

  <script src='//assets.codepen.io/assets/libs/fullpage/angular-12f11d1b419f55a9cceeaa8df1abc4c8.js'></script>

  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
  </script>

  <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-6c99970ade81e43be51fa877be0f7600.js"></script>

  <script>
    angular.module('weather', []).factory('openweather', function ($http) {
    var runRequest = function (city) {
        return $http({
            method: 'JSONP',
            url: 'http://api.openweathermap.org/data/2.5/forecast/daily?q=' + city + '&mode=json&units=metric&cnt=4&callback=JSON_CALLBACK'
        });
    };
    return {
        event: function (city) {
            return runRequest(city);
        }
    };
}).controller('WeatherForecastCtrl', function ($scope, $timeout, openweather) {
    var timeout;
    $scope.$watch('city', function (newCity) {
        if (newCity) {
            if (timeout)
                $timeout.cancel(timeout);
            timeout = $timeout(function () {
                openweather.event(newCity).success(function (data, status) {
                    $scope.loc = data;
                    $scope.forecast = data.list;
                });
            }, 1000);
        }
    });
});
    //@ sourceURL=pen.js
  </script>

</body>
