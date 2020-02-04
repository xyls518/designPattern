<?php
include_once("./common.php");
Class GreenPulse extends IProtoTypePulse{
    
    const Name = "greenPulse";

    public $otherName = "lvdou";
    public function __construct(){
    	$this->price = 2;
    	$this->color = "green";
    	$this->name = self::Name;
    }


    //变成红豆
    public function setAttribute(){
    	$this->price = 3;
    	$this->color = "red";
    	$this->name = "redPulse";
    	$this->otherName = "hongdou";
    }

	function __clone(){}
}

?>