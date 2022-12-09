<?php 

    // w/out array
        // $hari1 = "senin";
        // $hari2 = "selasa";

    // w/array
        // cara lama
            $hari = array("Senin", "Selasa", "Rabu");
        // cara baru
            $bulan = ["January", "February", "Maret"];
            $arr = [25, "September", false];

    
    // Menampilkan Array
        // var_dump() / print_r()
            // var_dump($hari);
            // echo "<br>";
            // print_r($bulan);
            // echo "<br>";

    // Menampilkan Satu Elemen pada Array
        // echo $arr[0];
        // echo $bulan[2];

    // Menambahkan Array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jumat";
    echo "<br>";
    var_dump($hari);


?>