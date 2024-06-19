<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm_mhs = $_POST['npm']; 
    $nilai_mhs = $_POST['nilai'];
    $perulangan = $_POST['ulangi'];

    if ($nilai_mhs !="") {

        if ($nilai_mhs >= 85) {
            $huruf_mutu = 'A';
        } else if ($nilai_mhs >= 75) {
            $huruf_mutu = 'B';
        } else if ($nilai_mhs >= 65) {
            $huruf_mutu = 'C';
        } else {
            $huruf_mutu = 'E';
        }

        for($x = 0; $x <= $perulangan;$x++) {
            echo $npm_mhs." Nilai Mata Kuliah Anda adalah : ".$huruf_mutu."<br>";
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        NPM:
        <input type="text" name="npm" value="">
        <br>
        Nilai: <input type="text" name="nilai" value="">
        <br>
        Ulangi: <input type="text" name="ulangi" value="">
        <br>
        <button type="submit" name="proses_data">PROSES DATA</button>
    </form>
</body>
</html>