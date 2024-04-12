<?php
class Mobil {
    public $nama, $merk , $warna,
    $kecepatanMaksimal,
    $jumlahPenumpang;

    public function tambahkanKecepatan(){
        return "Kecepatan bertambah!";
    }
}

class MobilSport extends Mobil {
    public $turbo = false;

    public function jalankanTurbo(){
        $this->turbo = true;
        return "Turbo dijalankan!";
    }
}

$mobil1 = new MobilSport();
echo $mobil1->tambahkanKecepatan(); 
echo "<br>";
echo $mobil1->jalankanTurbo();
?>
