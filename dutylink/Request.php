<?php
include_once("./common.php");

Class Request{
	private $value;
	private $soybean;
	public function __construct($service,$soybean){
       $this->value = $service;
       $this->soybean = $soybean;
	}

	public function getService(){
	   return $this->value;
	}

	public function getSoybean(){
       return $this->soybean;
	}

}

?>