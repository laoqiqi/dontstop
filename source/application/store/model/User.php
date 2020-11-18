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



}
