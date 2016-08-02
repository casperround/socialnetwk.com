
		 <script>

 $(document).ready(function() {
       $("#feed_main_load").load("elements/feedloadscroll.php");
       var refreshId = setInterval(function() {
          $("#feed_main_load").load("elements/feedloadscroll.php?" + 1*new Date());
       }, 500000);
    });
</script>
<div id="feed_main_load">


	</div>
