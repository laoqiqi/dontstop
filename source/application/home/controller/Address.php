<?php
namespace app\home\controller;
use app\api\model\UserAddress;
use think\Request;
use think\Session;
use app\store\model\User;
use app\common\model\Region;
class Address{


    //获取这个人所有的收货地址
    public function index()
    {
        //拿到这个人的user_id
        $user_id =  Session::get('user_id');
        $userModel = new UserAddress();
        $info = $userModel->getList($user_id);
//        return $info;
        return view('address/address',['info'=>$info]);
    }


    //新增收货地址跳转
    public function addUrl()
    {
        //获取地区三级分类  后期优化成需要选的
        $data = Region::getCacheTree();
        return view('address/newaddress',['info'=>$data]);
    }

  //新增收货地址
    public function add(Request $request)
    {
        //接受到收货地址参数
        $data = $request->param();
        $userAddressModel = new UserAddress();
        $user =  Session::get('user_id');
        //完成新增
        return  $info = $userAddressModel->add($user,$data);

    }

    //编辑收货地址跳转
    public function urledit($address_id)
    {
        $userAddressModel = new UserAddress();
        $user_id =  Session::get('user_id');
        //获取详细信息
        $info = $userAddressModel::detail($user_id,$address_id);

        return view('address/edit',['info'=>$info]);
    }

   public function edit(Request $request)
   {
       //接受到收货地址参数
       $data = $request->param();
       $userAddressModel = new UserAddress();
       $info = $userAddressModel->edit($data);
       return $info;
   }


}