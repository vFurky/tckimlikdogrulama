<?php

if($_POST['tckn'] && $_POST['name'] && $_POST['surname'] && $_POST['dob']) {

	$tckn = $_POST['tckn'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$dob = $_POST['dob'];

	try {

		$tcknApi = new SoapClient("https://tckimlik.nvi.gov.tr/service/kpspublic.asmx?WSDL");
		$params = [
			"TCKimlikNo" => $tckn,
			"Ad" => $name,
			"Soyad" => $surname,
			"DogumYili" => $dob
		];

		$response = $tcknApi -> TCKimlikNoDogrula($params);
		if($response -> TCKimlikNoDogrulaResult) {
			echo 'Doğrulama başarılı.';
			exit;
		} else {
			echo 'Doğrulama başarısız.';
			exit;
		}

	}
	catch (PDOException $e) {
		die("Hata: " . $e->getMessage());
	}

} else {
	echo 'Bütün bilgileri doldurun.';
	exit;
}