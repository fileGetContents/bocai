$(function(){
	var w=$(window).width();
	var i=$(".index-banner ul li").length;
	for(ii=0;ii<i;ii++){
		$(".index-banner .btns").append("<span></span>");
	}
	
	if(w<1025){
    	$('.index-banner').addClass('on');
    }else{
    	$('.index-banner').removeClass('on');
    }

	$(".index-banner ul li").eq(0).css({opacity:1,zIndex:1});
	$('.index-banner ul li').eq(0).find('.con .tits').animate({
		top: 0,
		opacity: 1
	},200,function(){
		$('.index-banner ul li').eq(0).find('.con .tit').animate({
			top: 0,
			opacity: 1
		},200,function(){
			$('.index-banner ul li').eq(0).find('.con .line').animate({
				top: 0,
				opacity: 1
			},200,function(){
				$('.index-banner ul li').eq(0).find('.con .tit2').animate({
					top: 0,
					opacity: 1
				},200,function(){
					$('.index-banner ul li').eq(0).find('.con .tit1').animate({
						top: 0,
						opacity: 1
					},200)
				})
			})
		})
	});
	$(".index-banner .btns span").eq(0).addClass("on");

	$(".index-banner .btns span").click(function(){
		var index=$(this).index();
		$(this).addClass("on").siblings().removeClass("on");

		$('.index-banner ul li .con .tits,.index-banner ul li .con .tit,.index-banner ul li .con .line,.index-banner ul li .con .tit2,.index-banner ul li .con .tit1').css({opacity:0,top:50});

		$(".index-banner ul li").eq(index).animate({
			opacity:1,
			zIndex:1
		},600,function(){
			$('.index-banner ul li').eq(index).find('.con .tits').animate({
				top: 0,
				opacity: 1
			},200,function(){
				$('.index-banner ul li').eq(index).find('.con .tit').animate({
					top: 0,
					opacity: 1
				},200,function(){
					$('.index-banner ul li').eq(index).find('.con .line').animate({
						top: 0,
						opacity: 1
					},200,function(){
						$('.index-banner ul li').eq(index).find('.con .tit2').animate({
							top: 0,
							opacity: 1
						},200,function(){
							$('.index-banner ul li').eq(index).find('.con .tit1').animate({
								top: 0,
								opacity: 1
							},200)
						})
					})
				})
			});
		}).siblings().animate({opacity:0,zIndex:0},600);
	})

	touch.on($(".index-banner.on"), "swipeleft", function(){
		var index=$(".index-banner .btns span.on").index();
		var last=$(".index-banner .btns span:last").index();
		if(index==0){
			index=last;
		}else{
			index=index-1;
		}
		$('.index-banner .btns span').eq(index).addClass("on").siblings().removeClass("on");

		$('.index-banner ul li .con .tits,.index-banner ul li .con .tit,.index-banner ul li .con .line,.index-banner ul li .con .tit2,.index-banner ul li .con .tit1').css({opacity:0,top:50});

		$(".index-banner ul li").eq(index).animate({
			opacity:1,
			zIndex:1
		},600,function(){
			$('.index-banner ul li').eq(index).find('.con .tits').animate({
				top: 0,
				opacity: 1
			},200,function(){
				$('.index-banner ul li').eq(index).find('.con .tit').animate({
					top: 0,
					opacity: 1
				},200,function(){
					$('.index-banner ul li').eq(index).find('.con .line').animate({
						top: 0,
						opacity: 1
					},200,function(){
						$('.index-banner ul li').eq(index).find('.con .tit2').animate({
							top: 0,
							opacity: 1
						},200,function(){
							$('.index-banner ul li').eq(index).find('.con .tit1').animate({
								top: 0,
								opacity: 1
							},200)
						})
					})
				})
			});
		}).siblings().animate({opacity:0,zIndex:0},600);
	})

	touch.on($(".index-banner.on"), "swiperight", function(){
		var index=$(".index-banner .btns span.on").index();
		var last=$(".index-banner .btns span:last").index();
		if(index==last){
			index=0;
		}else{
			index=index+1;
		}
		$('.index-banner .btns span').eq(index).addClass("on").siblings().removeClass("on");

		$('.index-banner ul li .con .tits,.index-banner ul li .con .tit,.index-banner ul li .con .line,.index-banner ul li .con .tit2,.index-banner ul li .con .tit1').css({opacity:0,top:50});

		$(".index-banner ul li").eq(index).animate({
			opacity:1,
			zIndex:1
		},600,function(){
			$('.index-banner ul li').eq(index).find('.con .tits').animate({
				top: 0,
				opacity: 1
			},200,function(){
				$('.index-banner ul li').eq(index).find('.con .tit').animate({
					top: 0,
					opacity: 1
				},200,function(){
					$('.index-banner ul li').eq(index).find('.con .line').animate({
						top: 0,
						opacity: 1
					},200,function(){
						$('.index-banner ul li').eq(index).find('.con .tit2').animate({
							top: 0,
							opacity: 1
						},200,function(){
							$('.index-banner ul li').eq(index).find('.con .tit1').animate({
								top: 0,
								opacity: 1
							},200)
						})
					})
				})
			});
		}).siblings().animate({opacity:0,zIndex:0},600);
	})

	function auto(){
		var index=$(".index-banner .btns span.on").index();
		var last=$(".index-banner .btns span:last").index();
		if(index==last){
			index=0;
		}else{
			index=index+1;
		}
		$(".index-banner .btns span").eq(index).addClass("on").siblings().removeClass("on");
		$('.index-banner ul li .con .tits,.index-banner ul li .con .tit,.index-banner ul li .con .line,.index-banner ul li .con .tit2,.index-banner ul li .con .tit1').css({opacity:0,top:50});
		$(".index-banner ul li").eq(index).animate({opacity:1,zIndex:1},600,function(){
			$('.index-banner ul li').eq(index).find('.con .tits').animate({
				top: 0,
				opacity: 1
			},200,function(){
				$('.index-banner ul li').eq(index).find('.con .tit').animate({
					top: 0,
					opacity: 1
				},200,function(){
					$('.index-banner ul li').eq(index).find('.con .line').animate({
						top: 0,
						opacity: 1
					},200,function(){
						$('.index-banner ul li').eq(index).find('.con .tit2').animate({
							top: 0,
							opacity: 1
						},200,function(){
							$('.index-banner ul li').eq(index).find('.con .tit1').animate({
								top: 0,
								opacity: 1
							},200)
						})
					})
				})
			});
		}).siblings().animate({opacity:0,zIndex:0},600);
	}

	var fun;
    $(".index-banner").hover(function(){
        clearInterval(fun);
    },function(){
        fun=setInterval(auto,6000)
    }).trigger("mouseleave");


    //首页产品轮播
    var $List=$('.index-product .product-new .list');
    $(window).resize(function(){
    	w=$(window).width();
	    if(w>=900&&w<1250){
	    	nn=3;
	    	liW=$List.find('ul li').width()+20;
	    }else if(w>=414&&w<900){
	    	nn=2;
	    	pW=w*0.95*0.95*0.48;
	    	$List.find('ul li').css('width',pW);
	    	liW=pW+w*0.95*0.95*0.04;
	    	$List.find('ul li').css('marginRight',(w*0.95*0.95*0.04)+'px');
	    }else if(w<414){
	    	nn=1;
	    	pW=w*0.95*0.95;
	    	$List.find('ul li').css('width',pW);
	    	liW=pW+w*0.95*0.95*0.04;
	    	$List.find('ul li').css('marginRight',(w*0.95*0.95*0.04)+'px');
	    }else{
	    	nn=4;
	    	liW=$List.find('ul li').width()+33;
	    }
	    if(w<1025){
	    	$List.addClass('on');
	    	$('.index-banner').addClass('on');
	    }else{
	    	$List.removeClass('on');
	    	$('.index-banner').removeClass('on');
	    }
    })
    
    var liW;
    var nn;
    var w=$(window).width();
    if(w>=900&&w<1250){
    	nn=3;
    	liW=$List.find('ul li').width()+20;
    }else if(w>=414&&w<900){
    	nn=2;
    	pW=w*0.95*0.95*0.48;
    	$List.find('ul li').css('width',pW);
    	liW=pW+w*0.95*0.95*0.04;
    	$List.find('ul li').css('marginRight',(w*0.95*0.95*0.04)+'px');
    }else if(w<414){
    	nn=1;
    	pW=w*0.95*0.95;
    	console.log(pW);
    	$List.find('ul li').css('width',pW);
    	liW=pW+w*0.95*0.95*0.04;
    	$List.find('ul li').css('marginRight',(w*0.95*0.95*0.04)+'px');
    }else{
    	nn=4;
    	liW=$List.find('ul li').width()+33;
    }

    if(w<1025){
    	$List.addClass('on');
    }else{
    	$List.removeClass('on');
    }
    
	var n=$List.find('ul li').length;
	
	$List.find('ul').css('width',n*liW);

	
	for(var i=0;i<n-nn+1;i++){
		$List.find('.btns .btns-new').append("<span></span>");
	}
	$List.find('.btns .btns-new span').eq(0).addClass('on');

	$List.find('.btns .prev').click(function(){
		clickPrev();
	});
	$List.find('.btns .next').click(function(){
		clickNext();
	})



	function clickPrev(){
		var index=$List.find('.btns .btns-new span.on').index();
		var last=$List.find('.btns .btns-new span:last').index();
		if(index==0){
			index=last;
		}else{
			index=index-1;
		}
		$List.find('.btns .btns-new span').eq(index).addClass('on').siblings().removeClass('on');
		$List.find('ul').animate({marginLeft: -index*liW},600);
	}
	function clickNext(){
		var index=$List.find('.btns .btns-new span.on').index();
		var last=$List.find('.btns .btns-new span:last').index();
		if(index==last){
			index=0;
		}else{
			index=index+1;
		}
		$List.find('.btns .btns-new span').eq(index).addClass('on').siblings().removeClass('on');
		$List.find('ul').animate({marginLeft: -index*liW},600);
	}

	touch.on($(".index-product .product-new .list.on"), "swipeleft", function(){
		clickNext()
	})

	touch.on($(".index-product .product-new .list.on"), "swiperight", function(){
		clickPrev()
	})


	//手机导航展开
	$(".nav-m ul li .tits").click(function(){
        if($(this).parent().hasClass('curr')){
            $(this).parent().removeClass("curr").find("dl").slideUp();
        }else{
        	$(".nav-m ul li").removeClass("curr").find("dl").slideUp();
            $(this).parent().addClass("curr").find("dl").slideDown(); 
        }
    })

    $('.nav-click').click(function(){
    	if($(this).hasClass('on')){
    		$(this).removeClass('on');
    		$('.nav-m').slideUp();
    	}else{
    		$(this).addClass('on');
    		$('.nav-m').slideDown();
    	}
    })


    $('.js-m,.js-m1,.js-m2,.js-m3').each(function() {
	      var _this = $(this);
	      if ($(window).scrollTop() > _this.offset().top - $(window).height()*0.9) {
	        _this.stop().transition({
	          translate: (0, 0),
	          rotate: 0,
	          scale: 1,
	          opacity: 1,
	          zIndex: 1
	        }, 1000);
	      }
    });

    $(window).scroll(function(){
		$('.js-m,.js-m1,.js-m2,.js-m3').each(function() {
	      	var _this = $(this);
	      	if ($(window).scrollTop() > _this.offset().top - $(window).height()*0.9) {
	        	_this.stop().transition({
		        translate: (0, 0),
		        rotate: 0,
		        scale: 1,
		        opacity: 1,
		        zIndex: 1
	        }, 1000);
	      }
	    });
	});
});