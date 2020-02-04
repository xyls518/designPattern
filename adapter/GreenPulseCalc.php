<?php
include_once("./common.php");
Class GreenPulseCalc extends ITarget{

	private $total = 0;

	public function __construct(){
		$this->glassCalc();
		$this->waterCalc();
		$this->riceCalc();
	}
	public function glassCalc(){
		$glass = new Glass();
		$this->glassPrice = $glass->getPrice();
	}

	public function waterCalc(){
       $water = new Water();
       $this->waterPrice = $water->getPrice();
	}

	public function riceCalc(){
		$rice = new Rice();
		$this->ricePrice = $rice->getPrice();
	}

	public function GreenPulseTotalCalc(){
		$pulseGreen = new pulseGreen();
        $greenPrice =  $pulseGreen->getPrice();
        $total = $greenPrice + $this->glassPrice + $this->waterPrice + $this->ricePrice;
        return $total;
	}
}
?>