<?php 
    // Variable Scope/ lingkup variable
        // cara yang salah buat ngaambil
                // $text_title = "ini variable x di luar function ";
                // $x = 10;

                // function tampilx(){
                //     $text_title = "ini variable x di dalem function ";
                //     $x = 20;
                //     echo $text_title, $x;
                //     // variable x ini bukan variable sebelumnya
                //     // variable yang di buat di dalam function itu hanya berlaku di dalam function itu aja
                // }

                // tampilx();
                // echo "<br>";
                // echo $text_title, $x;
        
?>

<?php 
    // $x = 10;

    // function tampilx(){
    //     global $x;
    //     echo $x;
    // }

    // tampilx();
?>

<?php 
    // Superglobals
        // ada 7 variable super global(array asociative):
            // $_GET
            // $_POST
            // $_REQUEST
            // $_SESSION
            // $_COOKIE
            // $_SERVER
            // $_ENV

            
    // Cara masukkin data ke array asociative
        // Cara 1 :
            // $_GET ["nama"] = "Galang Davian Pradana";
            // $_GET ["nrp"] = "0292929";

            // var_dump($_GET);

        // Cara 2 ;
            // "?" = saya akan memsasuki data ke halaman ini, masukkin nya ke dalam variabe $_GET (key = value)
            // "&" = ingin mengirim data lain
            // "?" + keynya array + "=" value nya adalah isi dari array key nya / ?nama=Sandhika Galih
            // "?nama=<?= $f["nama"]; 

?>

<?php 
    $film = [
        [
            "img" => "dark.jpeg",
            "nama" => "Dark",
            "tahun" => "2017"
        ],
        [
            "img" => "jumanji.jpeg",
            "nama" => "Jumaji",
            "tahun" => "1995"
        ],
        [
            "img" => "guardian.jpeg",
            "nama" => "Guardian",
            "tahun" => "2014"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Film</h1>
    <ul>
        <?php foreach($film as $f) : ?>
            <li>
                <!-- Kirimkan datanya ke halaman yang berbeda dengan ? dan & -->
                    <a href="latihan2.php?nama=<?= $f["nama"]; ?> &img=<?= $f["img"] ?> &tahun=<?= $f["tahun"] ?> ">
                        <?= $f["nama"]; ?>
                    </a>
                    <!-- kita ambil data dari array yang keynya nama truss value nya adalah $ yang menggantikan film / $f kemudian isi dengan array nya -->
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>