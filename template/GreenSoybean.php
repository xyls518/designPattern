<?php
include_once("./common.php");
Class GreenSoybean extends ISoybean{

	private $soybean;

    public function __construct(){
    	$this->soybean = new Soybean();
    }

	public function pushWater($water){
        $this->soybean->setWater($water);
	}

	public function pushSugar($sugar){
       $this->soybean->setSugar($sugar);
	}

	public function pushPulse($pulse){
       $this->soybean->setPulse($pulse);
	}

	public function pickGlass($glass){
       $this->soybean->setGlass($glass);
       return $this->soybean;
	}
}

?>
