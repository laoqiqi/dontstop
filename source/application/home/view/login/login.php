	<body>
	<div id="my" class="login_content" style="">
		<div class="my_info">
			<img src="assets/home/images/login/bj_01.png" />
			<div class="my_mian login_pic">
			</div>
		</div>
		<div class="login">
			<form action="<?=url('Login/login')?>" method="post">
				<p class="login_p"><span class="logo_user"><img src="assets/home/images/login/login_04.png"/></span><input type="text" name="user_name" placeholder="请输入用户名" autocomplete="off"/></p>
				<p class="login_p"><span class="logo_pwd"><img src="assets/home/images/login/login_07.png"/></span><input type="password" placeholder="请输入密码" name="password"/></p>
				<p class="login_sub"><input type="submit" id="sub" value="登录"/></p>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="assets/home/js/rem.js" ></script>
	</body>
</html>
