<?php
include_once("./common.php");
interface IStrategy{
	public function algorithm($price);
}
?>