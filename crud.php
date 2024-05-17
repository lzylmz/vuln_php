<?php
class crud{

    private $db;

    function  __construct ($conn) {
            $this->db = $conn;
    }


    public function insert($isim, $soy_isim, $telefon, $adres, $okul_adi, $proje){
        try{
            $sql = "INSERT INTO form (isim, soy_isim, telefon, adres, okul_adi, proje) VALUES  ('$isim', '$soy_isim', '$telefon', '$adres', '$okul_adi', '$proje')";

            $stmt = $this->db->prepare($sql);

            $stmt->execute();

            return true;

        }catch(PDOException $e) {
throw new PDOException($e->getMessage());
return false;
}
    }


}
?>

