<?php 

// Pengulangan pada array
    // for / foreach
    // foreach = untuk setiap
    $angka = [3,5,2,7,8,5,3,8,10,9]; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<style>
    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    .clear{
        clear: both;
    }
</style>
<body>

    <!-- For -->
        <?php for($i = 0; $i < count($angka); $i++){ ?>
            <div class="kotak"><?php echo $angka[$i] ?></div>
        <?php } ?>
        <!-- 
            - i = buat index
            - 9 = dari total array kita
            - count() = untuk menghitung isi di dalam array secara otomatis(pengganti 9)
            - $i++ = karena yang kita tambahin adalah index nya
        -->

        <div class="clear"></div>

    <!-- Foreach -->
        <!-- No Templating -->
            <?php foreach($angka as $a ){ ?>
                <div class="kotak"><?php echo $a ?></div>
            <?php } ?>
            <!-- 
                $angka = array yang sudah di buat
                as = sebagai
                $a = mereperentasikan satu elemen dari elemen elemen yang ada pada array angka
                $angka as $a = array angka yang banyak adalah variable angka
            -->
            <!-- 
                dibaca:
                
                Angka adalah array nya, dan kita akan melakukan looping untuk setiap elemen nya(ambil satu elemen tampilkan)
                Pada saat kita ambil satu elemen, elemen ini harus kita simpan dlu ke variable, baru dari variable tampilkan
            -->

            <div class="clear"></div>

         <!-- Gaya Penulisan w/templating -->
            <?php foreach($angka as $a): ?>
                <div class="kotak"><?= $a ?></div>
            <?php endforeach; ?>
</body>
</html>