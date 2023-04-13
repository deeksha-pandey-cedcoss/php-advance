<?php

include './includes/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Autoloader</title>
</head>

<body>
    <h1>1.Class Autoload</h1>
    <?php
    $area = new Area(10, 10);
    echo $area->area();

    echo "<br>";

    $perimeter = new Perimeter(10, 10);
    echo $perimeter->perimeter();

    echo "<br>";

    $volume = new Volume(10, 10, 10);
    echo $volume->volume();

    echo "<br>";

    ?>
    <hr>
    <h2>2.File handling</h2>
    <?php
    $connection=mysqli_connect("mysql-server", "root", "secret","db_log");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }else{
        date_default_timezone_set('Asia/Calcutta');
        error_log('['.date("d/m/Y h:i:sa").']'." "."\n",3,"./log/db.log");
      }
      echo "Connected successfully";


    ?>
    <a href="./log/db.log">Log Files</a>
    <hr>
    <h2>3.Active Records</h2>
    <hr>
    <h2>4.Tokens</h2>
    <a href="./View/Login.php">Login Page</a>
</body>
<script src="./js/script.js"></script>
</html>