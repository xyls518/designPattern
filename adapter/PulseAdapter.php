<?php
include_once("./common.php");
Class PulseAdapter extends ITarget{
	private $total = 0;
    private $pulse;
	public function __construct(IComponent $component){
		$this->glassCalc();
		$this->waterCalc();
		$this->riceCalc();
        $this->pulse = $component; //把其他豆子接入进来

	}
	public function glassCalc(){ //adaptee 的实现
		$glass = new Glass();
		$this->glassPrice = $glass->getPrice();
	}

	public function waterCalc(){ //adaptee 的实现
       $water = new Water();
       $this->waterPrice = $water->getPrice();
	}

	public function riceCalc(){ //adaptee 的实现
		$rice = new Rice();
		$this->ricePrice = $rice->getPrice();
	}

	public function GreenPulseTotalCalc(){ //把绿豆的总计算，适配成其他豆子的计算
        $otherPulsePrice = $this->pulse->getPrice();
	    $total = $otherPulsePrice + $this->glassPrice + $this->waterPrice + $this->ricePrice;
        return $total;

	}
}

?>