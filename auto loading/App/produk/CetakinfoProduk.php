<?php
 class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $produk) {
            // Memeriksa apakah $produk memiliki metode getInfoProduk()
            if (method_exists($produk, 'getInfoProduk')) {
                $str .= "- " . $produk->getInfoProduk() . "<br>";
            } else {
                $str .= "- Produk tidak memiliki metode getInfoProduk() <br>";
            }
        }
        return $str;
    }
}
