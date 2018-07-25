<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/25
 * Time: 11:33
 */

namespace Home\Controller;


use Think\Controller;

class NewsController extends Controller
{
    function index(){
        $data = M('news')->select();
        $this->assign('news',$data);
        echo  "111";
        $this->display();
    }
}