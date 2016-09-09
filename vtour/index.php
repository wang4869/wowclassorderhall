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
<body>

<script src="tour.js"></script>

<div id="pano" style="width:100%;height:100%;">
	<noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
	<script>
		embedpano({swf:"tour.swf", xml:"tour.xml", target:"pano", html5:"auto", mobilescale:1.0, passQueryParameters:true});
	</script>
</div>

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