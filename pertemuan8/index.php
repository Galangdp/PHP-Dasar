<!-- Database -->
    <!-- Data adalah Reperentasi Fakta di dunia nyata -->
        <!-- 
            Contoh Data :
                - Nama
                - No KTP
                - Judul Buku
                - Video
                - Foto 
                - Harga
                - Dokumen
         -->

         <!-- 
            Saling Terkait :
                - Buku = memiliki Judul Buku, Pengarang, Penerbit
                - Mahasiswa = memiliki Nama, NRP, Email, Jurusan
          -->

          <!-- 
            Menyimpan & Mengelola Data :
                - Taruh di Notepad
                - Taruh di Excel

            Problem :
                - Kapasitas
                - Kecepatan
                - Keamanan
                - Duplikasi
                - dll.

            Solusi :
                - Skabilitas
                - Tersedia
                - Aman
                - Permanen
                - dll.
           -->

    <!-- DBMS -->
        <!-- 
            Ini Adalah DBMS(Data Base Management System)/ tempat mengelola data base bukan Database :
                - Oracle
                - MySQL
                - SQL Server
                - PostgreSQL
                - MongoDB
        -->

        <!-- 
            DBMS :
                - Relational DBMS = Keterhubngan antar data
                - Hierarchical DBMS
                - Network DBMS
                - NoSQL DBMS
        -->

            <!-- RDBMS/ Relational DBMS = ketika kita ingin membuat database kemudian memiliki banyak table, dan table table ini bisa saling kita hubungkan dengan menghubungkan relasi  -->

    <!-- Table -->
        <!-- 
            Table :
             - Memiliki Baris (Record) = yang ke arah Horizontal/ ke kanan kiri
             - Memiliki Column (Field) = yang ke arah Vertical / ke atas bawah
             - Tiap Tiap Field nantinya punya aturan sendiri untuk mengisikan datanya (Teks, Angka, Tanggal)
             - Primary Key = Kunci Utama/ Sebuah data yang dapat memprenstasikan satu baris record secara unik
             - Unik = Tidak ada data yang sama di dalam table itu contoh : nomorinduk1 column satu kemudian nomorinduk1 lagi di column 2, jadi gaboleh samaan 
         -->

    <!-- ISTILAH -->
        <!-- 
            beberapa istilah :
                - Field/Column = Column
                - Row = Baris
                - Key(kunci) : 
                    - Primary Key = Dalam Sebuah table harus ada
                    - Foreign Key
                - Auto Increment = Fitur dari sebuah database untuk menambah nilai satu per satu setiap Recordnya masuk
                - Relationship = Hubungan antar table
                - Normalization = sebuah proses untuk membuat table di dalam data kalian normal
         -->

<!-- MySQL -->
    <!-- 
        My Sql :
            - Masuk ke MySQL sebagai user dengan cara menambahkan teks -u root -p
            - Code / Syntax :
                - Show Database = show databases;
                - Create Database = create database namadatabase;
                - Delete Database = drop database namadatabase;
                - Create Table = create table namadatabase(isi);
                - Delete Table = delete table namatable;
                - Show Table = show tables;
                - Describe Table = describe namatable;
                - Memasukkan data ke table = insert into namatable values (isinya sesuai urutan)
                - Untuk melihat = select * from namatable;
                - Untuk melihat isi khusus = select namajudulbaris, namajudulbaris from namatable;
                - Untuk mencari isi khusus = select * from namatable where namajudulbaris = 'isi';
                - Update Data = update namatable set namajudulbaris = 'gantiyangbaru' where namajudulbaris 'isi';
                - Delete Record/Baris = delete from namatable where namajudulbaris = 'isi';
     -->