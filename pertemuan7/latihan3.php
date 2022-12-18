<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    <!-- Form Butuh Atribute -->
    <!-- 
        2 Atribute Wajib :
            - action
            - method
    -->

    <!-- w/out action -->
        <?php if(isset($_POST["submit"])) : ?>
            <h1>Selamat Datang <?= $_POST["nama"]; ?></h1>
        <?php endif ?>

        <form method="post" >
            Masukkan Nama :
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">Send!</button>
        </form>

    <!-- w/action -->
        <!-- <form action="latihan4.php" method="post" >
            Masukkan Nama :
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">Send!</button>
        </form> -->

</body>
</html>