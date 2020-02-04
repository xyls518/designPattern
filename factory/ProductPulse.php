<?php
include_once("./common.php");

Class ProductPulse extends IProtoTypePulse implements IProduct{
 
    public function __construct(){
    	$this->name = $this->getName();
    }

	public function getName(){
	   return "Pulse";
	}

	function __clone(){}
}
?>