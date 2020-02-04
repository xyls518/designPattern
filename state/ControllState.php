<?php
include_once("./common.php");
Class ControllState{
	private $coldState;
	private $warmState;
	private $hotState;

	private $currentState;

	public function __construct(){
      $this->coldState = new ColdState($this);
      $this->warmState = new WarmState($this);
      $this->hotState = new HotState($this);

      //设置一个开始的状态
      $this->currentState = $this->coldState;
	}

	public function cold(){
      $this->currentState->turnCold();
	}

	public function warm(){
      $this->currentState->turnWarm();
	}

	public function hot(){
      $this->currentState->turnHot();
	}

    //设置状态
	public function setState(IState $state){
       $this->currentState = $state;
	}

	//获取状态
	public function getColdState(){
       return $this->coldState;
	}

    public function getWarmState(){
       return $this->warmState;
    }

    public function getHotState(){
      return $this->hotState;
    }

}

?>