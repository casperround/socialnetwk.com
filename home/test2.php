<body>
<div class="wrap1">
	<div class="cube">
		<div class="front">front</div>
		<div class="back">back</div>
		<div class="top">top</div>
		<div class="bottom">bottom</div>
		<div class="left">left</div>
		<div class="right">right</div>
	</div>
</div>
<style>
body {
	height:100%;
	width:100%;
	background: black;
}
.wrap1 {
	perspective: 80000px;
	position: relative;
	left:200px;
	top:50px;
	perspective-origin: 50% 200px;
}
.cube div {
	position: absolute;
	width: 50px;
	height: 50px;
}
.back {
	transform: translateZ(-100px) rotateY(180deg);
	background: rgba(255,0,0,0.2);
}
.right {
	transform: rotateY(-270deg) translateX(100px);
	background: rgba(0,255,0,0.2);
	transform-origin: top right;
}
.left {
	transform: rotateY(270deg) translateX(-100px);
	background: rgba(0,0,255,0.2);
	transform-origin: center left;
}
.top {
	transform: rotateX(-90deg) translateY(-100px);
	background: rgba(255,50,0,0.2);
	transform-origin: top center;
}
.bottom {
	transform: rotateX(90deg) translateY(100px);
	background: rgba(0,255,50,0.2);
	transform-origin: bottom center;
}
.front {
	transform: translateZ(100px);
	background: rgba(50,0,255,0.2);
}
</style>
</body>