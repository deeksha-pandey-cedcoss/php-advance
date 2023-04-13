<?php

class Perimeter{
public $length;
public $bredth;

public function __construct($length,$bredth){
    $this->length=$length;
    $this->bredth=$bredth;
}

public function perimeter(){
    $perimeter="Perimeter of rectangle is".(2*($this->length)+($this->bredth))."units.";
    return $perimeter;

}
}


?>