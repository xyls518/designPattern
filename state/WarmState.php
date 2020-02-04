<?php
include_once("./common.php");
Class WarmState implements IState{
	private $controllState;
	public function __construct(ControllState $controllState){
       $this->controllState = $controllState;
	}
	public function turnCold(){
       echo "Soybean is'not change this";
	}
	public function turnWarm(){
		echo "Soybean is'not change this";
	}
	public function turnHot(){
	  echo "now Soybean is hot state";
      $this->controllState->setState($this->controllState->getHotState());
      
	}
}

?>