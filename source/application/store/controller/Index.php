<?php
namespace app\store\controller;

use app\store\model\User;
use think\Request;
use app\zhuce\RegistrationTree;
/**
 * 后台首页
 * Class Index
 * @package app\store\controller
 */
class Index extends Controller
{


    public function index()
    {
//        $object = new \app\zhuce\TestTree();
//
//        //注册一个树位置
//        RegistrationTree::set('qiwen','data');
//        //获取值绑定到树上的果子
//        $data = RegistrationTree::get('qiwen')->getTreeContent();
//
//        $info = RegistrationTree::get('qiwen');
//
//        dump($info);die;
        $data = new User;
        return $this->fetch('index');
    }

    public function data()
    {
        $data = $this->obj->pay();
    }

    public function demolist()
    {
        return $this->fetch('demo-list');
    }


}
