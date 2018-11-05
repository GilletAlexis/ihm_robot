<html>
	<head>
		<title>Page web PHP robot</title>
	</head>
	<body>
		<?php
			echo "Nous sommes aujourd'hui ". date("l").".";
		?>
		<div id = "titre1" class = "titre" style = "border:10px solid">
			<h1> Mon site WEB </h1>
		</div>
		<div id = "Robot1" class = "Robot" style = "border:10px solid">
			<input type="button" name="+1" value="+">
			<input type="text" name="text1" placeholder = "TEXTE">
			<input type="button" name="-1" value="-">
		</div>
		<div id = "Robot2" class = "Robot" style = "border:10px solid">
			<input type = "button" name = "+2" value = "+">
			<input type = "text" name = "text2" placeholder = "TEXTE">
			<input type = "button" name = "-2" value = "-">
		</div>
	</body>
</html>
