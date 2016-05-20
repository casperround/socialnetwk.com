
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/qorbani/pen/fIuzB" />


<style class="cp-pen-styles">/**
 * Notepad
 */

html {
	background-image: linear-gradient(rgba(70,0,0,0),rgba(170,50,0,.5)), url(http://subtlepatterns.com/patterns/wood_pattern.png);
	min-height: 100%;
	box-sizing: border-box;
	font: 100%/1.5 Helvetica Neue, Helvetica, Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	padding: 1.5em;
	position: absolute;
	z-index: -2;
	top: 50%;
}

.notepad {
	margin: 1.5em auto;
	width: 300px;
	border-radius: 5px;
	box-shadow: 0 5px 20px rgba(80,0,0,.3);
}

	.notepad h1 {
		text-align: center;
		font-size: 1em;
		background-color: #3f7eb6;
		background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.15));
		border-radius: 5px 5px 0 0;
		box-shadow: inset 0 1px rgba(255,255,255,.3);
		border: 1px solid rgba(0,0,0,.5);
		padding: .75em;
		color: #fff;
		text-shadow: 0 1px 1px rgba(0,0,0,.2);
		margin: 0;
		position: relative;
	}
	
		.notepad h1:after {
			content: '';
			position: absolute;
			width: 100%;
			bottom: 4px;
			left: 0;
			border-bottom: 1px dashed rgba(0,0,0,.6);
		}
	
	.notepad textarea {
		font: inherit;
		font-size: .75em;
		color: rgba(0,0,0,.7);
		margin: 0;
		display: block;
		width: 100%;
		box-sizing: border-box;
		border-radius: 0 0 5px 5px;
		border-color: rgba(0,0,0,.7);
		border-top: 0;
		resize: vertical;
		min-height: 150px;
		padding: 1.5em;
		padding-left: 3em;
		background-image: linear-gradient(0deg, transparent, transparent 24px, #f0c9ca 24px, #f0c9ca 25px, transparent 25px, transparent 27px, #f0c9ca 27px, #f0c9ca 28px, transparent 28px), linear-gradient(#fff, #fff 17px, #e3ebf3 17px, #e3ebf3 18px);
		background-size: 36px 18px, 36px 18px;
		background-repeat: repeat-y, repeat;
	}</style></head><body>
<div class=notepad>
	<h1>Notes</h1>
	<textarea>This page left intentionally blank.</textarea>
</div>

<script src='http://codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body></html>