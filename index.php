<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calculadora de hash</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
			color: #333;

		}
		.container {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px #999;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-size: 18px;
			color: #0099cc;
		}
		input[type="text"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #0099cc;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		.result {
			margin-top: 20px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			background-color: #f1f1f1;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1><center>Convertidor de hash<center/></h1>
		<form method="post">
			<label>Texto:</label>
			<input type="text" name="texto">
			<label>Tipo de hash:</label>
			<select name="hash">
				<option value="md5">MD5</option>
				<option value="sha256">SHA256</option>
				<option value="sha512">SHA512</option>
			</select>
			<input type="submit" value="Calcular hash">
		</form>
		<div class="result">
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$texto = $_POST["texto"];
				$hash = $_POST["hash"];
				if (!empty($texto)) {
					$resultado = hash($hash, $texto);
					//echo "<script>alert('El hash del texto es: $resultado');</script>";
					echo "<p>El hash $hash del texto \"$texto\" es:</p>";
					echo "<textarea cols=\"50\" rows=\"10\">$resultado</textarea>";
				} else {
					echo "<p>Por favor ingrese un texto para calcular el hash.</p>";
				}
			}
			?>
		</div>
	</div>
</body>
</html>
