<?php
include_once("./common.php");
Class Europe implements IStrategy{
	public function algorithm($price){
       return $price * 3;
	}
}


?>