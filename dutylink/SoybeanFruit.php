<?php
include_once("./common.php");
Class SoybeanFruit extends Soybean{
	public $link; //存储职责链
	private static $fruit; //水果

	//增加水果
	public function setFruit($fruit){
		self::$fruit = $fruit;
	}

	public function getFruit(){
		return self::$fruit;
	}
}

?>