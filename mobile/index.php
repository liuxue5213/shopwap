<?php

/**
 * 功能描述：SWTouch项目入口文件
 */

/* 访问控制 */
define('IN_SWTOUCH', true);
/* 设置系统编码格式 */
header("Content-Type:text/html;charset=utf-8");
/* 设置系统编码格式 */
header("Pragma: no-cache");
/* 修复后退没有提交数据的问题 */
header("Cache-control: private");
/* 加载核心文件 */
require ('include/SWTouch.php');
