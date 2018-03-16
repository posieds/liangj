<?php

// +----------------------------------------------------------------------

// | 应用入口文件

// +----------------------------------------------------------------------

// | ThinkOAO （Online And Offline）

// +----------------------------------------------------------------------

// | Copyright (c) 2016 http://www.hanchao9999.com All rights reserved.

// +----------------------------------------------------------------------

// | Author: xiaogg <xiaogg@sina.cn>

// +----------------------------------------------------------------------

if(version_compare(PHP_VERSION,'5.3.0','<'))die('require PHP > 5.3.0 !');// 检测PHP环境
define('APP_DEBUG',true);//开启调试模式
define('ROOT_PATH',__DIR__);
define('APP_PATH','./Application/');// 定义应用目录
define('_PHP_FILE_',$_SERVER['SCRIPT_NAME']);//nginx伪静态校正
require './version.inc.php';//加载版本信息
require './ThinkPHP/ThinkPHP.php';// 引入ThinkPHP入口文件

?>
