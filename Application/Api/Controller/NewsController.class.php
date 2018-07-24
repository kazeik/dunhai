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
    function index()
    {
        jsondata(M('news')->select());
    }
}