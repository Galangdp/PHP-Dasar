<?php 

    // Array Single Dimension
        // $mahasiswa = ["Galang Davian Pradana", "0909383", "Teknik Informatika", "galangdavianp@gmail.com"];

    // Array Multi Dimension
        // Teknik Array Numerik = Array yang indexnya angka. 
        // Kita ga bisa kasih tau data ini namanya apa, karena array yang di panggil adalah array numerik

        // cara agar bisa tau data nya adalah dengan cara mengubah dari array numerik ke array asosiatif, dimana index nya bukan lagi angka tetapi index nya adalah string yang kita buat sendiri untuk mengasosiasi kan ke nilai yang ada di dalam array nya.
            $mahasiswa = ["Galang Davian Pradana", "0909383", "Teknik Informatika",     "galangdavianp@gmail.com",
            ["Audie Amartya", "0909383", "Teknik Informatika", "audieamartya@gmail.com"],
            ["alananana", "981738102", "Teknik Informatika", "alananana@gmail.com"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
        <li>Galang Davian Pradana</li>
        <li>0909383</li>
        <li>Teknik Informatika</li>
        <li>galangdavianp@gmail.com</li>
    </ul> -->

    <!-- W/LOOPING -->
        <!-- <ul>
            <?php foreach($mahasiswa as $m) : ?>
                <li><?= $m; ?></li>
            <?php endforeach; ?>
        </ul> -->

    <!-- W/OUT LOOPING -->
        <!-- Cetak Array single nya -->
            <!-- <ul>
                <li><?php echo $mahasiswa[0] ?></li>
                <li><?php echo $mahasiswa[1] ?></li>
                <li><?php echo $mahasiswa[2] ?></li>
                <li><?php echo $mahasiswa[3] ?></li>
            </ul> -->

        <!-- Cetak Elemennya karena ga bisa cetak array nya lagi (Manggil Array dalam array) -->
            <?php foreach($mahasiswa as $m) : ?>
            <ul>
                <li>Nama :<?php echo $m[0] ?></li>
                <li>Nomor :<?php echo $m[1] ?></li>
                <li>Jurusan :<?php echo $m[2] ?></li>
                <li>Email :<?php echo $m[3] ?></li>
            </ul>
            <?php endforeach; ?>

</body>
</html>