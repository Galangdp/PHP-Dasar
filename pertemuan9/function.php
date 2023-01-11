<?php
    // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // 
        function query($query){
            // di isikan parameter query agar bisa di isi, karena dari halaman yang akan menerima query membutuhkan paramater agar bisa di isi oleh code SELECT * FROM

            global $conn;
            // untuk mendefinisikan/ mengacu $conn

            $result = mysqli_query($conn, $query);
                // $result = membuat variable baru / lemari
                // mysqli_query = di isi dengan variable koneksi dan cariable query
                // $conn = variable koneksi
                // $query = ngambil parameter query yang di buat di function query
                
            $rows = [];
            // $rows = membuat array kosong / wadah kosong

            while ($row = mysqli_fetch_assoc($result)){
                // $row = ini baju 
                // $result = mengambil dari variable result / lemari
                // mengambil baju dari lemari result

                $rows[] = $row;
                // $rows = kotak
                // $row = baju
                // ambil baju simpen ke kotak/ ambil rows taro di row
            }
            return $rows;
            // kembalikan kotaknya, keluar dari kamar yang di bawa adalah kotaknya

        }
?>

