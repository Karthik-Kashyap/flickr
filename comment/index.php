<?php
date_default_timezone_set('Asia/Kolkata');
include 'comments.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>title</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	echo "<form method='POST' action='".setcomments()."'>
		<input type='hidden' name='uid' value='anonymous'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea name='message' ></textarea><br>
		<button type='submit' name='submit'>comment</button>
	</form>";
	?>

</body>
</html>