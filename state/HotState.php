<?php
include_once("./common.php");
Class HotState implements IState{
	private $controllState;
	public function __construct(ControllState $controllState){
       $this->controllState = $controllState;
	}
	public function turnCold(){
       echo "now Soybean is cold state";
       $this->controllState->setState($this->controllState->getColdState());
	}
	public function turnWarm(){
		echo "Soybean is'not change this";
	}
	public function turnHot(){
      echo "Soybean is'not change this";
	}
}

?>