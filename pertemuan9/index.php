<!-- 
    Cara Menghubungkan PHP + MY SQL :
        - Ekstensi MySQL
        - Ekstensi MySQLi
        - PDO (PHP DATA OBJECT)
-->

<?php 
    // Koneksi ke database
    // $conn = mysqli_connect("localhost", "root", "", "phpdasar");
        // Butuh Parameter dan ga boleh salah :
            // localhost = localhost
            // root = username
            // "" = password / kosong karena password nya ga ada
            // "phpdasar" = nama database nya
    

    // Ambil data dari table mahasiswa / query data mahasiswa
    // $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
        // Ada 2 Parameter :
            // function mysqli_connect nya dari pada kepanjangan mending di tampung dengan variable
            // SELECT * FROM mahasiswa = pilih dari datanya "mahasiswa"

    // Ambil data (fetch) mahasiswa dari object result
        // mysqli_fetch_row(); = mengembalikkan array numerik
        // mysqli_fetch_assoc(); = mengembalikan array associative
        // mysqli_fetch_array(); = bisa mengembalikan array numerik dan array associative (flexible), kekurangannya dia mencetak double array numerik dan array associative
        // mysqli_fetch_object(); = mengembalikan object

        // input:
            // $mhs = mysqli_fetch_row($result);
            // var_dump($mhs[3])

        // output:
            // string(23) "galangdavianp@gmail.com"

        // input:
            // $mhs = mysqli_fetch_assoc($result);
            // var_dump($mhs["jurusan"])

        // output:
            // string(18) "Teknik Informatika"

        // input:
            // $mhs = mysqli_fetch_array($result);
            // var_dump($mhs["jurusan"]);
            // var_dump($mhs[4]);

        // output:
            // string(18) "Teknik Informatika" string(18) "Teknik Informatika"

        // input:
            // $mhs = mysqli_fetch_object($result);
            // var_dump($mhs->nama);

        // output:
            // string(21) "Galang Davian Pradana"

        
        // while($mhs = mysqli_fetch_assoc($result)){
        //     var_dump($mhs);
        // }


        // Karena kita ingin menggunakan funtion $conn lagi maka kita pindahkan function itu pada halaman php sendiri
            // cara :
                // require 'function.php';
                // $mahasiswa = query("SELECT * FROM mahasiswa")
                

        require 'function.php';
        // ngambil dari halaman baru function.php
        $mahasiswa = query("SELECT * FROM mahasiswa");
        // $mahasiswa = untuk menampung data nya agar bisa menggunakan foreach di bandingkan while

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1;  ?>
        <?php  foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah">ubah</a> |
                <a href="delete">delete</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" alt="" width="50"></td>
            <td><?php echo $row["nrp"] ?></td>
            <td><?php echo $row["nama"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["jurusan"]?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>

    </table>

 </body>
 </html>