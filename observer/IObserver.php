<?php
include_once("./common.php");
interface IObserver{
	public function update(ISubject $subject);
}

?>