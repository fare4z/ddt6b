<?php

echo "<h3>NUMERIC / INDEXED ARRAYS</h3>";

$student = [];
$student = ['amin', 'aminah'];
$student[] = "fareez";
$student[] = "abu";
$student[4] = "Lim";

echo "Nama : " . $student[3] . "";

echo "<pre>";
print_r($student);
echo "</pre>";

echo "<p></p>";
echo "<h3>ASSOCIATIVE ARRAYS</h3>";

$pelajar = ['nama' => 'Ali', 'jabatan' => 'JTMK', 'umur' => 19];

echo "Nama : " . $pelajar['nama'] . "";
echo "<br>";
echo "Jabatan : " . $pelajar['jabatan'] . "";
echo "<br>";
echo "Umur : " . $pelajar['umur'] . "";
echo "<hr>";

echo "<pre>";
print_r($pelajar);
echo "</pre>";

echo "<p></p>";
echo "<h3>NESTED ARRAYS</h3>";

$pelajar = ['nama' => 'Ali', 'jabatan' => 'JTMK'];
$kelas[] = $pelajar;

$pelajar = ['nama' => 'Mamat', 'jabatan' => 'JP'];
$kelas[] = $pelajar;

$pelajar = ['nama' => 'Aisyah', 'jabatan' => 'JKE'];
$kelas[] = $pelajar;

echo "Nama : " . $kelas[0]['nama'] . "";
echo "<br>";
echo "Jabatan : " . $kelas[0]['jabatan'] . "";
echo "<hr>";

echo "<pre>";
print_r($kelas);
echo "</pre>";

echo "<p></p>";

echo "<hr>";

foreach ($kelas as $value) {
    $nama = $value['nama'];
    $jabatan = $value['jabatan'];

    echo "Nama  " . $nama . "";
    echo "<br>";
    echo "Jabatan : " . $jabatan . "";
    echo "<br>";
    echo "--------------";
    echo "<br>";
}

echo "<h3> Multidimensional Array</h3>";

$myLists['colors'] = array("apple" => "red",
    "grass" => "green",
    "sky" => "blue",
    "night" => "black",
    "wall" => "white");

$myLists['cars'] = array("BMW" => "M6",
    "Mercedes" => "E 270 CDI",
    "Lexus" => "IS 220d",
    "Mazda" => "6",
    "Toyota" => "Avanza");

echo "<pre>";
print_r($myLists);
echo "</pre>";
