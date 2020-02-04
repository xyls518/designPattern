<?php
include_once("./common.php");
Class Glass extends IComponent{
    public function __construct(){
        
    }

	public function getName(){
       $FactoryGlass = new FactoryGlass();
   	   return $FactoryGlass->startFactory();
	}

	public function getPrice(){
		return 10;
	}
}
?>