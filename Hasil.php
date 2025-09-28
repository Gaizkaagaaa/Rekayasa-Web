<?php

// Buat variabel berisi JSON string
$jsonData = '{
    "nama": "Budi Santoso",
    "umur": 25,
    "isMahasiswa": false,
    "hobi": ["Membaca", "Olahraga", "Memasak"]
}';

// Decode ke PHP Object
$phpObject = json_decode($jsonData);

// Akses nilai dari PHP Object
echo "PHP Object:<br>";
echo "Nama: " . $phpObject->nama . "<br>";
echo "Umur: " . $phpObject->umur . "<br>";
echo "Status Mahasiswa: " . ($phpObject->isMahasiswa ? "Ya" : "Tidak") . "<br>";
echo "Hobi pertama: " . $phpObject->hobi[0] . "<br><br>";

// Decode ke PHP Array (dengan argumen true)
$phpArray = json_decode($jsonData, true);

// Akses nilai dari PHP Array
echo "PHP Array:<br>";
echo "Nama: " . $phpArray['nama'] . "<br>";
echo "Umur: " . $phpArray['umur'] . "<br>";
echo "Status Mahasiswa: " . ($phpArray['isMahasiswa'] ? "Ya" : "Tidak") . "<br>";
echo "Hobi pertama: " . $phpArray['hobi'][0] . "<br>";
