<?php
namespace app\home\controller;
use app\api\model\Setting;
use app\store\model\SuccessUpdate;
use app\store\model\User;
use app\store\model\Category;
use app\store\model\Goods as GoodsModel;
use think\Session;
use think\Url;



/**
 * 前台首页
 * Class Index
 * @package app\store\controller
 */
class Index
{
    public function index()
    {
        //最新上架
        $goodsModel = new GoodsModel;
        $goodsInfo = $goodsModel->goodsInfo();

        //查看全部分类
        $categoryModel = new Category();
        $cateInfo = $categoryModel->cateInfo();
        return view('index', ['goodsInfo' => $goodsInfo, 'cateInfo' => $cateInfo]);
    }

    //跳转到我的页面
    public function my()
    {
        //未登录跳转到登录框
        $data = Session::has('user_name');
        if ($data == false) {
            return view('Login/login');
        }
        //跳转到我的
        $userModel = new User();
        $inlogin = $userModel->userSwitch(Session::get('user_id'));
        return view('my/my_info', ['inlogin' => $inlogin]);

    }

    public function demolist()
    {
        return $this->fetch('demo-list');
    }

    //展示全部分类
    public function category($category_id = '')
    {

        $categoryModel = new Category();
        $catagoryInfo = $categoryModel->category($category_id);
        //查询出全部的分类
        $categoryModel = new Category();
        $cataInfo = $categoryModel->categoryInfo();
        return view('assorement/assorement', ['catagoryInfo' => $catagoryInfo, 'cateInfo' => $cataInfo]);
    }


    public function goodsPage($goods_id)
    {
        $goodsModel = new GoodsModel;
        $goodsInfo = $goodsModel->goodsPage($goods_id);
        return view('details/details',['goodsinfo'=>$goodsInfo]);
    }



    //支付
   public function zhiFun($price,$user_id)
   {

       //判断有没有登录  没有的话跳转到登录页面
       if (Session::has('user_name') == false){

           return view('login/login');
       }


       $price = 1;
       $user_id =  1;

       $codepay_id="594829";//这里改成码支付ID
       $codepay_key="zLxdMtMoxiIFYIk3NGOEtcoTdgsZxceH"; //这是您的通讯密钥

       $data = array(
           "id" => $codepay_id,//你的码支付ID
           "pay_id" =>$user_id, //唯一标识 可以是用户ID,用户名,session_id(),订单ID,ip 付款后返回
           "type" => 1,//1支付宝支付 3微信支付 2QQ钱包
           "price" => $price,//金额100元
           "param" => "",//自定义参数
           "notify_url"=>"",//通知地址
           "return_url"=>"http://www.dontstop.top/Index.php?s=/home/index/jumpUrl",//跳转地址
       ); //构造需要传递的参数

       ksort($data); //重新排序$data数组
       reset($data); //内部指针指向数组中的第一个元素

       $sign = ''; //初始化需要签名的字符为空
       $urls = ''; //初始化URL参数为空

       foreach ($data AS $key => $val) { //遍历需要传递的参数
           if ($val == ''||$key == 'sign') continue; //跳过这些不参数签名
           if ($sign != '') { //后面追加&拼接URL
               $sign .= "&";
               $urls .= "&";
           }
           $sign .= "$key=$val"; //拼接为url参数形式
           $urls .= "$key=" . urlencode($val); //拼接为url参数形式并URL编码参数值

       }
       $query = $urls . '&sign=' . md5($sign .$codepay_key); //创建订单所需的参数
       $url = "http://api5.xiuxiu888.com/creat_order/?{$query}"; //支付页面
       header("Location:{$url}"); //跳转到支付页面
   }

    //支付成功跳转地址
    public function jumpUrl()
    {
        $successModel = new SuccessUpdate();
        $data = $successModel->index();

        return view('success/success_order',['data'=>$data]);

    }

}
