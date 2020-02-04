<?php
include_once("./common.php");
Class UniversalConnect implements IConnect{

	private static $pulseType = IConnect::PULSETYPE;
	private static $pass = IConnect::PASS;
	private static $key;

	public function __construct(){
        
	}
	//生成链接秘钥
	public static function doConnect($newPulseType = "",$newPass=""){
		!empty($newPulseType) && self::$pulseType = $newPulseType; //可以随时替换
		!empty($newPass) && self::$pass = $newPass;
        self::$key = md5(self::$pulseType.self::$pass);
        return self::$key;
	}


    //获取要交易的豆子类型
	public static function getPulseType(){
		return self::$pulseType;
	}


}
?>