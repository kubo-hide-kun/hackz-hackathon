<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>ログイン・登録画面</title>
	<!-- css -->
<link rel="stylesheet" href="flex.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
	<link rel="stylesheet" href="css/style.css">
	    <link rel="stylesheet" href="css/sim.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--リンク・フレームワーク -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"  crossorigin="anonymous">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" type="text/css">
    	<link rel="stylesheet" href="css/style.css" type="text/css">
    	
    	  <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
 			 <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
			<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
    	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 

</head>
	<!--ページ更新 -->
	<script language="javascript" type="text/javascript">
		function OnButtonClick() {
		setTimeout("syori()", 2000);
		}
		function syori(){
		window.location.reload();
		}
	</script>



<!--ヘッダーメニュー -->
	<nav class="navbar navbar-expand-md bg-primary navbar-dark">
		<a class="navbar-brand" href="#">
		<i class="fa d-inline fa-lg fa-cloud"></i><b class="b">Artist Module</b>
		</a>
		<br>
		<!--ジャンピングカット-->
		<a id="showSigninForm" class="btn navbar-btn ml-2 text-white btn-secondary">
		<i class="fa d-inline fa-lg fa-user-circle-o"></i>サインイン</a>
		<a id="signout" class="btn navbar-btn ml-2 text-white btn-secondary">
		<i class="fa d-inline fa-lg fa-user-circle-o"></i>サインアウト</a>
	</nav>
    

	<!--ジャンピングアップ-->
	<div class="py-1 signup">
		<!--登録フォーム classが問題-->
		<div class="wrapper"><div class="container">
		<form class="form">
		<!--IDフォーム-->
		<input id="email" type="email" placeholder="Enter email">
		<!--PASSフォーム-->
		<input id="password" type="password"  placeholder="Password">
		<!--登録ボタン-->
		<button id="regist" type="button" onclick="OnButtonClick();">登録</button>
		</form></div></div>
	</div>


	<!--ジャンピングイン-->
	<div class="py-1 signin">
		<!--サインインフォーム classが問題-->
		<div class="wrapper"><div class="container">
		<form class="form">
		<!--IDフォーム-->
		<input id="signinEmail" type="email" placeholder="ID">
		<!--PASSフォーム-->
		<input id="signinPassword"  type="password" placeholder="Password">
		<!--ログインボタン-->
		<div class="12"><button type="button" id="signin" >Login</button></div>
		<!--登録ボタン-->
		<br><button id="showSignupForm" type="button">登録</button>
		</form></div></div>
	</div>


	<!--メインページ-->

	<div class="py-1" id="main">
		<div class="col-md-3" id="rooms"> </div>
		
		
		
		
		
  	<!--ここからページ-->
<div class="flex" id="flex">
	<div class="flex-item" id="flex-item">
		<div class="flex-img">
		<img src="https://iwiz-chie.c.yimg.jp/im_siggk4ltrdWFGMuNCIvFjoUIlw---x320-y320-exp5m-n1/d/iwiz-chie/que-11153520256">
		<div class="flex-600">
		<li class= "flex-list">ユーザー名</li>
		<li class= "flex-list">出身</li>
		<li class= "flex-list">趣味</li>
	</div>
	</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://s.pximg.net/sensei/images/landing/girl.png?20160815">
		 <div class="flex-600">
			<li class="flex-list">ユーザー名</li>
			<li class="flex-list">出身</li>
			<li class= "flex-list">趣味</li>
		</div>
		</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://s.pximg.net/special/devpixiv/wp-content/uploads/2015/12/syouin.jpg">
		<div class="flex-600">
			<li class="flex-list">ユーザー名</li>
			<li class="flex-list">出身</li>
			<li class="flex-list">趣味</li>
	</div>
</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://pbs.twimg.com/media/BvrMmisCEAAzc8_.png">
		<div class="flex-600">

		<li class="flex-list">ユーザー名</li>
		<li class="flex-list">出身</li>
		<li>趣味</li>
	</div>
</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://pbs.twimg.com/media/DcGve5fUQAI8KA9.jpg">
		<div class="flex-600">
		<li class="flex-list">ユーザー名</li>
		<li class="flex-list">出身</li>
		<li class="flex-list">趣味</li>
	</div>
