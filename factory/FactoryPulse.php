<?php
include_once "./common.php";
Class FactoryPulse extends ICreator {
	public function factoryMethod(){
        $productPulse = new ProductPulse();
        return $productPulse->getName();
	}

	//不去实现
	public function countryFactoryMethod(IProduct $product){

	}
}
?>