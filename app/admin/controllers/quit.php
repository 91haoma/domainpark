<?php

// +----------------------------------------------------------------------
// | 域名停靠系统 v2017
// +----------------------------------------------------------------------
// | 版权所有 2016~2018 开源代码 [ http://www.mypark.com ]
// +----------------------------------------------------------------------
// | 官方网站：http://www.mypark.com
// +----------------------------------------------------------------------
// | 作者: 无名小二
// +----------------------------------------------------------------------
/**
 * 退出登录
 */
unset($_SESSION['admin']);
header('Location:/'.$_cp->url()[1].'/login');