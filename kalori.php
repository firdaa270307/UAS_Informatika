<?php
echo "UAS INFORMATIKA";
echo "<br>";
echo "Nama : Huriyatul Firdausil Mumtiroh";
echo "<br>";
echo "No absen : 09";
echo "<br>";
echo "kelas : X RPL 1";
echo "<br>";
echo "<hr>";
echo "KALKULASI MENGHITUNG KALORI </br></br>";
$kalorisekalimakan = 2500;

$senin = 3;
$selasa = 2;
$rabu = 2;
$kamis = 3;
$jumat = 3;
$sabtu = 2;
$minggu = 1;

$kalorisenin = $senin * $kalorisekalimakan;
$kaloriselasa = $selasa * $kalorisekalimakan;
$kalorirabu = $rabu * $kalorisekalimakan;
$kalorikamis = $kamis * $kalorisekalimakan;
$kalorijumat = $jumat * $kalorisekalimakan;
$kalorisabtu = $sabtu * $kalorisekalimakan;
$kaloriminggu = $minggu * $kalorisekalimakan;
$kaloriperhari = "
a.  Jika hari Senin makan sebanyak $senin kali, maka ykalori yang di dapat sebanyak $kalorisenin </br>
    Jika hari Selasa makan sebanyak $selasa kali, maka ykalori yang di dapat sebanyak $kaloriselasa </br>
    Jika hari Rabu makan sebanyak $rabu kali, maka ykalori yang di dapat sebanyak $kalorirabu </br>
    Jika hari Kamis makan sebanyak $kamis kali, maka ykalori yang di dapat sebanyak $kalorikamis </br>
    Jika hari Jumat makan sebanyak $jumat kali, maka ykalori yang di dapat sebanyak $kalorijumat </br>
    Jika hari Sabtu makan sebanyak $sabtu kali, maka ykalori yang di dapat sebanyak $kalorisabtu </br>
    Jika hari Minggu hanya makan $minggu kali, maka ykalori yang di dapat sebanyak $kaloriminggu </br>
";


$kaloriperminggu = ($senin * $kalorisekalimakan) + ($selasa * $kalorisekalimakan) + ($rabu * $kalorisekalimakan) + ($kamis * $kalorisekalimakan) + ($jumat * $kalorisekalimakan) + ($sabtu * $kalorisekalimakan) + ($minggu * $kalorisekalimakan);

echo "Kalori yang di dapat tiap sekali makan sebanyak $kalorisekalimakan </br></br>";

echo "$kaloriperhari </br>";

echo "Jadi kalori yang di dapat setiap minggu, jika senin makan sebanyak $senin kali, selasa $selasa kali, Rabu $rabu kali, Kamis $kamis kali, Jumat $jumat kali, Sabtu $sabtu kali, Minggu $minggu kali, sebesar $kaloriperminggu </br><hr>";


echo "KALKULASI MENGHITUNG WAKTU TIDUR </br></br>";
$senin1 = 5;
$selasa1 = 6;
$rabu1 = 8;
$kamis1 = 8;
$jumat1 = 5;
$sabtu1 = 6;
$minggu1 = 4;
$total = $senin1 + $selasa1 + $rabu1 + $kamis1 + $jumat1 + $sabtu1 + $minggu1;
echo "b. Jadi total istirahat perminggu FU jika hari senin ia beristirahat selama $senin1 jam, Selasa $selasa1 jam, Rabu $rabu1 jam, Kamis $kamis1 jam, jumat $jumat1 jam, Sabtu $sabtu1 jam, Minggu $minggu1 jam adalah $total jam. </br></br>";

function hitungStatusKesehatan($kalori, $istirahat) {
    $kaloriMaksimum = 2500; // Jumlah kalori maksimum per hari
    $istirahatMinimum = 8; // Jumlah jam istirahat minimum per hari

    $totalKalori = array_sum($kalori);
    $totalIstirahat = array_sum($istirahat);

    if ($totalKalori / count($kalori) > $kaloriMaksimum || $totalIstirahat / count($istirahat) < $istirahatMinimum) {
        return "belum sembuh";
    } else {
        return "sembuh";
    }
}

// Contoh data kalori dan istirahat dalam seminggu
$kalori = array(7500, 5000, 5000, 7500, 7500, 5000, 2500);
$istirahat = array(5, 6, 8, 8, 5, 6, 4);

$statusKesehatan = hitungStatusKesehatan($kalori, $istirahat);
echo "Dilihat dari pola tidur dan pola makan FU, bisa di pastikan bahwa FU masih: " . $statusKesehatan;
?>