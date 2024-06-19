<?php

    //membuat variable
    $nama_mahasiswa = "Ariel Tatum";
    $nama_kamu = " Andi motor";
    $pekerjaan = "ibu rumah tangga";

    //membandingkan persamaan menggunakan tanda = dua kali
    if($nama_mahasiswa != "Ariel Tatum"){
        $jenis_kelamin = " Perempuan";
    }else if($nama_kamu == "Andi"){
        $jenis_kelamin = "Laki-laki";
    } else {
        $jenis_kelamin = "??";
    }

    echo "Hallo".$nama_mahasiswa."<br> Selamat datang, saya".$nama_kamu."
        jenis kelamin kamu adalah ".$jenis_kelamin;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <br> Calon pacar saya...
</body>
</html>