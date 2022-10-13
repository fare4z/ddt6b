<?php 

echo "<h3>NUMERIC / INDEXED ARRAYS</h3>";

$student = [];
$student = ['amin','aminah'];
$student[] = "fareez";
$student[] = "abu";

echo "<pre>";
print_r($student);
echo "</pre>";

echo "<p></p>";
echo "<h3>ASSOCIATIVE ARRAYS</h3>";

$pelajar = ['nama' => 'Ali','jabatan' => 'JTMK'];

echo "Nama : ".$pelajar['nama']."";
echo "<br>";
echo "Jabatan : ".$pelajar['jabatan']."";
echo "<hr>";


echo "<pre>";
print_r($pelajar);
echo "</pre>";

echo "<p></p>";
echo "<h3>NESTED ARRAYS</h3>";

$pelajar = ['nama' => 'Ali','jabatan' => 'JTMK'];
$kelas[] = $pelajar;

$pelajar = ['nama' => 'Mamat','jabatan' => 'JP'];
$kelas[] = $pelajar;

$pelajar = ['nama' => 'Aisyah','jabatan' => 'JKE'];
$kelas[] = $pelajar;


echo "Nama : ".$kelas[0]['nama']."";
echo "<br>";
echo "Jabatan : ".$kelas[0]['jabatan']."";
echo "<hr>";

echo "<pre>";
print_r($kelas);
echo "</pre>";

echo "<p></p>";


?>