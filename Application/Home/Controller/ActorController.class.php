<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/23
 * Time: 20:27
 */

namespace Home\Controller;


use Think\Controller;

class ActorController extends Controller
{

    function index()
    {

        $page =I('page');
        $pagesize=I('pagesize');
        if(empty($pagesize)){
            $pagesize=9;
        }
        $sqlstr = "SELECT dh_actor.id, dh_actor.actorname,dh_actor.actorinfo, dh_actor.country, dh_actor.avatar, dh_actortype.type FROM dh_actor, dh_actortype
        where dh_actor.typeid = dh_actortype.id limit " .($page*$pagesize)."," . $pagesize;
        $actortyps = M("actortype")->select();
        $actorsdb =  M('actor');
        $actors = $actorsdb->query($sqlstr);
        $pagenum = $actorsdb->count();
        $pagenum = $pagenum/$pagesize;
        $numArr = array();
        for ($x=1; $x<=$pagenum; $x++) {
            array_push($numArr,$x);
        }
        $dataArr = array(
            'actors' => $actors,
            'actortypes' => $actortyps,
            'pagenum' => $numArr
        );
        $this->assign('data', $dataArr)->display();
    }
}