<?php
include_once("./common.php");
interface ISubject{
	public function attach(IObserver $observer);
	public function detach(IObserver $observer);
	public function notify();
}

?>