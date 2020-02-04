<?php
include_once("./common.php");
Class ObserverStorage implements ISubject{
	private $observers;
	public function attach(IObserver $observer){
       $this->observers[$observer->getName()] = serialize($observer);
	}

	public function detach(IObserver $observer){
       unset($this->observers[$observer->getName()]);
	}

    //不去实现
	public function notify(){

	}

    //返回订阅对象池
	public function getObservers(){
		return $this->observers;
	}
}

?>