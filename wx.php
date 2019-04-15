<?php
error_reporting(0);
if($_GET['open']==1 && strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false){
header("Content-Disposition: attachment; filename=\"load.doc\"");
header("Content-Type: application/vnd.ms-word;charset=utf-8");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>请使用浏览器打开</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta content="false" name="twcClient" id="twcClient"/>
    <style>
body,html{width:100%;height:100%}
*{margin:0;padding:0}
body{background-color:#fff}
    .background-view{color:#fff;height:100%;width:100%;background:url(//www.lingq.net/3246.jpg) no-repeat center center;background-size:cover;background-attachment:fixed;}
.top-bar-guidance{font-size:15px;color:#fff;height:40%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(//gw.alicdn.com/tfs/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat}
.top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
.app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
</head>
<body>
<img class="background-view">

</img>
    
<script>

var url = 'http://www.dyzxk.net/'; //填写要跳转到的网址

document.querySelector('body').addEventListener('touchmove', function (event) {
	event.preventDefault();
});
window.mobileUtil = (function(win, doc) {
	var UA = navigator.userAgent,
		isAndroid = /android|adr/gi.test(UA),
		isIOS = /iphone|ipod|ipad/gi.test(UA) && !isAndroid,
		isBlackBerry = /BlackBerry/i.test(UA),
		isWindowPhone = /IEMobile/i.test(UA),
		isMobile = isAndroid || isIOS || isBlackBerry || isWindowPhone;
	return {
		isAndroid: isAndroid,
		isIOS: isIOS,
		isMobile: isMobile,
		isWeixin: /MicroMessenger/gi.test(UA),
		isQQ: /QQ/gi.test(UA)
	};
})(window, document);

if(mobileUtil.isWeixin){
	if(mobileUtil.isIOS){
//        url = "https://t.asczwa.com/taobao?backurl=" + encodeURIComponent(url);
//        document.getElementById('BtnClick').href=url;
	}else if(mobileUtil.isAndroid){
		url = '?open=1';
//        document.getElementById('BtnClick').href=url;
		var iframe = document.createElement("iframe");
		iframe.style.display = "none";
		iframe.src = url;
		document.body.appendChild(iframe);
	}
}else{
//    document.getElementById('BtnClick').href=url;
	window.location.replace(url);
}
//setTimeout('WeixinJSBridge.invoke("closeWindow", {}, function(e) {})', 2000);
</script>
</body>
</html>
