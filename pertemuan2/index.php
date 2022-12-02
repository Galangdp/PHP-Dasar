<!-- TAG PHP -->
<!-- <?php ?>     -->






<!-- SYNTAX PHP -->
<!-- <?php

// ISI SNYTAX

?> -->



<!-- COMENTAR -->
<!-- Comentar adalah syntax pemrograman yang tidak akan di eksekusi oleh compiler maupun entrepeuner, di gunakan untuk menjelaskan fungsi baris baris fungsi/ mendisable fugsi nya agar masi di situ tetapi tidak di jalankan  -->

<!-- <?php 

// ini adalah komentar satu baris
/*
ini komentar bisa buat banyak baris
*/


?> -->




<!-- Syntax PHP -->

<?php 
//Standar Output

//echo, print
//print_r = mencetak array
//var_dump = melihat isi variable(informasi dari variable tersebut)

// echo"Galang Davian Pradana";




//Penulisan Syntax PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

/* <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- PHP DI DALAM HTML -->
    <!-- effisien -->
    <h1>Hallo nama saya <?php echo"Galang Davian Pradana"?></h1>

    <!-- HTML DI DALAM PHP -->
    <!-- ga effisien -->
    <?php echo "<h1>Halo Nama Saya Galang Davian Pradana</h1>"?>

    <!-- Panggil Variable -->
    <h1>Hallo nama saya <?php echo $nama; ?></h1>
</body>
</html>
*/


// Variable dan Tipe Data
// Variable
// Variable = menampung data
// Tidak boleh di awali dengan angka, tapi boleh mengandung angka
// Tidak boleh ada spasi
// "" = lebih sakti karena kita bisa menggunakan konsep interpolasi
// Interpolasi = mengecek apakah di dalem kutip dua/ string terdapat variable atau tidak. Kalau ada variable yang akan di tampilkan adalah isi variable nya
// $ = untuk membuat variable

// $nama = "Galang Davian Pradana";

// Interpolasi
// echo "Hallo nama saya $nama";

// Output Interpolasi
// Hallo nama saya Galang Davian Pradana




// Not Interpolasi
// echo 'Hallo nama saya $nama';

// Output Not Interpolasi
//Hallo nama saya $nama












// Operator
// Arimatika
// + - * / %

// w/out variable
// echo 1 + 1;

// w/variable
// $x = 10;
// $y = 20;
// echo $x * $y;





// Penggabung String / concatenation / concat
// .

// $nama_depan = "Galang";
// $nama_tengah = "Davian";
// $nama_belakang = "Pradana";
// echo $nama_depan ." ". $nama_tengah ." ". $nama_belakang;





// Assignment
// =, +=, -=, *=, /=, %=, .=


// =
// $x = 1;
// echo $x;

// output
// 1


// +=
// $x = 1;
// $x += 5;
// echo $x;

// output
// 6


// .=
// $nama = "Galang";
// $nama .= " ";
// $nama .= "Davian";
// $nama .= " ";
// $nama .= "Pradana";
// echo $nama;




// Perbandingan
// Ngecek nilai bukan ngecek tipe data
// <, >, <=, >=, ==, !=



// input
// var_dump(1 == "1");

// output 
// true




// Identitas
// Ngecek Tipe dataa/ identitas
// ===, !==



// input
// var_dump(1 === "1");

// output
// false





// Logika
// Pengkondisian
// &&, ||, !
// && = smua nilai harus benar
// || = salah satu aja yang benar gapapa (di anggap true)



// input
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0)

// output
// false


// input
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0)

// output
// true

// cara baca
// saya punya variable x dengan nilai 10
// apakah x lebih kecil dari 20?, dan x ini bilangan genap atau bukan?, x di bagi 2 hasilnya 0 ga? true

?>

