<!-- Array Associative -->
    <!-- Definisi sama seperti Array numerik kecuali, keynya adalah string yang kita buat sendiri -->
    <!-- 
        Perbedeaan :
            - Array Associative = key nya string yang di buat sendiri
            - Array Numerik = key nya index
     -->

     <!-- Contoh Array Associative -->
        <!-- Code Buat -->
            <!-- $mahasiswa = [
                        "nama" => "Galang Davian Pradana", 
                        "nrp" => "91828819",
                        "email" => "galangdavianp@gmail.com",
                        "jurusan" => "Teknik Informatika" 
            -->
        
        <!-- Pemanggilan Code(yang di panggil key nya) -->
            <!-- echo $mahasiswa["jurusan"]; -->


    <!-- Contoh dua array -->
        <!-- Perhatikan array pertama nya, karena dia numerik maka panggil hyang numerik dahulu baru panggil array associative nya -->
            <!-- $mahasiswa = [
                [
                    "nama" => "Galang Davian Pradana", 
                    "nrp" => "91828819",
                    "email" => "galangdavianp@gmail.com",
                    "jurusan" => "Teknik Informatika"
                ],
                [
                    "nama" => "Audie Amartya", 
                    "nrp" => "8927273",
                    "email" => "audieamartya@gmail.com",
                    "jurusan" => "Teknik Informatika"
                ]
                ];

                echo $mahasiswa[1]["email"]; -->
                

    <!-- Contoh Array dalam Array -->
        <!-- $mahasiswa = [
        [
            "nama" => "Galang Davian Pradana", 
            "nrp" => "91828819",
            "email" => "galangdavianp@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Audie Amartya", 
            "nrp" => "8927273",
            "email" => "audieamartya@gmail.com",
            "jurusan" => "Teknik Informatika",
            "nilai" => [90,80,100]
        ]
        ];

        echo $mahasiswa[1]["nilai"][1]; -->