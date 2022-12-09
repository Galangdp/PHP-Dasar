<?php 
    // Array
        // Cara Membuat Array
            // Cara lama
                // $hari = array("senin", "selasa", "rabu");
                // $bulan = ["januari", "februari", "maret"];
                // $arr = [1278, "Bla Bla Bla", false];

        // Cara Menampilkan Array
            // Versi Debugging
                // var_dump($hari);
                // echo "<br>";
                // print_r($bulan);
                // echo "<br>";
                
            // Satu Elemen pada Array
                // echo $arr[1];

            // Pengulangan
                // di html
                

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<style>
    .kotak{
        width: 60px;
        height: 60px;
        background-color: salmon;
        text-align: center;
        line-height: 60px;
        margin: 3px;
        float: left;
        transition: 0.5s;
    }
    .kotak:hover{
        transform: rotate(180deg);
        border-radius: 50%;
    }
    .clear{
       clear: both; 
    }
</style>
<body>
    <!-- Perulangan -->
        <?php 
            // $angka = [1,2,6,3,7,2,9,3,10];
        ?>

        <!-- <?php foreach($angka as $a) : ?>
            <div class="kotak"><?php echo $a[1][1]; ?></div>
        <?php endforeach; ?> -->
        <!-- 
            penjelasan :
            ada 9 kotak yang di dalamnya ada angka yang saya ambil dari array 
        -->

    

    <!-- Mengambil isi Array Multi-Dimensi -->
        <!-- <?php 
            $angka = [
                [1,2,6],
                [3,7,2],
                [9,3,10]
            ];
            // echo $angka[2][2];
        ?> -->
        <!-- <?php foreach($angka as $a) : ?>
            <?php foreach($a as $n) : ?>
                <div class="kotak"><?php echo $n; ?></div>
            <?php endforeach; ?>
                <div class="clear"></div>
        <?php endforeach; ?> -->



</body>
</html>