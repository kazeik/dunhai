<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/24
 * Time: 08:50
 */

namespace Api\Controller;


use Think\Controller\RestController;

class ActorController extends RestController
{
    /**
     * 获取所有分类
     */
    function getActorTypes()
    {
        jsondata(M('actortype')->select());
    }

    /**
     * 获取艺人详情
     * @param $actorid 艺人id
     */
    function getActorInfo($actorid)
    {
        $info = M('actor')->where("id='" . $actorid . "'")->find();
        $imgData = M('img')->where("id='" . $actorid . "'")->select();
        $videoData = M('video')->where("id='" . $actorid . "'")->select();
        $data = array(
            'info' => $info,
            'imgData' => $imgData,
            'video' => $videoData
        );
        jsondata($data);
    }

    /**
     * 获取所有艺人列表
     */
    function getActors(){
        jsondata(M('actor')->select());
    }

    /**
     * 根据艺人所属类型获取艺人
     * @param $typeId 艺人所属类型
     */
    function getActorByTypeId($typeId){
        jsondata(M('actor')->where("type='".$typeId."'")->select());
    }

    /**
     * 根据艺人名称模糊查询
     * @param $name 艺人名称
     */
    function getActorByName($name){
        $where['actorname'] = array('like','%'.$name.'%');
        jsondata(M('actor')->where($where)->find());
    }
}