<?php
// change of case
$text=$_POST['text'];
$action=$_POST['action'];
switch($action){
    case 'uppercase':{
        $text=strtoupper($text);
        echo $text;
        break;
    }
    case 'lowercase':{
        $text=strtolower($text);
        echo $text;
        break;
    }
    case 'filter':{
        $text=trim(preg_replace('/[^da-z0-9A-Z]+[^\x00-\x7F]/i', '', $text));
        echo $text;
        break;
    }
}

?>