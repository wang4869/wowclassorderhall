<?php
include_once('includes/jssdk.php');
define('WECHAT_APPID','wx149df84e0ba47466');//appid
define('WECHAT_SECRET','933be363be079c7e9a20bc7fe1cb699e');//appsecret
$wechat_share = array(
	'title' => '魔兽世界职业大厅',//分享标题
	'desc' => '全景观摩魔兽世界职业大厅，更能使用VR身临其境',//分享描述
	'link' => 'http://blog.himyweb.com/event/classorderhall/vtour/index.php',//分享地址
	'imgUrl' => 'http://blog.himyweb.com/event/classorderhall/vtour/assets/shareImg.jpg'//分享图片
	);
$jssdk = new Jssdk(WECHAT_APPID, WECHAT_SECRET);
$sign_package = $jssdk->getSignPackage();?>
<!DOCTYPE html>
<html>
<head>
    <title>WOW classorderhall</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<style>
		@-ms-viewport { width:device-width; }
		@media only screen and (min-device-width:800px) { html { overflow:hidden; } }
		html { height:100%; }
		body { height:100%; overflow:hidden; margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; background-color:#000000; }
	</style>
    <script>
    function isWeiXin() {
		var ua = window.navigator.userAgent.toLowerCase();
		if (ua.match(/MicroMessenger/i) == 'micromessenger') {
			return true;
		} else {
			return false;
		}
	}
	if(isWeiXin()){}else{
		window.location.href="http://wow.blizzard.cn/";
		}
    </script>
    
<script src="http://blog.himyweb.com/event/classorderhall/vtour/assets/jquery-1.9.1.min.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
wx.config({
	debug: false,
	appId: '<?php echo $sign_package["appId"];?>',
	timestamp: <?php echo $sign_package["timestamp"];?>,
	nonceStr: '<?php echo $sign_package["nonceStr"];?>',
	signature: '<?php echo $sign_package["signature"];?>',
	jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
		]
	});
   var server_path = window.location.href.replace("#","");
   wx.ready(function () {
	wx.onMenuShareAppMessage({
	  title: '<?php echo $wechat_share["title"]?>',
	  desc: '<?php echo $wechat_share["desc"]?>',
	  link: '<?php echo $wechat_share["link"]?>',
	  imgUrl: '<?php echo $wechat_share["imgUrl"]?>',
	  trigger: function (res) {
		// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
		//alert('用户点击发送给朋友');
	  },
	  success: function (res) {
		//alert('已分享');
	  },
	  cancel: function (res) {
		//alert('已取消');
	  },
	  fail: function (res) {
		//alert(JSON.stringify(res));
	  }
	});
	wx.onMenuShareTimeline({
	  title: '<?php echo $wechat_share["desc"]?>',
	  link: '<?php echo $wechat_share["link"]?>',
	  imgUrl: '<?php echo $wechat_share["imgUrl"]?>',
	  trigger: function (res) {
		// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
		//alert('用户点击发送给朋友');
	  },
	  success: function (res) {
		//alert('已分享');
	  },
	  cancel: function (res) {
		//alert('已取消');
	  },
	  fail: function (res) {
		//alert(JSON.stringify(res));
	  }
	});
  });
</script>
</head>
<body style="padding:20px; font-size:18px; line-height:36px;">
Google Cardboard 2<br>
<a style="color:#FFF;" href="https://www.amazon.com/Blisstime-Cardboard-Glasses-Headband-3--6inch/dp/B010DFBSWK/ref=sr_1_1?ie=UTF8&qid=1473405721&sr=8-1&keywords=cardboard+2">美亚 google授权 Blisstime</a><br>
<a style="color:#FFF;" href="https://www.amazon.com/Cardboard-Virtual-Reality-Compatible-Smartphone/dp/B01A4DPWEQ/ref=sr_1_4?ie=UTF8&qid=1473405721&sr=8-4&keywords=cardboard+2">美亚 google授权 POTOK</a><br>
<a style="color:#FFF;" href="https://www.amazon.com/Skque-Cardboard-Carboard-Second-generation-Compatible/dp/B01CNMLBK0/ref=sr_1_3?ie=UTF8&qid=1473405721&sr=8-3&keywords=cardboard+2">美亚 google授权 Skque</a><br>
<a style="color:#FFF;" href="https://www.amazon.co.jp/Linkcool-Google-Cardboard%EF%BC%88%E3%82%B0%E3%83%BC%E3%82%B0%E3%83%AB%E3%83%BB%E3%82%AB%E3%83%BC%E3%83%89%E3%83%9C%E3%83%BC%E3%83%89%EF%BC%893D%E3%83%A1%E3%82%AC%E3%83%8D-Vr%E3%83%A1%E3%82%AC%E3%83%8D-NFC%E3%82%BF%E3%82%B0%E3%81%A8%E3%83%99%E3%83%AB%E3%83%88%E4%BB%98%E3%81%8D/dp/B0196BLLLK/ref=sr_1_1?ie=UTF8&qid=1473405879&sr=8-1&keywords=cardboard">日亚 google授权 Linkcool</a><br>
<a style="color:#FFF;" href="javascript:void(0);" onClick="goTaobao();">某宝 天朝授权</a>

<script>
function isWeiXin() {
		var ua = window.navigator.userAgent.toLowerCase();
		if (ua.match(/MicroMessenger/i) == 'micromessenger') {
			return true;
		} else {
			return false;
		}
	}
function goTaobao(){
	if(isWeiXin()){
		alert('请用浏览器打开网页后点击');
		return false;
		}
		else{
			window.location.href="https://item.taobao.com/item.htm?id=532020603651&ali_refid=a3_430582_1006:1123919202:N:vr%E7%BA%B8%E7%9B%92%E7%9C%BC%E9%95%9C:eb836dbd32b6cab61e5c6fc3ceb39867&ali_trackid=1_eb836dbd32b6cab61e5c6fc3ceb39867&spm=a230r.1.14.1.1iv5le#detail";
			}
	}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83915842-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>