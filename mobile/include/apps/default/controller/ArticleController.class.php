<?php

/**
 * SWTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2006-2015 ShopWapp.com All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：ArticleControoller.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：文章控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.gope.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_SWTOUCH') or die('Deny Access');

class ArticleController extends CommonController {

    private $size = 10;
    private $page = 1;
    private $cat_id = 0;
    private $keywords = '';

    public function __construct() {
        parent::__construct();
        $this->cat_id = intval(I('get.id'));
    }

    /* ------------------------------------------------------ */

    //-- 文章分类
    /* ------------------------------------------------------ */
    public function index() {
        $cat_id = intval(I('get.id'));
        $this->assign('article_categories', model('Article')->article_categories_tree($cat_id)); //文章分类树
        $this->display('article_cat.dwt');
    }

    /* ------------------------------------------------------ */

    //-- 文章列表
    /* ------------------------------------------------------ */
    public function art_list() {
        $this->parameter();
        $this->assign('keywords', $this->keywords);
        $this->assign('id', $this->cat_id);
        $artciles_list = model('ArticleBase')->get_cat_articles($this->cat_id, $this->page, $this->size, $this->keywords);
        $count = model('ArticleBase')->get_article_count($this->cat_id, $this->keywords);
        $this->pageLimit(url('art_list', array('id' => $this->cat_id)), $this->size);
        $this->assign('pager', $this->pageShow($count));
        $this->assign('artciles_list', $artciles_list);
        $this->display('article_list.dwt');
    }

    /**
     * 文章列表异步加载
     */
    public function asynclist() {
        $this->parameter();
        $asyn_last = intval(I('post.last')) + 1;
        $this->size = I('post.amount');
        $this->page = ($asyn_last > 0) ? ceil($asyn_last / $this->size) : 1;
        $list = model('ArticleBase')->get_cat_articles($this->cat_id, $this->page, $this->size, $this->keywords);
        $id = ($this->page - 1) * $this->size + 1;
        foreach ($list as $key => $value) {
            $this->assign('id', $id);
            $this->assign('article', $value);
            $sayList [] = array(
                'single_item' => SWTouch::view()->fetch('library/asynclist_info.lbi')
            );
            $id++;
        }
        die(json_encode($sayList));
        exit();
    }

    /* ------------------------------------------------------ */

    //-- 文章详情
    /* ------------------------------------------------------ */
    public function info() {
        /* 文章详情 */
        $article_id = intval(I('get.aid'));
        $article = model('Article')->get_article_info($article_id);
        $this->assign('article', $article);
        $this->display('article_info.dwt');
    }

    /**
     * 处理参数便于搜索商品信息
     */
    private function parameter() {
        // 如果分类ID为0，则返回总分类页
        $page_size = C('article_page_size');
        $this->size = intval($page_size) > 0 ? intval($page_size) : 10;
        $this->page = I('request.page') ? intval(I('request.page')) : 1;
        $this->cat_id = intval(I('request.id'));
        $this->keywords = I('request.keywords');
        $this->assign('show_asynclist', C('show_asynclist'));
    }

}