<?php
include_once("./common.php");
Class Shop{
	private $area;

	public function __construct($area){
       $this->area = $area;
	}
	   //中国的豆粥价格计算
	  private function chinaPulse($price){
	    $strateControll = new StrateControll(new China());
	    return $strateControll->algorithm($price);
	  }

	  //欧洲的豆粥的价格计算
	  private function europePulse($price){
	    $strateControll = new StrateControll(new Europe());
	    return $strateControll->algorithm($price);
	  }

	  //美国的豆粥的价格计算
	  private function americaPulse($price){
	    $strateControll = new StrateControll(new America());
	      return $strateControll->algorithm($price);
	    
	  }

	  private function exchange($area,$price){
         switch ($area) {
         	case 'china':
         		return $this->chinaPulse($price);
         		break;
         	case 'europe':
         	    return $this->europePulse($price);
         	case 'america':
         	    return $this->americaPulse($price);
         	    break;
         	default:
         		# code...
         		break;
         }
	  }

	public function redPulse(){
      $adapter = new PulseAdapter(new PulseRed());
      $price = $adapter->GreenPulseTotalCalc();
      return $this->exchange($this->area,$price);
	}

	public function greenPulse(){
      $greenPulseCalc = new GreenPulseCalc();
      $price = $greenPulseCalc->GreenPulseTotalCalc();
      return $this->exchange($this->area,$price);
	}

	public function yellowPulse(){
	  $adapter = new PulseAdapter(new PulseYellow());
      $price = $adapter->GreenPulseTotalCalc();
      return $this->exchange($this->area,$price);
	}
}
?>