<script>
alert("before script");
</script>
<script>

//alert("sfdsdsd inside script");
</script>
<script>
var size=500;
//alert("sfdsdsd second script");
</script>
<script>
var url_size,result_size,result;
//lert("sfdsdsd third script");
</script>
<script>
var	flurl;
//alert("sfdsdsd fourth script");
</script>
<script>
flurl="https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=390d39008ba38713f08359f7ac8e819a&per_page=10&format=json&nojsoncallback=1";
alert("after url");
</script>
<script>
alert("hello sdd");
</script>
<script>
alert("1");
$(document).ready(function() {
	$('#small').click(function(){
		size=75;
	alert("hello inside small");
	})
	});
alert("2");
</script>
<script>
$(document).ready(function() {
	$('#medium').click(function(){
		size=240;
		
	})
	});
$(document).ready(function() {
	$('#large').click(function(){
		size=500;
	})
	});

$(document).ready(function() {
	$('#getimage').click(function(){

		$.getJSON(flurl,function(json){

			$.each(json.photos.photo,function(i,result){

				url_size="https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=390d39008ba38713f08359f7ac8e819a&photo_id="+result.id+"&format=json&nojsoncallback=1";
				$.getJSON(url_size,function(size){

					$.each(size.sizes.size,function(i,result_size){
						if(result_size.width==size){
						$("#pictures").append('<div class="col-sm-4"><a href="'+.result_size.url+'" target="_blank"><img src="'+result_size.source+'"/></a></div>');
					}
					})
				})



			});




		});

	});

});



</script>

<script>
alert("after script");
</script>