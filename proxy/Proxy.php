<?php
include_once("./common.php");
Class Proxy implements IPulse{

    private $realPulse;
    private $pass = "123";
    private static $token = [];
    private static $key;

    //接收结果
	public function request($pulseType,$price){
	   if(in_array(self::$key, self::$token)){ //保证key是正确的
	   	   $this->realPulse = new RealPulse();
           return $this->realPulse->request($pulseType,$price);
	   }else{
	   	return false;
	   }
 
	}

    //验证秘钥
	public function check($key,$pulseType){
		self::$key = $key;
      if($key == md5($pulseType.$this->pass)){
         self::$token[] = $key;
      	return true;
      }else{
      	return false;
      }
	}
}
?>