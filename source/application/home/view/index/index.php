
<body style="-webkit-text-size-adjust: 100%!important;">
		<div id="wrapper">
			<!--头部搜索框 start-->
			<div class="wf-search" id="search">
				<header>
					<div class="jd-logo">
						<img src="assets/home/images/logo/xrw-95.png" />
					</div>
					<div class="search">
						<form>	
							<span class="sprite-icon"></span>
							<input type="search" placeholder="新店开业前五十位立减50">
						</form>
					</div>
					<div class="login">
						<a href="Receipt_address.html" id="loginmain">
							北京
							<font class="login_icon">
								<img src="assets/home/images/logo/xrw-95.png" />
							</font>
						</a>
					</div>
				</header>
			</div>
			<!--头部搜索框 end-->
			<!--banner start-->
			<div id="slider">
				<div class="swiper-container clearfix">
					<ul class="swiper-wrapper">
						<li class="swiper-slide"><a href="Orchard_fragrance.html"><img  style="height:200px;" src="assets/home/images/logo/banner1.png"/></a></li>
						<li class="swiper-slide"><a href="Birthday_zone.html"><img  style="height:200px;" src="assets/home/images/logo/banner2.png"/></a></li>
						<li class="swiper-slide"><a href="Integral_mall.html"><img style="height:200px;" src="assets/home/images/logo/banner3.png"/></a></li>
					</ul>
				</div>
				<!--
				<div class="slider-btn clearfix">
					<span class="active"></span>
					<span></span>
					<span></span>
				</div>
				-->
				<div class="swiper-pagination"></div>
			</div>
			<!--banner end-->
			<!--nav start-->
			<div id="nav">
				<nav class="clearfix">
					<a href="Integral_mall.html">
						<img src="assets/home/images/1.png" />
						<span>鞋子列表</span>
					</a>
					<a href="Media.html">
						<img src="assets/home/images/2.png" />
						<span>卫衣天地</span>
					</a>
					<a href="Birthday_zone.html">
						<img src="assets/home/images/3.png" />
						<span>香水专区</span>
					</a>
					<a href="Orchard_fragrance.html">
						<img src="assets/home/images/4.png" />
						<span>板鞋专区</span>
					</a>
					<a href="Inner_page.html">
						<img src="assets/home/images/5.png" />
						<span>运动鞋区</span>
					</a>
					<a href="Seasonal_selection.html">
						<img src="assets/home/images/6.png" />
						<span>优惠领取</span>
					</a>
					<a href="Inner_page.html">
						<img src="assets/home/images/7.png" />
						<span>客服QQ</span>
					</a>
					<a href="Inner_page.html">
						<img src="assets/home/images/8.png" />
						<span>客服微信</span>
					</a>
					<div class="edmond clearfix">
				      现在进QQ群或微信群立减50哦
					<span class="sprite-icon">
						<img src="assets/home/images/logo/tutou.jpg" style="margin-top:-3px;width:76px;height:20px;padding-left:15px;margin-left:-14px;"></span>
					</div>
				</nav>
			</div>
				<!--生日专区 end-->
				<main>
					<div class="floor clearfix">
						<div class="floor-container">
							<div class="title-wrap">
								<span class="sprite-icon secskill-icon fl"></span>
	            				<h2 class="secskill-title fl">最新上架</h2>
	            				<a href="<?=url('Index/category')?>">">
		            				<div class="secskill-more fr">
										<span>查看更多</span>
										<span class="sprite-icon"></span>
									</div>
	            				</a>
							</div>

							<div class="secskill-content">
								<ul class="swiper-wrapper">
									{{foreach $goodsInfo as $first}}
									<li class="swiper-slide">
										<a href="<?=url('index/goodsPage',['goods_id'=>$first['goods_id']])?>" id="{{$first['goods_id']}}">{{$first['content']}}</a>
										<p class="secskill-main clearfix"><span class="secskill-title-con">{{$first['goods_name']}}</span>
											<span class="secskill-number">8.0</span>
										</p>
									</li>
									{{/foreach}}
								</ul>
							</div>

						</div>
					</div>
					<!--描述：nav adv -->
		            <div class="adv">
		            	<img src="assets/home/images/zuixin/zuixinxia.jpg" />
		            </div>
		            <!--描述：nav adv -->
		            <!--floor start-->
		            <div class="floor clearfix">
						<div class="floor-container">
							<div class="title-wrap">
								<span class="sprite-icon secskill-icon fl"></span>
	            				<h2 class="secskill-title fl">分类专区</h2>
	            				<a href="<?=url('Index/category')?>">">
		            				<div class="secskill-more fr">
										<span>查看更多</span>
										<span class="sprite-icon"></span>
									</div>
	            				</a>
							</div>

			           		<div class="floor-container morencon">
			         				<div class="left">
			         					<a href="<?=url('Index/category',['$category_id'=>$cateInfo[1]['category_id']])?>"><img src="{{$cateInfo[1]['file_url']}}/{{$cateInfo[1]['file_name']}}"  style="height:243px;"/></a>
			         				</div>
			         			<div class="right">
			         					<div class="top">
			         						<a href="<?=url('Index/category',['$category_id'=>$cateInfo[0]['category_id']])?>"><img src="{{$cateInfo[1]['file_url']}}/{{$cateInfo[0]['file_name']}}"></a>
			         					</div>
			         					<div class="bottom">
			         						<a href="<?=url('Index/category',['$category_id'=>$cateInfo[3]['category_id']])?>" class="line"><img src="{{$cateInfo[1]['file_url']}}/{{$cateInfo[3]['file_name']}}" style="height: 122px;"/></a>
			         						<a href="<?=url('Index/category',['$category_id'=>$cateInfo[4]['category_id']])?>" ><img src="{{$cateInfo[1]['file_url']}}/{{$cateInfo[4]['file_name']}}"style="height: 122px;"/></a>
			         					</div>
			         			</div>
			            	</div>
						</div>
					</div>
					<!--floor start-->
					<!--floor_2 start-->
		            <div class="floor clearfix">
						<div class="floor-container">
							<div class="title-wrap">
								<span class="sprite-icon secskill-icon fl"></span>
	            				<h2 class="secskill-title fl">香水口红</h2>
	            				<a href="<?=url('Index/category',['$category_id'=>$cateInfo[5]['category_id']])?>">
		            				<div class="secskill-more fr">
										<span>查看更多</span>
										<span class="sprite-icon"></span>
									</div>
	            				</a>
							</div>
			           		<div class="floor-container">
			         				<div class="left">
			         					<a href="<?=url('Index/category',['$category_id'=>$cateInfo[5]['category_id']])?>" class="line"><img src="{{$cateInfo[1]['file_url']}}/{{$cateInfo[5]['file_name']}}" style="margin-left:1px;height:248px;"/></a>
			         				</div>
			         			<div class="right">
			         					<div class="top">
			         						<a href="<?=url('Index/category',['$category_id'=>$cateInfo[5]['category_id']])?>"><img src="{{$cateInfo[1]['file_url']}}/{{$cateInfo[6]['file_name']}}" style="height:128px;"/></a>
			         					</div>
			         					<div class="top topline">
			         						<a href="<?=url('Index/category',['$category_id'=>$cateInfo[5]['category_id']])?>"><img src="{{$cateInfo[1]['file_url']}}/{{$cateInfo[7]['file_name']}}" style="height:120px;"/></a>
			         					</div>
			         			</div>
			            	</div>
						</div>
					</div>
				<!--floor_2 start-->
				<!--floor_3 start-->
		            <div class="floor clearfix">
						<div class="floor-container">
							<div class="title-wrap">
								<span class="sprite-icon secskill-icon fl"></span>
	            				<h2 class="secskill-title fl">秃头介绍</h2>
	            				<a href="Integral_mall.html">
		            				<div class="secskill-more fr">
										<span>查看更多</span>
										<span class="sprite-icon"></span>
									</div>
	            				</a>
							</div>
			           		<div class="floor-container center clearfix">
			         			<div class="floor_left">
			         				<a href="Integral_mall.html" class="line"><img src="assets/home/images/integral/jf-13.png"/></a>
			         				<a href="Integral_mall.html" class="topline"><img src="assets/home/images/integral/jf-14.png"/></a>
			         			</div>
			         			<div class="foor_right">
			         				<a href="Integral_mall.html"><img src="assets/home/images/integral/jf-15.png"/></a>
			         				<a href="Integral_mall.html" class="addsty topline"><img src="assets/home/images/integral/jf.png"/></a>
			         			</div>
			            	</div>
						</div>
					</div>
				<!--floor_3 start-->
				</main>

	</body>
<script>

	var obj = document.getElementById("3");
	obj.innerHTML = obj.innerText;//这样重新设置html代码为解析后的格

	var obj = document.getElementById("4");
	obj.innerHTML = obj.innerText;//这样重新设置html代码为解析后的格

	var obj = document.getElementById("5");
	obj.innerHTML = obj.innerText;//这样重新设置html代码为解析后的格
</script>
