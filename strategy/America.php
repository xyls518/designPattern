<?php
include_once("./common.php");
Class America implements IStrategy{
	public function algorithm($price){
        return $price *2;
	}
}

?>