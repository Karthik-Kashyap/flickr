<?php

if(!empty($_GET['location']))
{
	//echo "inside if\n";
	$fl_url='https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key=390d39008ba38713f08359f7ac8e819a&per_page=10&format=json&nojsoncallback=1&name='.$_GET['location'];
	$fl_json=file_get_contents($fl_url);
	echo "fljson====$fl_json<br><br><br>\n";
$fl_array=json_decode($fl_json,true);
	echo "fl_array=====$fl_array";

if(jsonFlickrApi)
	
	if ($fl_array['stat'] == 'ok'){

	$photo_title = $fl_array['photo']['title']['_content'];

	echo "Title is $photo_title!";
}else{

	echo "Call failed!";
}


	
}




?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" >
	<input type="text" name="location"/>
	<button type="submit">submit</button>
</form>
</body>
</html>