<?php
include_once("./common.php");
Class PulseRed extends IDecorator{
	private $redPulse;
    public function __construct(){
     $greenPulse = new GreenPulse();
     $newGreenPulse = clone $greenPulse;
     $newGreenPulse->setAttribute(); //变异成红豆
     $this->redPulse = clone $newGreenPulse;
    }

	public function getName(){
      return $this->redPulse->name;
	}


	public function getPrice(){
		return $this->redPulse->price;
	}

	public function getOtherName(){
		return $this->redPulse->otherName;
	}

	public function getColor(){
		return $this->redPulse->color;
	}
}


?>