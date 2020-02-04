<?php
include_once("./common.php");
abstract Class IHandle{
	protected $handle;
	protected $successor;

	abstract public function handleRequest($request);
	abstract public function setSuccessor($nextService);
}
?>