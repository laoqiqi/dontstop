<?php

namespace app\store\model;

use app\common\model\User as UserModel;

/**
 * 用户模型
 * Class User
 * @package app\store\model
 */
class User extends UserModel
{
    //前台调用验证用户名密码
   public function inLogin($user_name,$password)
   {
       //利用数组查询
       return User::get(['user_name' =>$user_name,'password'=>$password]);

   }

   //前台带数据切换我的
    public function userSwitch($user_id)
    {
        return $this->where('user_id',$user_id)->find();

    }

    //注册
    public function register($username,$password)
    {
        //验证当前用户名是否存在
        $status = $this->where('user_name',$username)->find();

        if (!$status=='')
        {
          return Null;
        }
         return  $this->save([
            'user_name'  => $username,
            'password' =>  $password,
        ]);


    }

    //获取用户信息
    public function user_info()
    {

    }


}
