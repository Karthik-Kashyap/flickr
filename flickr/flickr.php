<!DOCTYPE html>
<html>
<head>
	<title>
		flickr images
	</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="fl_style.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<script>
alert("before script");
</script>
<script>

alert("sfdsdsd inside script");
var size=500;
var url_size,result_size,result;
var	flurl;
flurl="https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=390d39008ba38713f08359f7ac8e819a&per_page=10&format=json&nojsoncallback=1";
alert("hello sdd");
$(document).ready(function() {
	alert("hello");
	$("#small").click(function(){
		size=75;
	})
	});
$(document).ready(function() {
	$("#medium").click(function(){
		size=240;
		
	})
	});
$(document).ready(function() {
	$("#large").click(function(){
		size=500;
	})
	});

$(document).ready(function() {
	$("#getimage").click(function(){

		$.getJSON(flurl,function(json){

			$.each(json.photos.photo,function(i,result){

				url_size="https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=390d39008ba38713f08359f7ac8e819a&photo_id="+result.id+"&format=json&nojsoncallback=1";
				$getJSON(url_size,function(size){

					$.each(size.sizes.size,function(i,result_size){
						if(result_size.width==size){
						$("#pictures").append('<div class="col-sm-4"><a href="'+.result_size.url+'" target="_blank"><img src="'+result_size.source+'"/></a></div>');
					}
					});
				});



			});




		});

	});

});



</script>

<script>
alert("after script");
</script>


</head>
<body>
<div class="container text-center">
<p class="text-center">choose the size of the image</p>
<div class="row">
<div class="col-sm-4 text-center btn btn-default" id="small">small(75)</div>
<div class="col-sm-4 text-center btn btn-default" id="medium">medium(240)</div>
<div class="col-sm-4 text-center btn btn-default" id="large">large(500)</div>
</div>
<div><p id="sizechosen"></p></div><br>
<p class="text-center">click the button to pictures</p>
<button class="btn btn-success btn-lg" id="getimage">get images</button>
</div>
<br>
<div class="row">
<div id="pictures"></div>
</div>
</body>
</html>