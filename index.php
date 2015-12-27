<?
header("Content-Type:text/html; charset='UTF-8'");


if($GET['id']){
    $name = strip_tags($GET['id']);
    if(file_exists('data/classes/'.$name.".php")){
        $class_name = $name;
    }else{
        $class_name = "main";
    }
}else {
    $class_name = "main";
}

function __autoload($class_name){
    require_once('data/classes/'.$class_name.'.php');
}

$obj= new $class_name;

$res_arr = $obj->get_body();

require 'data/template/'.'index.php';