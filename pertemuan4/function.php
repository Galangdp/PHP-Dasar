<?php

$time_rn = date("h:i A");

function greeting($name, $time_rn){
    return "Selamat datang $name! <br> Sekarang adalah jam $time_rn" ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo greeting("Galang", $time_rn); ?></h1>
</body>
</html>