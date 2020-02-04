<?php

include_once("./common.php");
/**
 * 豆浆对象
 */
Class Soybean{
   private $water;
   private $sugar;
   private $glass;
   private $pulse;

   public $step;

   public function setWater($water){
      $this->step[] = "water:".$water;
     $this->water = $water;
   }

   public function getWater(){
   	return $this->water;
   }

   public function setSugar($sugar){
      $this->step[] = "sugar:".$sugar;
   	$this->sugar = $sugar;
   }

   public function getSugar(){
   	  return $this->sugar;
   }

   public function setGlass($glass){
      $this->step[] = "glass:".$glass;
   	 $this->glass = $glass;
   }

   public function getGlass(){
   	return $this->glass;
   }

   public function setPulse($pulse){
       $this->step[] = "pulse:".$pulse;
   	 $this->pulse = $pulse;
   }

   public function getPulse(){
   	 return $this->pulse;
   }

}


?>