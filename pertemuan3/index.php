<!-- Control Flow/ Struktur Kendali -->
<!-- dengan Control flow kita bisa mengatur alur pembacaan code nya mau yang mana dlu yang akan di kerjain duluan -->

<!-- 
    ada : 2
    - Pengulangan 
    - Pengkondisian
 -->

 

 <!-- Pengulangan -->
 <!-- Ketika kita ingin mengerjakan ulang sbuah blok program tanpa menulis ulang script nya -->
<!-- 
    ada : 4
    - for
    - while
    - do while
    - foreach = pengulangan khusus array
 -->

 



 <!-- Pengkondisian -->
 <!-- 
    ada : 5
    - if else
    - if , else, else if
    - ternary
    - switch
  -->






  <!-- Pengulangan -->
  <?php 
//   Pengulangan
// for
// while
// do while
// forreach : pengulangan khusus array
// () = ada 3 untuk isinya = inisialisasi, kondisi terminasi, increment/ decrement
// inisialisasi = menetukan variable awal untuk pengulangannya
// kondisi terminasi = memberhentikan pengulangannya
// increment/ decrement =  supaya pengulangan nya bisa maju atau mundur



    // for
    // Input
    // for ( $i = 0; $i < 5; $i++){
    //     echo"Hello World! <br>";
    // }
    // cara baca (): nilai awal i adalah 0, selama i lebih kecil dari 5  maka lakukan pengulangan nya truss menerus, maka lakukan penambahan dengan i++ jadi 1, menambah truss sampe kondisi nya suatu saat 5, ketika 5 di cek lebih kecil dari 5 maka dia false, ketika dia false akan kluar dari looping



    // while

    // Input
    // $i = 0;
    // while( $i < 5){
    //     echo"Hello World! <br>";
    //     $i++;
    // }
    // Basically sama dengan for, cuman beda penaruhan kondisi. membutuhkan 3 kondisi juga. 


    // do while
    // lakukan hal ini, selama kondisi bernilai true
    // jalankan dlu baru cek kondisi nya

    // Input
    // $i = 10;
    // do {
    //     echo "Hello World! <br>";
    //     $i++;
    // } while($i < 5);
    // cara baca : ketika kondisinya bernilai false maka block nya akan di jalankan dlu 1 kali, kalo while tidak akan di jalankan (kalo kondisi false).  

  ?>







<!-- Pengkondisian -->
<?php 
  // Pengkondisian / Percabangan
  // if, else
  // if else else if 
  // ternary = operator sederhana
  // switch


  // if
  // Input
  // $i = 10;
  // if($i < 20){
  //   echo "Benar! ";
  // } else{
  //   echo"Salah";
  // }
  // cara baca : jika kondisi berikut bernilai true, maka jalankan baris 107, jika salah maka jalanin baris 109

  // Input
  // $i = 30;
  // if($i < 20){
  //   echo "Benar!";
  // } else if($i == 20){
  //    echo "Binggo!";
  // } else{
  //   echo"Salah!";
  // }
  // cara baca : jika kondisi bernilai true, maka jalankan baris 116, jika nilai nya adalah 20 maka jalankan baris 118, dan jika salah maka jalankan baris 120

?>