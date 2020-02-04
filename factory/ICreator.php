<?php
include_once("./common.php");
abstract Class ICreator{
	protected abstract function factoryMethod();
	public function  startFactory(){
         $productName = $this->factoryMethod(); //一个工厂生产一个产品，工厂方法需要返回一个产品名称
         return $productName;
	}

	protected abstract function countryFactoryMethod(IProduct $product); 

	public function doFactory($productNow){
         $productName = $this->countryFactoryMethod($productNow); //一个工厂生产多个产品，非抽象类。返回产品名称
         return $productName;
	}
}
?>