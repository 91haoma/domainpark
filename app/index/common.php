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
$domain = get_host();
$dn = DB('domain')->field('*')->where("domain='{$domain}'")->find();
$user = DB('user')->field('*')->where("id='{$dn['uid']}'")->find();