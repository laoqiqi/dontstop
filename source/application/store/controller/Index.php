<?php
namespace app\store\controller;

use app\store\model\User;
/**
 * 后台首页
 * Class Index
 * @package app\store\controller
 */
class Index extends Controller
{
    public function index()
    {
        $data = new User;
        return $this->fetch('index');
    }

    public function demolist()
    {
        return $this->fetch('demo-list');
    }


}
