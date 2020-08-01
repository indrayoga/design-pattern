<?php
require_once "./Divisi.php";
require_once "./Pegawai.php";

$divisiMarketing = new Divisi;

$pegawaiA = new Pegawai;
$pegawaiA->setGaji(2000000);
$pegawaiA->setBonus(500000);
$divisiMarketing->add($pegawaiA);
echo "Gaji Pegawai A ". $pegawaiA->hitungGaji();
echo PHP_EOL;

$pegawaiB = new Pegawai;
$pegawaiB->setGaji(3000000);
$pegawaiB->setBonus(300000);
$divisiMarketing->add($pegawaiB);
echo "Gaji Pegawai B ". $pegawaiB->hitungGaji();
echo PHP_EOL;

echo "Total Gaji Divisi Marketing ". $divisiMarketing->hitungGaji();
echo PHP_EOL;
