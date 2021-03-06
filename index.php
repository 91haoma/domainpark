<?php
// +----------------------------------------------------------------------
// | 域名停靠系统 v1.0.0
// +----------------------------------------------------------------------
// | 版权所有 2018~2118 开源代码 [ http://www.mypark.com ]
// +----------------------------------------------------------------------
// | 官方网站：http://www.mypark.com
// +----------------------------------------------------------------------
// | 作者: 无名小二
// +----------------------------------------------------------------------

/*
 * 系统入口
 */

// PHP版本检查
header("Content-type: text/html; charset=utf-8");
if (version_compare(PHP_VERSION, '5.5', '<')) {
    die('PHP版本过低，最少需要PHP5.5，请升级PHP版本！');
}
// 定义程序运行路径
define('PATH', __DIR__ );
// 定义应用目录
define('APP_PATH', PATH. '/app/');
// 错误输出开关 on开启输出 off或其它值为关闭。
define('ERROR', 'on' );
//加载框架引导
require PATH.'/cmspro/start.php';
//运行域名停靠系统框架
cmspro::init(); 


