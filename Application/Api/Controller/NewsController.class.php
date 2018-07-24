<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/24
 * Time: 09:06
 */

namespace Api\Controller;

use Think\Controller\RestController;

class NewsController extends RestController
{
    /**
     * 分页本找新闻
     * @param $page 页码
     */
    function index($page)
    {
        if (empty($page)) {
            $page = 0;
        }
        jsondata(M('news')->limit($page * 10, 10)->select());
    }

    /**
     * 依据id获取新闻详情
     * @param $id 新闻id
     */
    function getNewById($id)
    {
        jsondata(M('news')->where("id='" . $id . "'"))->find();
    }
}