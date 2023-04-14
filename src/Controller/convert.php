<?php
session_start();
$_SESSION['currency'] = array("RUPPEE" => "1", "USD" => "0.012", "EURO" => "0.011", "SOL" => "0.046");

$first=$_POST['first'];
$second=$_POST['second'];
$amt=$_POST['amt'];

    $val = $amt / $_SESSION['currency'][$first];
    $val = $val * $_SESSION['currency'][$second];
    // print_r($val);
    echo $val;

?>