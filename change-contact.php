<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<?php 
if(isset($_POST['content'])){
	$contact_details = $_POST['content'];
	file_put_contents('data.txt', $_POST['content']);
	?>
<form method="post">
	<textarea name='content' rows="10" cols="50"><?= $contact_details ?>
	</textarea>
	<input type="submit" name="">
</form>
<?php } ?>
</body>
</html>