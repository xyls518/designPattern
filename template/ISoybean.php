<?php
include_once("./common.php");
abstract Class ISoybean{

	abstract public function pushPulse($pulse); //放入豆子
	abstract public function pushSugar($sugar); //放入糖
	abstract public function pushWater($water); //放入水
	abstract public function pickGlass($glass); //打包到杯子里面

  public function templateMethod($pulse,$sugar,$water,$glass){ //模板方法
          $this->pushPulse($pulse);
          $this->pushSugar($sugar);
          $this->pushWater($water);
       return $this->pickGlass($glass);
  }

    
}
?>