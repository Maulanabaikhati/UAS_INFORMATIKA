<?php
// Kalori sekali makan
$kalorisekalimakan = 2500;

// Jadwal makan setiap hari
$senin = 3;
$selasa = 2;
$rabu = 2;
$kamis = 3;
$jumat = 3;
$sabtu = 2;
$minggu = 1;

// Menghitung kalori per hari
$senin = $senin * $kalorisekalimakan;
$selasa = $selasa * $kalorisekalimakan;
$rabu = $rabu * $kalorisekalimakan;
$kamis = $kamis * $kalorisekalimakan;
$jumat = $jumat * $kalorisekalimakan;
$sabtu = $sabtu * $kalorisekalimakan;
$minggu = $minggu * $kalorisekalimakan;

// Menghitung kalori per minggu
$kaloriperminggu = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;


// Kalori per hari
echo "Kalori per Hari";
echo "<br>";
echo " Senin " . $senin . " kalori";
echo "<br>";
echo " Selasa " . $selasa . " kalori";
echo "<br>";
echo " Rabu " . $rabu . " kalori";
echo "<br>";
echo " Kamis " . $kamis . " kalori";
echo "<br>";
echo " Jumat " . $jumat . " kalori";
echo "<br>";
echo " Sabtu " . $sabtu . " kalori";
echo "<br>";
echo " Minggu " . $minggu . " kalori";

echo '<br><br>';

// Kalori per minggu
echo "Kalori per Minggu " . $kaloriperminggu . " Kalori";

echo "<br>" . "<br>";

// Jumlah istirahat per Hari
$senin = 5;
$selasa = 6;
$rabu = 8;
$kamis = 8;
$jumat = 5;
$sabtu = 6;
$minggu = 4;

// Jumlah istirahat per Minggu
$perminggu = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;

echo "Jam istirahat per Hari " . $senin . " Jam";
echo "<br>";
echo "Jam istirahat per Hari " . $selasa . " Jam";
echo "<br>";
echo "Jam istirahat per Hari " . $rabu . " Jam";
echo "<br>";
echo "Jam istirahat per Hari " . $kamis . " Jam";
echo "<br>";
echo "Jam istirahat per Hari " . $jumat . " Jam";
echo "<br>";
echo "Jam istirahat per Hari " . $sabtu . " Jam";
echo "<br>";
echo "Jam istirahat per Hari " . $minggu . " Jam";

echo "<br>" . "<br>";

echo "Jumlah istirahat per Minggu " . $perminggu . " Jam";

echo "<br>" . "<br>";

// Jumlah kalori per hari dan per minggu
$jumlahkaloriperhari = 2500;
$jumlahkaloriperminggu = $jumlahkaloriperhari * 7;

// Jumlah waktu istirahat per hari dan per minggu
$jumlahwaktuistirahatperhari = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
$jumlahwaktuistirahatperminggu = $jumlahwaktuistirahatperhari * 7;

// Nilai ambang untuk menentukan kondisisembuh atau sakit 
$ambangkalori = 40000;
$ambangwaktuistirahat = 42;

// Menentukan apakah seseorang sudah sembuh atau sakit 
if ($jumlahkaloriperminggu >= $ambangkalori && $jumlahwaktuistirahatperminggu >= $ambangwaktuistirahat) {
    echo "Fu sudah sembuh! ";
} else {
    echo "Fu masih sakit.";
}