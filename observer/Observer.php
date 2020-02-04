<?php

include_once("./common.php");
Class Observer implements IObserver{

	private $name;

	public function __construct($name){
       $this->name = $name;
	}

    //更新数据
	public function update(ISubject $subject){
		return $subject->getData();
	}

    //获取订阅者名字
	public function getName(){
		return $this->name;
	}
}
?>