<!-- Array Associative -->
    <!-- Definisi sama seperti Array numerik kecuali, keynya adalah string yang kita buat sendiri -->
    <!-- 
        Perbedeaan :
            - Array Associative = key nya string yang di buat sendiri
            - Array Numerik = key nya index
     -->


<?php
// $mahasiswa = ["Galang Davian Pradana","029484", "galangdavianp@gmail.com", "Teknik Informatika"]

// Array Numerik
    // $mahasiswa = [
    //     ["Galang Davian Pradana","029484", "galangdavianp@gmail.com", "Teknik Informatika"],
    //     ["Audie Amartya","178392", "audieamartya@gmail.com", "Teknik Informatika"]
    // ]

// Array Associatve
    // $mahasiswa = [
    //     "nama" => "Galang Davian Pradana", 
    //     "nrp" => "91828819",
    //     "email" => "galangdavianp@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    // ];

    // echo $mahasiswa["jurusan"];

// Dua Array
    // $mahasiswa = [
    // [
    //     "nama" => "Galang Davian Pradana", 
    //     "nrp" => "91828819",
    //     "email" => "galangdavianp@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    // ],
    // [
    //     "nama" => "Audie Amartya", 
    //     "nrp" => "8927273",
    //     "email" => "audieamartya@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    // ]];

    // echo $mahasiswa[1]["email"];

// Array dalam Array
    // $mahasiswa = [
    // [
    //     "nama" => "Galang Davian Pradana", 
    //     "nrp" => "91828819",
    //     "email" => "galangdavianp@gmail.com",
    //     "jurusan" => "Teknik Informatika",
    // ],
    // [
    //     "nama" => "Audie Amartya", 
    //     "nrp" => "8927273",
    //     "email" => "audieamartya@gmail.com",
    //     "jurusan" => "Teknik Informatika",
    //     "nilai" => [90,80,100]
    // ]];

    // echo $mahasiswa[1]["nilai"][1];

// Buat List Mahasiswa
    $mahasiswa = [
        [
            "img" => "galang.jpg",
            "nama" => "Galang Davian Pradana", 
            "nrp" => "91828819",
            "email" => "galangdavianp@gmail.com",
            "jurusan" => "Teknik Informatika",
        ],
        [
            "img" => "audie.jpg",
            "nama" => "Audie Amartya", 
            "nrp" => "8927273",
            "email" => "audieamartya@gmail.com",
            "jurusan" => "Teknik Informatika",
        ],
        [
            "img" => "genta.jpg",
            "nama" => "Genta Halilintar", 
            "nrp" => "018383",
            "email" => "gentahalilintar@gmail.com",
            "jurusan" => "Teknik Informatika",
        ],
        [
            "img" => "naisa.jpg",
            "nama" => "Naisa Alifia Yuriza", 
            "nrp" => "74828239",
            "email" => "naisaalifia@gmail.com",
            "jurusan" => "Teknik Informatika",
        ],
        [
            "img" => "marva.jpg",
            "nama" => "Marva Athatillah Ahnaf", 
            "nrp" => "982991",
            "email" => "marva@gmail.com",
            "jurusan" => "Teknik Informatika",
        ],
        [
            "img" => "catlin.jpg",
            "nama" => "Catlin", 
            "nrp" => "912837",
            "email" => "catlin@gmail.com",
            "jurusan" => "Teknik Informatika",
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<style>
    /* h1{
        text-align: center;
    } */
    img{
        width: 300px;
    }
</style>
<body>
    
    <h1>Data Mahasiswa</h1>

    <!-- <ul>
        <li>Galang Davian Pradana</li>
        <li>029484</li>
        <li>galangdavianp@gmail.com</li>
        <li>Teknik Informatika</li>
    </ul> -->

    <!-- <ul>
        <li><?php echo $mahasiswa[0] ?></li>
        <li><?php echo $mahasiswa[1] ?></li>
        <li><?php echo $mahasiswa[2] ?></li>
        <li><?php echo $mahasiswa[3] ?></li>
    </ul> -->

    <?php foreach($mahasiswa as $mhs) :  ?>
    <ul>
        <li style="list-style: none;">
            <img src="img/<?php echo $mhs["img"] ?>" alt="IMG ">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>Nomor : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach;  ?>


</body>
</html>