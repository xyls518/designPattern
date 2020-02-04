<?php
include_once "./common.php";
Class FactoryGlass extends ICreator {
	public function factoryMethod(){
        $productGlass = new ProductGlass();
        return $productGlass->getName();
	}

    //不去实现
	public function countryFactoryMethod(IProduct $product){

	}
}
?>