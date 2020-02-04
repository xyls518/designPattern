<?php

Class RedPulseSoybean extends RedSoybean{
    private $observer;
	public function __construct(Observer $observer){
      $this->observer = $observer;
      parent::__construct(); //实例化豆浆对象
	}

    //获取订阅对象
	public function getObserver(){
		return $this->observer;
	}
}

?>