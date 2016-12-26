<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
//定义网站根目录
define('IMOOC',__DIR__."\\");
// define('IMOOC',realpath('/'));
define('CORE',IMOOC.'core\\');
define('APP',IMOOC.'app\\');
define('MODULE','app');
//开启调试模式
define('DEBUG',TRUE);
if(DEBUG){
	ini_set('display_error','On');
}else{
	ini_set('display_error','Off');
}
include CORE.'common\function.php';
include CORE.'imooc.php';
spl_autoload_register('\core\imooc::load');//当new一个类的时候如果不存在会触发这个参数
\core\imooc::run();
