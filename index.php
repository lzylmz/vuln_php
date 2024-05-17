<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	

	<title>Başvuru Formu</title>
	<?php
	require_once 'baglanti.php';
	?>
	<link rel="stylesheet" href="style.css">
	
</head>

<body>
<div class="container">
	<div class="title" >Başvuru Formu</div>
	<form action="index.php" method="get">
		<div class="user-details">
			<div class="input-box">
				<span class="details">İsim </span>
				<input type="text" placeholder="İsminizi Giriniz" name="isim" id="isim"  required>
			</div>
			<div class="input-box">
				<span class="details">Soy İsim</span>
				<input type="text" placeholder="Soy İsminizi Giriniz" id="soy_isim" name="soy_isim" required>
			</div>
			<div class="input-box">
				<span class="details">Telefon</span>
				<input type="text" placeholder="Telefon Numaranızı Giriniz" id="telefon"  name="telefon" required>
			</div>
			<div class="input-box">
				<span class="details">Adres</span>
				<input type="text" placeholder="Adresinizi Giriniz" id="adres" name="adres" required>
			</div>
			<div class="input-box">
				<span class="details">Okul Adı</span>
				<input type="text" placeholder="Okulunuzun Adını Giriniz" id="okul_adi"  name="okul_adi" required>
			</div>
			<div class="input-box">
				<span class="details">Proje</span>
				<input type="text" placeholder="Projelerinizi Yazın" id="proje"  name="proje" required>
			</div>
		</div>
		<div class="button">
			<input type="submit" value="Gönder" name="submit">
		</div>
		<?php  echo $_GET['isim'] ?> 
	</form>
</div>
		
</body>
</html>

<?php
include("baglanti.php");
if(isset($_GET["submit"])){

	
	$ad = $_GET["isim"];
	$soyad = $_GET["soy_isim"];
	$tel = $_GET["telefon"];
	$adres = $_GET["adres"];
	$okuladi = $_GET["okul_adi"];
	$proje = $_GET["proje"];


	
	$isSucses = $crud->insert($ad, $soyad,$tel,$adres,$okuladi,$proje);

	
	 if ($isSucses) {
		echo "<script type='text/javascript'>alert('basarili');</script>";

    } else {
		echo "<script type='text/javascript'>alert('olmadi');</script>";

}


}

?>