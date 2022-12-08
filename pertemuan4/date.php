<?php

    // Date
        // date = function untuk menampilkan tanggal dengan format tertentu
        // date();
        // date butuh minimal 1 parameter
        // paramater :
            // l = hari
            // d = tanggal
            // M = bulan
            // m = bulan dalam bentuk angka
            // Y = tahun

        // echo date("l, d-M-Y");
    

    // Time
        // UNIX Timestamp / Epoch Time = awal waktu dunia IT / detik yang sudah berlalu sejak 1 januari 1970 sampai saat ini.
        // time = function untuk menampilkan jam
        // time();

        // echo time();


        // Manggil beberapa hari kemudian

            // lama karena kita harus menghitung manual dari calculator maka hasilnya 172800
            // 2 hari kedepan
            // echo date("l", time() + 172800);

            // cepat gunakan php yang menghitung nya
            // 100 hari kedepan
            // echo date("l", time() + 60*60*24*100);
            // w/tanggal
            // echo date("d-M-Y", time() + 60*60*24*100);

    
    // Mktime
        // mktime = membuat sendiri detik
        // angka -> detik
        // mktime();
        // Parameter 6 (0,0,0,0,0,0):
            // - 0 pertama = untuk jam
            // - 0 kedua = untuk menit
            // - 0 ketiga = untuk detik
            // - 0 keempat = untuk bulan
            // - 0 kelima = untuk tanggal
            // - 0 keenam = untuk tahun

        // simpan ulang tahun
        // w/mktime
        echo mktime(0,0,0,9,25,2006),"<br>";
        echo date("l", mktime(0,0,0,9,25,2006)), "<br>";
        echo date("l", mktime(0,0,0,3,3,2006)), "<br>";


    // Strtotime
        // strtotime = sama dengan mktime tapi dengan format tanggal ke detik
        // format tanggal -> detik

        // simpan ulang tahun
        // w/strtotime
        echo strtotime("25 sep 2006"), "<br>";
        echo date("l", strtotime("25 sep 2006")), "<br>";
        echo date("l", strtotime("3 mar 2006")), "<br>";




?>