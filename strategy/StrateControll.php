<?php
include_once("./common.php");
Class StrateControll Implements IStrategy{
	private $strateControll;
	public function __construct(IStrategy $stragegy){
         $this->strateControll = $stragegy;
	}

	public function algorithm($price){
		return $this->strateControll->algorithm($price);
	}
	
}

?>