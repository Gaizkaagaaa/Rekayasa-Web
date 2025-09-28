<?php

// 1. Buat sebuah variabel yang berisi string JSON
$jsonData = '{
    "nama": "Gaizka Aga Irvanka",
    "umur": 20,
    "isMahasiswa": true,
    "hobi": ["Bermain Game", "Ngoding", "Bersepeda"]
}';

echo "<h2>Data JSON Asli:</h2>";
echo "<pre>$jsonData</pre>";

echo "<hr>";


// 2. Decode JSON ke dalam bentuk PHP Object
echo "<h2>1. Decode Menjadi PHP Object</h2>";
$phpObject = json_decode($jsonData);

echo "Nama: " . $phpObject->nama . "<br>";
echo "Umur: " . $phpObject->umur . "<br>";
echo "Hobi pertama: " . $phpObject->hobi[0] . "<br>";

echo "<h3>Struktur Object:</h3>";
echo "<pre>";
print_r($phpObject);
echo "</pre>";

echo "<hr>";


// 3. Decode JSON ke dalam bentuk PHP Array
echo "<h2>2. Decode Menjadi PHP Array</h2>";
$phpArray = json_decode($jsonData, true); 

echo "Nama: " . $phpArray['Gaizka Aga Irvanka'] . "<br>";
echo "Umur: " . $phpArray['20'] . "<br>";
echo "Hobi kedua: " . $phpArray['Barmain Game'][1] . "<br>";

echo "<h3>Struktur Array:</h3>";
echo "<pre>";
print_r($phpArray);
echo "</pre>";
