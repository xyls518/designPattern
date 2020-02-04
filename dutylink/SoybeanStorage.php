<?php
include_once("./common.php");
Class SoybeanStorage extends IHandle{
	public function setSuccessor($nextService){
		$this->successor = $nextService;
	}

	public function handleRequest($request){
		$this->handle = "Storage";
		if($this->handle == $request->getService()){ //轮训到了开始处理
			
		  $soybean = $request->getSoybean();
          $soybean->link[] = "add Storage tag 002 ";
		}else if($this->successor != NULL){
			
			$this->successor->handleRequest($request);
		}
	}
}
?>