</div>
</div>
</div>

<!-- first flexbox end -->

<!-- second flexbox start -->

<div class="flex" id="flex">
	<div class="flex-item" id="flex-item">
		<div class="flex-img">
		<img src="https://iwiz-chie.c.yimg.jp/im_siggk4ltrdWFGMuNCIvFjoUIlw---x320-y320-exp5m-n1/d/iwiz-chie/que-11153520256">
		<div class="flex-600">
		<li class= "flex-list">ユーザー名</li>
		<li class= "flex-list">出身</li>
		<li class= "flex-list">趣味</li>
	</div>
	</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://s.pximg.net/sensei/images/landing/girl.png?20160815">
		 <div class="flex-600">
			<li class="flex-list">ユーザー名</li>
			<li class="flex-list">出身</li>
			<li class= "flex-list">趣味</li>
		</div>
		</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://s.pximg.net/special/devpixiv/wp-content/uploads/2015/12/syouin.jpg">
		<div class="flex-600">
			<li class="flex-list">ユーザー名</li>
			<li class="flex-list">出身</li>
			<li class="flex-list">趣味</li>
	</div>
</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://pbs.twimg.com/media/BvrMmisCEAAzc8_.png">
		<div class="flex-600">

		<li class="flex-list">ユーザー名</li>
		<li class="flex-list">出身</li>
		<li>趣味</li>
	</div>
</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://pbs.twimg.com/media/DcGve5fUQAI8KA9.jpg">
		<div class="flex-600">
		<li class="flex-list">ユーザー名</li>
		<li class="flex-list">出身</li>
		<li class="flex-list">趣味</li>
	</div>
</div>
</div>
</div>
<!-- second flexbox final -->

<!-- Third flexbox -->
<div class="flex" id="flex">
	<div class="flex-item" id="flex-item">
		<div class="flex-img">
		<img src="https://iwiz-chie.c.yimg.jp/im_siggk4ltrdWFGMuNCIvFjoUIlw---x320-y320-exp5m-n1/d/iwiz-chie/que-11153520256">
		<div class="flex-600">
		<li class= "flex-list">ユーザー名</li>
		<li class= "flex-list">出身</li>
		<li class= "flex-list">趣味</li>
	</div>
	</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://s.pximg.net/sensei/images/landing/girl.png?20160815">
		 <div class="flex-600">
			<li class="flex-list">ユーザー名</li>
			<li class="flex-list">出身</li>
			<li class= "flex-list">趣味</li>
		</div>
		</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://s.pximg.net/special/devpixiv/wp-content/uploads/2015/12/syouin.jpg">
		<div class="flex-600">
			<li class="flex-list">ユーザー名</li>
			<li class="flex-list">出身</li>
			<li class="flex-list">趣味</li>
	</div>
</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://pbs.twimg.com/media/BvrMmisCEAAzc8_.png">
		<div class="flex-600">

		<li class="flex-list">ユーザー名</li>
		<li class="flex-list">出身</li>
		<li>趣味</li>
	</div>
</div>
	</div>
	<div class="flex-item">
		<div class="flex-img">
		<img src="https://pbs.twimg.com/media/DcGve5fUQAI8KA9.jpg">
		<div class="flex-600">
		<li class="flex-list">ユーザー名</li>
		<li class="flex-list">出身</li>
		<li class="flex-list">趣味</li>
	</div>
</div>
</div>
</div>






<!-- speed daial -->

 <ons-speed-dial position="bottom right" direction="up" class="speed">
   <ons-fab>
     <ons-icon icon="fa-ellipsis-h"></ons-icon>
   </ons-fab>
   <ons-speed-dial-item>
	 <a href="evaluate.html">
		 <ons-icon icon="fa-check-square"></ons-icon>
	  </a>
   </ons-speed-dial-item>
   <ons-speed-dial-item>
	 <a href="imgList/imageList.html">
		 <ons-icon icon="fa-user"></ons-icon>
	 </a>
   </ons-speed-dial-item>
 </ons-speed-dial>


    </div>
 
<div class="col-md-9" id=""></div>
	</div>







<!--ブラックボックス-->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>

<!-- Add additional services you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-firestore.js"></script>
<script src="js/main.js"></script>
</body></html>
