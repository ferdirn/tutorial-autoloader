<?php

spl_autoload_register(function($class) {

  include $class . ".php";

});

$printer = new Printer();
$buku = $printer->cetakBuku("Ini buku baru");

$kurir = new Kurir();
$kurir->kirim($buku, "Malang");
