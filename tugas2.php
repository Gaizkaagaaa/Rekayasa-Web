<?php
function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/PERTEMUAN2/getWisata.php");

$data = json_decode($send, TRUE);

if (is_array($data)) {
    echo "<h2>Data Wisata</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;'>";
    echo "<tr style='background-color:#f2f2f2;'>
            <th>ID Wisata</th>
            <th>Kota</th>
            <th>Landmark</th>
            <th>Tarif</th>
          </tr>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row["id_wisata"] . "</td>";
        echo "<td>" . $row["kota"] . "</td>";
        echo "<td>" . $row["landmark"] . "</td>";
        echo "<td>" . $row["tarif"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Gagal mengambil atau mengonversi data JSON.";
}
