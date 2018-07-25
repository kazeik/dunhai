<?php
/**
 * Created by PhpStorm.
 * User: chenkai
 * Date: 2018/7/23
 * Time: 20:27
 */

namespace Home\Controller;


use Think\Controller;

class ActorController extends Controller{

    function index(){
        $actortyps = M("actortype")->select();
        $sqlstr = "SELECT dh_actor.id, dh_actor.actorname,dh_actor.actorinfo, dh_actor.country, dh_actor.avatar, dh_actortype.type FROM dh_actor, dh_actortype
        where dh_actor.id = dh_actortype.id limit 0,10";
        $actors = M('actor')->query($sqlstr);
        $dataArr = array(
            'actors' => $actors,
            'actortypes' => $actortyps
        );
        $this->assign('data', $dataArr)->display();
    }
}