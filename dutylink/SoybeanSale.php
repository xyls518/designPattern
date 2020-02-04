<?php
include_once("./common.php");
Class SoybeanSale extends IHandle{
	public function setSuccessor($nextService){
		$this->successor = $nextService;
	}

	public function handleRequest($request){
		$this->handle = "Sale";
		if($this->handle == $request->getService()){ //轮训到了开始处理
			$soybean = $request->getSoybean();
          $soybean->link[] = "sale $8";
		}else if($this->successor != NULL){
			$this->successor->handleRequest($request);
		}
	}
}


?>