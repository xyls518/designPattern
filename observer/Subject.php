<?php
include_once("./common.php");
Class Subject implements ISubject{
	private $observers;
	private $data;
	public function setObservers(){
        $this->observers = new ObserverStorage();
	}

	public function attach(IObserver $observer){
       $this->observers->attach($observer);
	}

	public function detach(IObserver $observer){
		$this->observers->detach($observer);
	}

	public function notify(){
		foreach ($this->observers->getObservers() as $value) {
			$observer = unserialize($value);
			echo "now ".$observer->getName()." have notify ".$observer->update($this); //取出拿到的数据
			echo rline();
		}
	}

	public function setData($dataNow){
       $this->data = $dataNow;
	}

	public function getData(){
		return $this->data;
	}

    

}

?>