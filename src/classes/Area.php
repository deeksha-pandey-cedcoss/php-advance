<?php

class Area{
public $length;
public $bredth;

public function __construct($length,$bredth){
    $this->length=$length;
    $this->bredth=$bredth;
}

public function area(){
    $area="Area of rectangle is".($this->length)*($this->bredth)."square units.";
    return $area;

}
}


?>