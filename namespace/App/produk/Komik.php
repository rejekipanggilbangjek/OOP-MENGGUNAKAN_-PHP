<?php namespace App\produk;

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    

    public function getInfo() {
        $judul = isset($this->judul) ? $this->judul : "judul";
        $penulis = isset($this->penulis) ? $this->penulis : "penulis";
        $penerbit = isset($this->penerbit) ? $this->penerbit : "penerbit";
        $harga = isset($this->harga) ? $this->harga : "harga";
    
        $str = "Komik : {$judul} | {$penulis} | {$penerbit} (Rp. {$harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
    

    public function getInfoProduk() {
        return $this->getInfo();
    }
}
?>
