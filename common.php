<?php
spl_autoload_register(function($className){
    $path = $className . '.php';
    if(file_exists($path)){
      include_once $path;
    }
    $pathFactory = "factory/". $path;
    if(file_exists($pathFactory)){
      include_once $pathFactory;
    }

    $pathProtoType = "protoType/".$path;
    if(file_exists($pathProtoType)){
    	//echo $pathProtoType;
    	include_once $pathProtoType;
    }

    $pathDecorator = "decorator/".$path;
    if(file_exists($pathDecorator)){
    	include_once $pathDecorator;
    }

    $pathAdapter = "adapter/".$path;
    if(file_exists($pathAdapter)){
    	include_once $pathAdapter;
    }

    $pathState = "state/".$path;
    if(file_exists($pathState)){
    	include_once $pathState;
    }

    $pathTemplate = "template/".$path;
    if(file_exists($pathTemplate)){
    	include_once $pathTemplate;
    }

    $pathProxy = "proxy/".$path;
    if(file_exists($pathProxy)){
        include_once $pathProxy;
    }

    $pathDutylink = "dutylink/".$path;
    if(file_exists($pathDutylink)){
        include_once $pathDutylink;
    }

    $pathObserver = "observer/".$path;
    if(file_exists($pathObserver)){
        include_once $pathObserver;
    }

    $pathStrategy = "strategy/".$path;
    if(file_exists($pathStrategy)){
        include_once $pathStrategy;
    }
	
});

function rspace(){
    return "\r\n";
}

function rline(){
    return "<br/>";
}

function h1($text){
  return "<h1>".$text."</h1>";
}
?>