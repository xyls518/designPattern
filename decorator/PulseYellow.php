<?php
include_once("./common.php");
Class PulseYellow extends IDecorator{

	private $yellowPulse;
    public function __construct(){
     $pulse = new ProductPulse();
     $this->yellowPulse = clone $pulse;
     $this->yellowPulse->color = "Yellow";
     $this->yellowPulse->name = $this->yellowPulse->color.$this->yellowPulse->name; //豆子Name变异
     $this->yellowPulse->price = 1;
    }

	public function getName(){
        return $this->yellowPulse->name;
	}

	public function getPrice(){
		return $this->yellowPulse->price;
	}

	public function getOtherName(){ //无此属性
		
	}

	public function getColor(){
		return $this->yellowPulse->color;
	}
}
?>