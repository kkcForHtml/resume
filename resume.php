<?php
error_reporting(E_ALL||~E_NOTICE);
header('Content-type:text/html;charset=utf-8');
require_once "jssdk.php";
$jssdk = new JSSDK("wx9944c4c3e1bb1877", "e78e723440476abbaa724cbfedb131f9");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>个人简历</title>
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="css/iconfont.css"/>
  <link rel="stylesheet" type="text/css" href="css/resume.css">
  <!--<script type="text/javascript" src="js/swiper-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/swiper.animate1.0.2.min.js"></script>
  <script src="js/zepto.min.js" type="text/javascript" charset="utf-8"></script>-->
</head>
<body>
	<audio src="Sam Tsui、Alex Goot - Love Me Like You Do.mp3" id="myaudio" autoplay="autoplay"></audio>	
    <div class="swiper-container">
    	<span class="iconfont icon-iconfontbiaozhunmoban01" id="iconfont"></span>
      	<div class="swiper-wrapper">
        	<div class="swiper-slide slide1">

        	</div>
	        <div class="swiper-slide slide2">

	        </div>
	        <div class="swiper-slide slide3">

	        </div>
	        <div class="swiper-slide slide4">

	        </div>
	        <div class="swiper-slide slide5">

	        </div>
	        <div class="swiper-slide slide6">

	        </div>
	        <div class="swiper-slide slide7">

	        </div>	        
	    </div>
    </div>
</body>
<script type="text/javascript">
	seajs.use(["resume"],function (app) {
		app.init();
	})
	
//$("#iconfont").on("tap", function() {
//	var status = $("#myaudio")[0].paused;
//	if (status) {
//		$("#myaudio")[0].play();
//		$(this).css("-webkit-animation","rotate 2s infinite linear")
//	}else{
//		$("#myaudio")[0].pause();
//		$(this).css("-webkit-animation","none")
//	}	
//})
//var myswiper = new Swiper(".swiper-container",{
//	direction: 'vertical',
// 	resistanceRatio: 0,
// 	paginationClickable: true,
//  onInit: function(swiper) {
//    p.swiperAnimateCache(swiper);
//    p.swiperAnimate(swiper);
//  },
// // //表示滑动结束的时候触发的回调函数
// // // onSlideChangeStart:function(swiper){
// // //      //swiper表示滑到当前页的slide
// // //      //activeIndex 每一个slide的活动索引，不能用loop循环
// // // },
//  onSlideChangeEnd: function(swiper) {
//    //previousIndex 表示滑动的前一页
//    p.swiperAnimate(swiper);
//  }
//})
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>;
  wx.config({
    debug: true,   //表示开启调试模式
    appId: '<?php echo $signPackage["appId"];?>',  //必填，公众号的唯一标识
    timestamp: <?php echo $signPackage["timestamp"];?>,
    // 必填，生成签名的时间戳
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    // 必填，生成签名的随机串
    signature: '<?php echo $signPackage["signature"];?>',
    // 必填，签名
    jsApiList: [
        'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
      //必填，需要使用的JS接口列表，所有JS接口列表见附录2
  });
  wx.ready(function () {

  })
</script>

</html>
