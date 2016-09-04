define(function(require, exports, module) {
	//依赖需要的模块 require
	require("swiper-3.3.1.min");
	var q = require("swiper.animate1.0.2.min");
	require("zepto.min");
	//通过 exports 对外提供接口
	var p = {
		_init: function() {
			p.swiperInit();
			p.pau();
		},
		swiperInit: function() {
			var myswiper = new Swiper(".swiper-container", {
				direction: 'vertical',
				resistanceRatio: 0,
				paginationClickable: true,
				onInit: function(swiper) {
					q.swiperAnimateCache(swiper);
					q.swiperAnimate(swiper);
				},
				// //表示滑动结束的时候触发的回调函数
				// // onSlideChangeStart:function(swiper){
				// //      //swiper表示滑到当前页的slide
				// //      //activeIndex 每一个slide的活动索引，不能用loop循环
				// // },
				onSlideChangeEnd: function(swiper) {
					//previousIndex 表示滑动的前一页
					q.swiperAnimate(swiper);
				}
			})
		},
		pau: function() {
			$("#iconfont").on("tap", function() {
				var status = $("#myaudio")[0].paused;
				if(status) {
					$("#myaudio")[0].play();
					$(this).css("-webkit-animation", "rotate 2s infinite linear")
				} else {
					$("#myaudio")[0].pause();
					$(this).css("-webkit-animation", "none")
				}
			})
		}		
	}
	module.exports = {init:p._init}
})
