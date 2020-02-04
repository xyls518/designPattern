<?php
include_once "./common.php";
Class FactoryCar extends ICreator{
	
	//不去实现
	public function FactoryMethod(){

	}

    //区分了不同的产品
	public function countryFactoryMethod(IProduct $product){
          return $product->getName();
	}


}

?>