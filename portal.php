<!DOCTYPE html>
<html>
<head>
	<title>Ogloszenia drobne</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="head">
		<h2>Portal ogłoszeniowy</h2>
	</section>
	<section id="left">
		<h2>Ogłoszeniodawcy</h2>
		<?php 
			$id_polaczenia = mysqli_connect('localhost', 'root', '', 'ogloszenia');
			$stan1 = mysqli_select_db($id_polaczenia, 'ogloszenia');
				if($stan1 == true) echo "wybrano baze ogloszenia";
				else echo "nie wybrano";
			
			
			
			mysqli_close($id_polaczenia);
		?>
	</section>
	<section id="right">
		<h2>Nasze kategorie</h2>
		<ul>
			<li>Książki</li>
			<li>Muzyka</li>
			<li>Multimedia</li>
		</ul>
		<img src="ksiazki.jpg" alt="uwolnij swoją książkę">
		<table>
			<tr>
				<td>Ile?</td>
				<td>Koszt</td>
				<td>Promocja</td>
			</tr>
			<tr>
				<td>1 - 40</td>
				<td>1,20 PLN</td>
				<td rowspan="2">Subskrybuj newsletter upust 0,30 PLN na ogłoszenie</td>
			</tr>
			<tr>
				<td>41 i więcej</td>
				<td>0,70 PLN</td>
			</tr>
		</table>
	</section>
	<section id="footer">
		<p>Portal ogloszenia drobne opracował: 01234567890</p>
	</section>
</body>
</html>