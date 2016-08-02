<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auto Loading Records</title>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>

<?php
include("config.php");

$get_total_rows = 0;
$results = $mysqli->query("SELECT COUNT(*) FROM media");

if($results){
	$get_total_rows = $results->fetch_row(); 
}
//break total records into pages
$total_groups= ceil($get_total_rows[0]/$items_per_group);	
?>

<script type="text/javascript">
$(document).ready(function() {
	var track_load = 0; //total loaded record group(s)
	var loading  = false; //to prevents multipal ajax loads
	var total_groups = <?=$total_groups;?>; //total record group(s)
	
	$('#results').load("autoload_process.php", {'group_no':track_load}, function() {track_load++;}); //load first group
	
	$(window).scroll(function() { //detect page scroll
		
		if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
		{
			
			if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('.animation_image').show(); //show loading image
				
				//load data from the server using a HTTP POST request
				$.post('autoload_process.php',{'group_no': track_load}, function(data){
									
					$("#results").append(data); //append received data into the element

					//hide loading image
					$('.animation_image').hide(); //hide loading image once data is received
					
					track_load++; //loaded group increment
					loading = false; 
				
				}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
					
					alert(thrownError); //alert with HTTP error
					$('.animation_image').hide(); //hide loading image
					loading = false;
				
				});
				
			}
		}
	});
});
</script>
<style>
body,td,th {font-family: Georgia, Times New Roman, Times, serif;font-size: 15px;}
.animation_image {background: #F9FFFF;border: 1px solid #E1FFFF;padding: 10px;width: 500px;margin-right: auto;margin-left: auto;}
#results{width: 500px;margin-right: auto;margin-left: auto;}
#resultst ol{margin: 0px;padding: 0px;}
#results li{margin-top: 20px;border-top: 1px dotted #E1FFFF;padding-top: 20px;}
</style>
</head>

<body>

<ol id="results">
</ol>
<div class="animation_image" style="display:none" align="center"><img src="ajax-loader.gif"></div>


</body>
</html>
