<?php

/**
 * SWTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2006-2015 ShopWapp.com All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：PublicControoller.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：公用方法控制器类
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.gope.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
defined('IN_SWTOUCH') or die('Deny Access');

class PublicController extends CommonController {

    // 验证码
    public function captcha() {
        Image::buildImageVerify();
    }

    // 地区筛选
    public function region() {
        $type = I('request.type', 0, 'intval');
        $parent = I('request.parent', 0, 'intval');

        $arr['regions'] = model('RegionBase')->get_regions($type, $parent);
        $arr['type'] = $type;
        $arr['target'] = I('request.target', '', 'trim,stripslashes');
        $arr['target'] = htmlspecialchars($arr['target']);

        echo json_encode($arr);
    }

}
