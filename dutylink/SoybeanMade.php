<?php
include_once("./common.php");
Class SoybeanMade extends IHandle{
    public function __construct(){

    }
	public function setSuccessor($nextService){
		$this->successor = $nextService;
	}

	public function handleRequest($request){
		$this->handle = "Made";
		if($this->handle == $request->getService()){ //轮训到了开始处理
		  $soybean = $request->getSoybean();
		  $soybean->setFruit("apple");
          $soybean->link[] = "add fruit ".$soybean->getFruit();
		}else if($this->successor != NULL){
			$this->successor->handleRequest($request);
		}
	}


}


?>