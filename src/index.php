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
    <h1>Class Autoload</h1>
    <?php
    $area= new Area(10,10);
    echo $area->area();

    echo "<br>";

    $perimeter= new Perimeter(10,10);
    echo $perimeter->perimeter();

    echo "<br>";

    $volume=new Volume(10,10,10);
    echo $volume->volume();

    echo "<br>";
    
    ?>
</body>
</html>