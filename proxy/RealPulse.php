<?php
include_once("./common.php");
Class RealPulse implements IPulse{
	public function request($pulseType,$price){
		$resultPrice = 0;
        switch ($pulseType) {
        	case 'Green':
        		$greenPulseCalc = new GreenPulseCalc();
                $resultPrice = $greenPulseCalc->GreenPulseTotalCalc();
        		break;
        	case "Yellow":
        	     $adapter = new PulseAdapter(new PulseYellow());
                 $resultPrice = $adapter->GreenPulseTotalCalc();
                 break;
            case "Red":
                 $adapter = new PulseAdapter(new PulseRed());
                $resultPrice = $adapter->GreenPulseTotalCalc();
                break;
        	default:
        		break;
        }
        if($price >= $resultPrice){ //交易成功
        	return 1;
        }else{
        	return 2; //交易失败
        }
	}
}

?>