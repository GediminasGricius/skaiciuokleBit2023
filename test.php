<?php
class Skaiciai{
    public $sk=1;
    function __construct(){
        $this->sk++;

    }
    function inc(){
        $this->sk++;
    }
}

$i=new Skaiciai();
echo $i->sk;
