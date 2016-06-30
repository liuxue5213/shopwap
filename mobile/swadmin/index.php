<?php

/**
 * SWTouch Open Source Project
 * 功能描述：SWTouch项目后台入口文件
 */

/* 启用session机制 */
@session_start();
$_SESSION['safe_route'] = true;
header('location:../index.php?m=admin');
