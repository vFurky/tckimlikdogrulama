<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TCKN Doğrula</title>
</head>
<body>
	<form action="form.php" method="POST">
		<label for="tckn">TC Kimlik Numarası</label>
		<input type="text" name="tckn" id="tckn" placeholder="TC Kimlik Numarası">
		<br>
		<label for="name">Ad</label>
		<input type="text" name="name" id="name" placeholder="Ad">
		<br>
		<label for="surname">Soyad</label>
		<input type="text" name="surname" id="surname" placeholder="Soyad">
		<br>
		<label for="dob">Doğum Yılı</label>
		<input type="text" name="dob" id="dob" placeholder="Doğum Yılı">
		<br>
		<button type="submit" name="submit">Doğrula</button>
	</form>
</body>
</html>