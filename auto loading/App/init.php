<?php

//require_once 'produk/infoProduk.php';
//require_once 'produk/Produk.php';
//require_once 'produk/Komik.php';
//require_once 'produk/Game.php';
//require_once 'produk/CetakinfoProduk.php';

 
spl_autoload_register(function ($class){
    require_once __DIR__ . '/Produk/' . $class. '.php';
});