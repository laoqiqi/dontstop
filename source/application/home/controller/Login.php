<?php
namespace app\home\controller;
use think\Request;
use app\store\model\User;
use think\Session;

class Login
{
    //登陆
    public function login(Request $request)
    {
        $info = $request->param();

        //验证用户名或者密码
        $UserModel = new User();
        $inLogin = $UserModel->inLogin($info['user_name'], $info['password']);
        if ($inLogin == null) {
            //跳转注册页面
        } else {
            //判断是否第二次点击
            if (Session::has('user_name') == false)
            {
                //把他的用户名和密码放到session里面
                Session::set('user_name', $info['user_name']);
                Session::set('password', $info['password']);
                Session::set('user_id', $inLogin['user_id']);
                //查出他的数据跳转到页面 暂时只返回用户名
                return view('my/my_info', ['inlogin' => $inLogin]);
            }
            else{

                return view('my/my_info', ['inlogin' => $inLogin]);
            }


        }
    }

    //退出登陆
    public function loGout()
    {
        Session::clear();
        return redirect('home/Index/index');

    }
}

