<?php
include_once("common.php");
//include_once("factory/FactoryGlass.php");
Class Client{
    
    private $proxy;
    public function __construct(){
       //echo $this->test();
       //echo rline();
       //echo $this->FactoryGlass();
       

       //返回各自工厂生产的产品
       echo h1("工厂模式演示");
       echo rline();
       echo "一个工厂返回一个产品";
       echo rline();
       echo $this->getGlass();
       echo rline();
       echo $this->getPulse();

       echo rline();
       echo "一个工厂返回多个产品";
       echo rline();
       //一个汽车工厂返回多种类型汽车
       echo $this->getTaxiCar();
       echo rline();
       echo $this->getTruckCar();
       echo rline();


       echo h1("原型模式演示");
       echo rline();
       echo "豆子变异成黄豆";
       echo rline();
       $this->getYellowPulse();
       echo rline();
       echo "复制绿豆";
       echo rline();
       $this->getGreenPulse();
       echo rline();
       echo h1("装饰器模式演示");
       echo rline();
       $this->getDecorator();

       echo h1("适配器模式演示");
       echo rline();
       echo "绿豆粥的总价是".$this->getGreenPulsePrice();
       echo rline();
       echo "黄豆粥的总价是".$this->getYellowPulsePrice();
       echo rline();
       echo "红豆粥的总价是".$this->getRedPulsePrice();

       echo h1("模板模式演示");
       echo rline();
       echo "绿豆浆结构步骤展示";
       $this->getGreenSoybean();
       echo rline();
       echo "红豆浆结构步骤展示";
       $this->getRedSoybean();
       echo rline();
       echo "黄豆浆结构步骤展示";
       $this->getYellowSoybean();

       echo h1("状态模式演示");
       echo rline();
       $this->changeSoybeanState();

       echo h1("链接代理模式演示");
       echo rline();
       $this->proxy = new Proxy();
       echo "通过安全认证链接到代理来购买绿豆粥";
       echo rline();
       $this->useProxyBuyGreenPulse();
       echo rline();
       echo "通过安全认证链接到代理来购买黄豆粥";
       echo rline();
       $this->useProxyBuyYellowPulse();
       echo rline();
       echo "通过安全认证链接到代理来购买红豆粥";
       echo rline();
       $this->useProxyBuyRedPulse();

       echo h1("策略模式演示");
       echo rline();
       $shop = new Shop("china");
       echo "中国地区红豆粥的价格";
 
       echo $shop->redPulse();
       echo rline();

       echo "美国地区黄豆粥的价格";

       $shop = new Shop("america");
       echo $shop->yellowPulse();
       echo rline();

       echo "欧洲地区绿豆粥的价格";

       $shop = new Shop("europe");
       echo $shop->greenPulse();
       echo rline();

       echo h1("职责链模式演示");
       echo rline();
       $this->getDutyLink("Made");
       echo rline();
       $this->getDutyLink("Transport");
       echo rline();
       $this->getDutyLink("Storage");
       echo rline();
       $this->getDutyLink("Sale");

       echo h1("观察者模式演示");
       echo rline();
       $this->getObserver();


    }





   /**
    * 调用test类
    * @return [type] [description]
    */
   private function test(){
     $Test = new Test();
     return $Test->do();
   }

   //返回杯子工厂生产的产品
   private function getGlass(){
   	$FactoryGlass = new FactoryGlass();
   	return $FactoryGlass->startFactory(); 
   }

   //返回豆子工厂生产的产品
   private function getPulse(){
   	 $FactoryPulse = new FactoryPulse();
   	 return $FactoryPulse->startFactory();
   }

   //返回汽车工厂生产的卡车
   private function getTruckCar(){
    $FactoryCar = new FactoryCar();
    return $FactoryCar->doFactory(new ProductCarTruck());
   }

   //返回汽车工厂生产的出租车
   private function getTaxiCar(){
    $FactoryCar = new FactoryCar();
    return $FactoryCar->doFactory(new ProductCarTaxi());
   }


   //返回黄豆
   private function getYellowPulse(){
     $pulse = new ProductPulse();
     $yellowPulse = clone $pulse;
     $yellowPulse->color = "Yellow";
     $yellowPulse->name = $yellowPulse->color.$yellowPulse->name; //豆子Name变异
     $yellowPulse->price = "1";
     $this->showPulse($yellowPulse);
   }
   //返回绿豆
   private function getGreenPulse(){
     $greenPulse = new GreenPulse();
     $newGreenPulse = clone $greenPulse;
     $this->showPulse($newGreenPulse);
     echo rline();
     echo "OtherName ".$newGreenPulse->otherName;
     echo rline();
     echo "绿豆变异成红豆";
     echo rline();
     $newGreenPulse->setAttribute(); //变异成红豆
     $redPulse = clone $newGreenPulse;
     $this->showPulse($redPulse);
     echo rline();
     echo "OtherName ".$newGreenPulse->otherName;
   }

   //返回豆子的属性
   private function showPulse(IProtoTypePulse $pulse){
     echo "Name ".$pulse->name;
     echo rline();
     echo "Color ".$pulse->color;
     echo rline();
     echo "Price ".$pulse->price;
   }

   //装饰器调用
   private function getDecorator(){
      

      $arr = ["Glass","Yellow","Green","Red"];
      foreach ($arr as $key => $value) {
        $name = $price = $color = $otherName = "";
        if($value == "Glass"){
              $component = $this->switchComponent($value); //IComponent
              $name = $component->getName();
              $price = $component->getPrice();
        }else{
              $decorator = $this->switchComponent($value);//IDecorator
              $name = $decorator->getName();
              $price = $decorator->getPrice();
              $color = $decorator->getColor();
              $otherName = $decorator->getOtherName();
             echo rline();
        }

        echo "Name ".$name;
        echo rline();
        echo "Color ".$color;
        echo rline();
        echo "Price ".$price;
        echo rline();
        echo "OtherName ".$otherName;

      }
      
      
   }

   //切换装饰器组件
   private function switchComponent($component){
      switch ($component) {
        case 'Glass':
          return new Glass();
        break;
        case 'Yellow':
          return new PulseYellow();
          break;
        case "Green":
          return new PulseGreen();
          break;
        case "Red":
          return new PulseRed();
          break;
        default:
          break;
      }
   }

   //计算绿豆粥的价格
   private function getGreenPulsePrice(){
      $greenPulseCalc = new GreenPulseCalc();
      return $greenPulseCalc->GreenPulseTotalCalc();
   }

   //计算黄豆粥的价格
   private function getYellowPulsePrice(){
      $adapter = new PulseAdapter(new PulseYellow());
      return $adapter->GreenPulseTotalCalc();
   }

   //计算红豆粥的价格
   private function getRedPulsePrice(){
     $adapter = new PulseAdapter(new PulseRed());
      return $adapter->GreenPulseTotalCalc();
   }

   //获取绿豆浆
   private function getGreenSoybean(){
      $greenSoybean = new GreenSoybean();
      $soybean =  $greenSoybean->templateMethod($this->switchComponent("Green")->getName()
        ,"redSugar",
        2,
        $this->switchComponent("Glass")->getName());
      echo rline();
      var_dump($soybean->step);
   }

    //获取红豆浆
   private function getRedSoybean(){
      $redSoybean = new RedSoybean();
      $soybean =  $redSoybean->templateMethod($this->switchComponent("Red")->getName()
        ,"blackSugar",
        3,
        $this->switchComponent("Glass")->getName());
      echo rline();
      var_dump($soybean->step);
   }

      //获取黄豆浆
   private function getYellowSoybean(){
      $yellowSoybean = new YellowSoybean();
      $soybean =  $yellowSoybean->templateMethod($this->switchComponent("Yellow")->getName()
        ,"whiteSugar",
        4,
        $this->switchComponent("Glass")->getName());
      echo rline();
      var_dump($soybean->step);
   }

   //改变豆浆的温度状态
   private function changeSoybeanState(){
    echo "豆浆温度状态依次变化 冷->温->热->冷->热";
    echo rline();
     $controllState = new ControllState(); //初始化为冷
     $controllState->warm();
     echo rline();
     $controllState->hot();
     echo rline();
     $controllState->cold();
     echo rline();
     $controllState->hot(); //不能直接变热，跳状态了
   }

   //通过安全认证链接到代理来购买绿豆粥
   private function useProxyBuyGreenPulse(){
     $key = UniversalConnect::doConnect(); //产生秘钥
     if($this->login($key,UniversalConnect::getPulseType())){ //验证通过才能够交易
        $result = $this->getResult(UniversalConnect::getPulseType(),17);
        if($result === false){
          echo "error key";
        }else{
          if($result ===1){
            echo UniversalConnect::getPulseType()." trade success";
          }else{
            echo UniversalConnect::getPulseType()." trade fail";
          }
        }
     }else{
      echo "unknow safe auth";
     }
   }

   //通过安全认证链接到代理来购买黄豆粥
   private function useProxyBuyYellowPulse(){
     $key = UniversalConnect::doConnect("Yellow","123"); //产生秘钥
     if($this->login($key,UniversalConnect::getPulseType())){ //验证通过才能够交易
        $result = $this->getResult(UniversalConnect::getPulseType(),17);
        if($result === false){
          echo "error key";
        }else{
          if($result ===1){
            echo UniversalConnect::getPulseType()." trade success";
          }else{
            echo UniversalConnect::getPulseType()." trade fail";
          }
        }
     }else{
      echo "unknow safe auth";
     }
   }

   //通过安全认证链接到代理来购买红豆粥
   private function useProxyBuyRedPulse(){
     $key = UniversalConnect::doConnect("Red","123"); //产生秘钥
     if($this->login($key,UniversalConnect::getPulseType())){ //验证通过才能够交易
        $result = $this->getResult(UniversalConnect::getPulseType(),17);
        if($result === false){
          echo "error key";
        }else{
          if($result ===1){
            echo UniversalConnect::getPulseType()." trade success";
          }else{
            echo UniversalConnect::getPulseType()." trade fail";
          }
        }
     }else{
      echo "unknow safe auth";
     }
   }

   
      //登录
  private function login($key,$pulseType){
       return $this->proxy->check($key,$pulseType);
  }


    //获取交易结果
  private function getResult($pulseType,$price){

       return $this->proxy->request($pulseType,$price);
  }


  //获取职责链的结果
  private function getDutyLink($queryNow){
    $q1 = new SoybeanMade();
    $q2 = new SoybeanTransport();
    $q3 = new SoybeanStorage();
    $q4 = new SoybeanSale();

    //设置后续轮训
    $q1->setSuccessor($q2);
    $q2->setSuccessor($q3);
    $q3->setSuccessor($q4);

    //生成请求
    $request = new Request($queryNow,new SoybeanFruit());
    //设置链首
    $q1->handleRequest($request);
    
    var_dump($request->getSoybean()->link);
  }

  private function getObserver(){
     $redPulseSoybean = new RedPulseSoybean(new Observer("redPulseSoybean"));
     $myRedPulseSoybean = $redPulseSoybean->templateMethod(//制作一杯红豆浆
        $this->switchComponent("Red")->getName()
        ,"blackSugar",
        3,
        $this->switchComponent("Glass")->getName()
        );
     
     $greenPulseSoybean = new GreenPulseSoybean(new Observer("greenPulseSoybean"));
     $myGreenPulseSoybean = $greenPulseSoybean->templateMethod( //制作一杯绿豆浆
        $this->switchComponent("Green")->getName()
        ,"redSugar",
        2,
        $this->switchComponent("Glass")->getName()
        );

      $yellowPulseSoybean = new YellowPulseSoybean(new Observer("yellowPulseSoybean"));
      $myYellowPulseSoybean = $yellowPulseSoybean->templateMethod( //制作一杯黄豆浆
        $this->switchComponent("Yellow")->getName()
        ,"whiteSugar",
        4,
        $this->switchComponent("Glass")->getName()
        );
     

     $subject = new Subject();
     $subject->setObservers(); //设置观察者存储池子
     $subject->setData("Soybean is'not overdue");

     //增加订阅对象
     $subject->attach($redPulseSoybean->getObserver());
     $subject->attach($greenPulseSoybean->getObserver());
     $subject->attach($yellowPulseSoybean->getObserver());

     //通知所有对象
     $subject->notify();

     echo rline();

     //去掉一个绿豆浆订阅对象，获取通知其他豆浆过期数据
     $subject->detach($greenPulseSoybean->getObserver());

     $subject->setData("Soybean is overdue"); //豆浆过期不能用了

     //通知所有对象
     $subject->notify();

     echo $redPulseSoybean->getObserver()->getName(). " sugar is ".$myRedPulseSoybean->getSugar();
     echo rline();
     echo $yellowPulseSoybean->getObserver()->getName()." sugar is ".$myYellowPulseSoybean->getSugar();

  }

 

   

}
$Client = new Client();

?>
