<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Image Uploader</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<style>
		body {
			background-color: grey;
			margin: 0;
			padding: 0;
		}

		.container {
			display: flex;
			flex-direction: column;
			margin-top: 200px;
			margin-right: auto;
			margin-left: auto;
			padding: 10px 10px;
			border-radius: 10px;
			background-color: #00AAD3;
			width: 50%;
			height: 300px;
		}

		.error p {
			color: red;
		}

		form {
			margin: auto;
		}

		#upload-btn {
			width: 300px;
			height: 40px;
			border-radius: 10px;
			border: 3px solid black;
			background-color: #17B84A;
			color: white;
			font-size: 20px;
			margin-left: auto;
			margin-right: auto;
		}

		#upload-btn:hover {
			cursor: pointer;
		}

		label {
			font-size: 20px;
			color: white;
		}

		#image-upload {
			border-radius: 10px;
			background-color: white;
			width: 50%;
		}

		#title {
			height: 30px;
			border-radius: 10px;
			border: 2px solid transparent;
			width: 300px;
		}

		button {
			margin-left: 50%;
			width: 300px;
			height: 30px;
			border: 0px;
			color: white;
			font-size: 20px;
			background-color: blueviolet;
			border-radius: 20px;
		}
		p{
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			background-color: white;
			font-size: 20px;
			width: 300px;
			padding: 5px 10px 5px 10px;
			border-radius: 10px;
		}
	</style>
</head>

<body>
	<?php foreach ($errors as $error) : ?>
		<li><?= esc($error) ?></li>
	<?php endforeach ?>

	<?= form_open_multipart('upload/upload') ?>
	<div class="container">
		<label for="image-Upload">Upload image:</label>
		<input type="file" name="image-upload" id="image-upload">
		<br>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title">
		<br>
		<input type="submit" value="Upload" name="upload-btn" id="upload-btn">
	</div>
	</form>
	<p><?= anchor('viewimages', 'View Uploaded Images') ?></p><br>
</body>

</html>