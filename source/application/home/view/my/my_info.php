	<body>
	<div id="my">
		<div class="my_info">
			<img src="assets/home/images/my/bj.png" />
			<div class="my_mian">
				<p class="my_pic">
					<img src="assets/home/images/my/my_03.png" />
				</p>
				<span class="my_number">{{$inlogin['user_name']}}</span>
				<span class="my_txt">已消费：XXXX积分 <br>满1000领100优惠卷</span>
			</div>
		</div>
		<div class="my_content clearfix">
			<ul>
				<a href="../../../../../../html/My_order.html">
					<li class="my_border">
						<span class="my_pic"><img src="assets/home/images/my/main_04.png" /></span>
						<span class="my_order">我的订单</span>
						<span class="my_right"><img src="assets/home/images/my/right.png"/></span>
					</li>
				</a>
				<a href="../../../../../../html/Receipt_info.html">
					<li class="my_border topline">
						<span class="my_pic"><img src="assets/home/images/my/main_11.png" /></span>
						<span class="my_order">收货地址</span>
						<span class="my_right"><img src="assets/home/images/my/right.png"/></span>
					</li>
				</a>
				<a href="../../../../../../html/Account_recharge.html">
					<li class="my_border topline">
						<span class="my_pic"><img src="assets/home/images/my/main_13.png" /></span>
						<span class="my_order">账户充值</span>
						<span class="my_right"><img src="assets/home/images/my/right.png"/></span>
					</li>
				</a>
				<a href="../../../../../../html/Balance_transfer.html">
					<li class="topline">
						<span class="my_pic"><img src=".assets/home/images/my/main_15.png" /></span>
						<span class="my_order">余额转移</span>
						<span class="my_right"><img src="assets/home/images/my/right.png"/></span>
					</li>
				</a>
			</ul>
		</div>
		<div id="close">
			<a href="<?=url('Login/loGout')?>" class="close_con">退出登录</a>
		</div>
		<div class="my_content_box"></div>
	</div>
	</body>
</html>
