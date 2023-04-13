<?php
include "../config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tbody id="displaydetails"></tbody>
        <?php
        $str=base64_decode($_SESSION['details']);
        echo "$str";
        ?>
    </table>
</body>
<script src="../js/script.js"></script>
</html>