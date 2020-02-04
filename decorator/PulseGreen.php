<?
include_once("./common.php");
Class PulseGreen extends IDecorator{
	private $newGreenPulse;
    public function __construct(){
     $greenPulse = new GreenPulse();
     $this->newGreenPulse = clone $greenPulse;
    }

	public function getName(){
       return $this->newGreenPulse->name;
	}

	public function getPrice(){
		return $this->newGreenPulse->price;
	}

	public function getOtherName(){
		return $this->newGreenPulse->otherName;
	}

	public function getColor(){
		return $this->newGreenPulse->color;
	}
}
?>