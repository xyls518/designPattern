<?php
include_once("./common.php");
Class ColdState implements IState{

    private $controllState;
	public function __construct(ControllState $controllState){
       $this->controllState = $controllState;
	}
	public function turnCold(){
        echo "Soybean is'not change this";
	}
	public function turnWarm(){
		echo "now Soybean is warm state";
        $this->controllState->setState($this->controllState->getWarmState());
	}
	public function turnHot(){
        echo "Soybean is'not change this";
	}
}

?>