<?php
include_once("./common.php");
abstract class IComponent implements IProduct{
	abstract public function getPrice();

	//abstract public function  getName(); 隐藏实现方法

}

?>