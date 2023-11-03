<?php
include_once "Person.php";
include_once "Karyawan.php";
include_once "Mahasiswa.php";

$mhs = new Mahasiswa();
echo"Mahasiswa 1 <br>";
$mhs -> setNama("Linda");
$mhs -> setNim(202020);
echo"mahasiswa dengan nama : ". $mhs -> getNama();
echo "</br>";
echo "dengan nim : ". $mhs -> getNim();

echo "<br>";
echo "<br>";

$kryn = new Karyawan();
echo "Karyawan 1 <br>";
$kryn -> setNama("Putri");
$kryn -> setNomorinduk(128912);
echo "Karyawan dengan nama : ". $kryn -> getNama();
echo "</br>";
echo "dengan no induk : ". $kryn -> getNomorinduk();
