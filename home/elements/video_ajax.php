<head>
		<script src='//codepen.io/assets/editor/live/css_live_reload_init.js'></script>
		 <script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>
		 <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
		 <script>

 $(document).ready(function() {
       $("#feed_main_load").load("elements/video_load_ajax.php");
       var refreshId = setInterval(function() {
          $("#feed_main_load").load("elements/video_load_ajax.php?" + 1*new Date());
       }, 60000);
    });
</script>
<div id="feed_main_load">


	</div>
