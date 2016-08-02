
<style class="cp-pen-styles">
.pacman {
  background: yellow;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -100px;
  margin-left: -100px;
  width: 200px;
  height: 200px;
  border-radius: 200px;
}
.pacman-food {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -10px;
  overflow: hidden;
  width: 600px;
}
@-webkit-keyframes om-nom-nom-top {
  0% {
    border-bottom-width: 0;
  }
  50% {
    border-bottom-width: 100px;
  }
  100% {
    border-bottom-width: 0;
  }
}
@keyframes om-nom-nom-top {
  0% {
    border-bottom-width: 0;
  }
  50% {
    border-bottom-width: 100px;
  }
  100% {
    border-bottom-width: 0;
  }
}
@-webkit-keyframes om-nom-nom-bottom {
  0% {
    border-top-width: 0;
  }
  50% {
    border-top-width: 100px;
  }
  100% {
    border-top-width: 0;
  }
}
@keyframes om-nom-nom-bottom {
  0% {
    border-top-width: 0;
  }
  50% {
    border-top-width: 100px;
  }
  100% {
    border-top-width: 0;
  }
}
.jaw > div {
  width: 0;
  position: absolute;
  height: 0;
  left: 66.66666667px;
  border-color: transparent;
  border-style: solid;
  border-left-width: 133.33333333px;
}
.jaw > .top {
  border-bottom-color: black;
  border-bottom-width: 100px;
  -webkit-animation: om-nom-nom-top 0.4s infinite;
          animation: om-nom-nom-top 0.4s infinite;
  bottom: 100px;
}
.jaw > .bottom {
  border-top-width: 100px;
  border-top-color: black;
  top: 100px;
  -webkit-animation: om-nom-nom-bottom 0.4s infinite;
          animation: om-nom-nom-bottom 0.4s infinite;
}
@-webkit-keyframes food-mooving {
  0% {
    -webkit-transform: translateX(20px);
            transform: translateX(20px);
  }
  100% {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
}
@keyframes food-mooving {
  0% {
    -webkit-transform: translateX(20px);
            transform: translateX(20px);
  }
  100% {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
}
@-webkit-keyframes food-eated {
  0% {
    opacity: 1;
  }
  74.9% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes food-eated {
  0% {
    opacity: 1;
  }
  74.9% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
.food-item:first-of-type {
  -webkit-animation: food-eated 0.4s infinite;
          animation: food-eated 0.4s infinite;
}
.food-item {
  width: 20px;
  height: 20px;
  border-radius: 20px;
  background: white;
  float: left;
  margin-left: 100px;
}
.infinite-dish {
  position: relative;
  -webkit-animation: food-mooving 0.4s infinite;
          animation: food-mooving 0.4s infinite;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
}
</style></head><body>
<div class="pacman">
	<div class="jaw">
		<div class="top"></div>
    <div class="bottom"></div>
	</div>
</div>
<div class="pacman-food">
	<div class="infinite-dish">
    <div class="food-item"></div>
    <div class="food-item"></div>
    <div class="food-item"></div>
    <div class="food-item"></div>
    <div class="food-item"></div>
  </div>
</div>
