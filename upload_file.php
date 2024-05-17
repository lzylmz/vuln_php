<?php
// Dosya yüklendi mi kontrolü
if(isset($_FILES['dosya'])){
    $hedef_dizin = "file/"; // Dosyanın kaydedileceği dizin

    // Yüklenen dosyanın bilgileri
    $dosya_adı = $_FILES['dosya']['name']; // Dosya adı
    $dosya_gecici = $_FILES['dosya']['tmp_name']; // Geçici dosya adı
    $hedef_dosya = $hedef_dizin . basename($dosya_adı); // Kaydedilecek dosyanın yolunu oluştur

    // Dosyayı belirlenen dizine taşı
    if(move_uploaded_file($dosya_gecici, $hedef_dosya)){
        echo "Dosya başarıyla yüklendi.";
    } else{
        echo "Dosya yüklenirken bir hata oluştu.";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Dosya Yükleme Formu</title>
</head>
<body>
    <h2>Dosya Yükleme Formu</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="dosya">Dosya Seç:</label>
        <input type="file" name="dosya" id="dosya"><br><br>
        <input type="submit" value="Yükle">
    </form>
</body>
</html>
