<?php
namespace app\home\controller;
use app\store\model\Goods as GoodsModel;
use think\Session;
use app\api\model\UserAddress;
use app\store\model\Order as OrderModel;
class Order
{
    //携带数据跳转到订单
    public function index($goods_id)
    {
        $data = Session::has('user_name');

        if ($data == false) {
            return view('login/login');
        }

        $goodsModel = new GoodsModel;
        $goodsInfo = $goodsModel->goodsPage($goods_id);

        //查看这个人收货地址
        $user_id = Session::get('user_id');


        $userModel = new UserAddress();
        $info = $userModel->getList($user_id);

        //展示最后一条收货地址
        $addressinfo = end($info);
        $data = end($addressinfo);
        return view('order/order',['goodsinfo'=>$goodsInfo,'data'=>$data]);
    }

    //新增订单
    public function add($goods_id,$address_id,$number,$int)
    {

        //根据goods_id 查询出商品金额
        $GoodsModel = new GoodsModel();
        $total_price = $GoodsModel->goodsPage($goods_id);
        $user_id = Session::get('user_id');

        //搞定全部信息
        $order = [
            'total_price'=>$total_price['goods_price'],
            'pay_status'=>1,
            'pay_time'=>time(),
            'express_price'=>10,
            'express_company'=>'中通',
            'user_id'        =>$user_id,
            'int'            =>$int,
            'goods_id'       =>$goods_id,
            'number'   =>$number,
            'address_id'=>$address_id,
        ];

        $orderModel = new OrderModel();
        $status = $orderModel->addOrdel($order);
        return $status;
    }

    public function orderon()
    {
        $user_id = Session::get('user_id');
        $orderModel = new OrderModel();
        $orderon = $orderModel->userorderon($user_id);
        return $orderon;
    }


}