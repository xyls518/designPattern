<?php
abstract Class ITarget{
    protected $glassPrice = 0;
    protected $waterPrice = 0;
    protected $ricePrice = 0;

	abstract public function waterCalc();
	abstract public function riceCalc();
	abstract public function glassCalc();
	abstract public function GreenPulseTotalCalc();
}
?>