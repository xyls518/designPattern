<?php
include_once("./common.php");
Class China implements IStrategy{
	public function algorithm($price){
       return $price;
	}
}
?>