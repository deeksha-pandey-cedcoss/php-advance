<?php

include './includes/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
        // die("Connection failed: " . mysqli_connect_error());
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
    <hr>
    <h2>5.Cookies</h2>
    <a href="./View/Signin.php">Signin Page</a>
    <hr>
    <h2>6. PHP AJAX</h2>
    <textarea  placeholder="Enter text" id="text"> </textarea>
    <textarea value="" placeholder="Changed text" id="changed"></textarea>
    <br>
    <button type="button" onclick="uppercase()">Upper Case</button>
    <button type="button" onclick="lowercase()">Lower Case</button>
    <hr>
    <h2>7. PHP Advanced Filter</h2>
    <input type="text" placeholder="Enter text" id="textchange">
    <input type="text" value="" placeholder="Changed text" id="changedval">
    <button type="button" onclick="filtertext()">Click me</button>
    <hr>
    <h2>8.Advance Forms</h2>
    <a href="./View/currency.php">Click to convert</a>
    <hr>
    <h2>9.PHP Advance-Array</h2>
    <?php
    include ""
    ?>
</body>
<script src="./js/script.js"></script>
</html>