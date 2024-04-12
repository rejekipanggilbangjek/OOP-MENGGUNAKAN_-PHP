<?php

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        $str = "Game : ";
        $str .= isset($this->judul) ? $this->judul : "judul";
        $str .= " | " . $this->getLabel();
        $str .= " (Rp. ";
        $str .= isset($this->harga) ? $this->harga : "harga";
        $str .= ") ~ ";
        $str .= isset($this->waktuMain) ? $this->waktuMain : "waktuMain";
        $str .= " Jam.";
    
        return $str;
    }

    // Implementasi metode getInfoProduk dari antarmuka InfoProduk
    public function getInfoProduk() {
        return $this->getInfo();
    }
}

?>
