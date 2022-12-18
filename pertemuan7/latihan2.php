<?php 
    // Cek apakah tidak ada data di $_GET
        // Isset adalah untuk mengecek apakah sebuah variable sudah pernah di bikin atau blum
            // if(isset($_GET["nama"]))
                // cara baca apakah $_GET["nama"] sudah pernah di bikin atau blum

            // if(!isset($_GET["nama"])){
            //     // "!" not / tanda seru = blum di bikin / set
            //     // redirect = memindahkan user dari sebuah halaman ke halaman lain
            //         header("Location: latihan1.php");
            //         exit;
            // }

                // if(!isset($_GET["nama"])){
                    // cara baca : ketika $_GET["nama"] itu blum di set  

                // header("Location: latihan1.php");
                    // cara baca : maka paksa pindah halaman ke halaman latihan1.php

                // exit;
                    // cara baca : maka tidak ada code setelah saya yang di jalankan
            
    // ini untuk si user ketika di ingin mencoba masuk ke beberapa URL
        if(!isset($_GET["nama"]) || 
        !isset($_GET["tahun"]) ||
        !isset($_GET["img "]) ) {
            // "!" not / tanda seru = blum di bikin / set
            // redirect = memindahkan user dari sebuah halaman ke halaman lain
                header("Location: latihan1.php");
                exit;
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <ul>
        <!-- Cara manggil data yang udah di kirim dari halaman yang mengirim nya -->
            <li><img src="img/<?= $_GET["img"] ?>" alt=""></li>
            <li><?= $_GET["nama"] ?></li>
            <li><?= $_GET["tahun"] ?></li>
    </ul>

    <a href="latihan1.php">balik ke halaman sebelumnya</a>
</body>
</html>