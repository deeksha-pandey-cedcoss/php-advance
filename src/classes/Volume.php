<?php
// volume class
class Volume{
public $length;
public $bredth;
public $height;

public function __construct($length,$bredth,$height){
    $this->length=$length;
    $this->bredth=$bredth;
    $this->height=$height;
}
public function volume(){
    $volume="Volume of rectangle is".($this->length)*($this->bredth)*($this->height)."cube units.";
    return $volume;

}
}


?>