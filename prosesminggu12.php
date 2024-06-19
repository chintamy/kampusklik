<?php
        
        include_once "koneksi.php";

        //mengambil data inputan
        $nama_mhs = $_POST["nama"];
        $prodi_mhs = $_POST["prodi"];
        $gender= $_POST["gender"]
        $perulangan = $_POST["ulangi"];

        $proses = mysqli_query($koneksi,"INSERT INTO mahasiswa (nama, prodi, gender) VALUE ('$nama_mhs','$prodi_mhs','$gender') ")
        or die (mysqli_error($koneksi));

        if($proses){
            echo "
                <script>
                    alert('Data berhasil disimpan')
                    window.location.href='edit_data.php';
                </script>";
        }else echo "<script>
                    alert('Data gagal disimpan')
                    window.location.href='hapus_data.php';
                </script>";

    if($nilai_mhs != "") {

        if( $nilai_mhs >= 85){
            $huruf_mutu = 'A';
        }else if($nilai_mhs >= 75){
            $huruf_mutu = 'B';
        }else if($nilai_mhs >= 65){
            $huruf_mutu = 'C';
        }else{
            $huruf_mutu = 'E';
        }

        for($x = 0; $x <= $perulangan;$x++) {
            echo $npm_mhs."Nilai mata kuliah anda adalah : ".$huruf_mutu."<br>";

        }

    }  
        
?>