<?php
include_once("./common.php");
abstract class IProtoTypePulse{
	
    public $name;   //名称
    public $color;  //颜色
    public $price;  //人民币¥


	abstract function __clone();
}
?>