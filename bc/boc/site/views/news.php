<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/news_nav.php'; ?>
	    <div class="news">
	    	<div class="title js-m f-cb">
	    		<span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
	    		<div class="tits">
	    			<div class="t">公司动态</div>
	    			<div class="t1">Company News</div>
	    		</div>
	    		<span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
	    	</div>
	    	<div class="list">
	    		<ul class="f-cb">

                    <?php foreach( $news as $v){  ?>
	    			<li class="js-m">
	    				<a href="<?php echo site_url('news/info/'.$v["id"]); ?>">
	    					<div class="pic">
                                <img width="100%" src="<?php if(is_null($v['thumb'])){echo  static_file('web/img/news_pic2.jpg'); }else{ echo UPLOAD_URL.$v['thumb'] ;};?>">
                            </div>
	    					<div class="con">
	    						<div class="tits"><?php  echo $v['title'] ; ?></div>
	    						<div class="tit"><?php  echo $v['intro']; ?></div>
	    						<div class="tit1 f-cb">
	    							<div class="time"><?php echo date("Y-m-d ",$v["timeline"]); ?></div>
	    							<div class="more">more</div>
	    						</div>
	    					</div>
	    				</a>
	    			</li>
                    <?php }  ?>

<!--	    			<li class="js-m">-->
<!--	    				<a href="--><?php //echo site_url('news/info'); ?><!--">-->
<!--	    					<div class="pic"><img width="100%" src="--><?php //echo static_file('web/img/news_pic2.jpg'); ?><!--"></div>-->
<!--	    					<div class="con">-->
<!--	    						<div class="tits">生活小贴士：银行卡新政来了，ATM机转账……</div>-->
<!--	    						<div class="tit">12月1日银行新规，取消银行卡漫游费调整转账方式和转账时效。日前……</div>-->
<!--	    						<div class="tit1 f-cb">-->
<!--	    							<div class="time">2016-12-09</div>-->
<!--	    							<div class="more">more</div>-->
<!--	    						</div>-->
<!--	    					</div>-->
<!--	    				</a>-->
<!--	    			</li>-->
<!--	    			<li class="js-m">-->
<!--	    				<a href="--><?php //echo site_url('news/info'); ?><!--">-->
<!--	    					<div class="pic"><img width="100%" src="--><?php //echo static_file('web/img/news_pic3.jpg'); ?><!--"></div>-->
<!--	    					<div class="con">-->
<!--	    						<div class="tits">竞选稿——争做领路人</div>-->
<!--	    						<div class="tit">我是千厢8队的村民——黄祖杰，至今家里还有一亩三分地，我感恩乡土对我的哺育。</div>-->
<!--	    						<div class="tit1 f-cb">-->
<!--	    							<div class="time">2016-12-09</div>-->
<!--	    							<div class="more">more</div>-->
<!--	    						</div>-->
<!--	    					</div>-->
<!--	    				</a>-->
<!--	    			</li>-->
<!--	    			<li class="js-m">-->
<!--	    				<a href="--><?php //echo site_url('news/info'); ?><!--">-->
<!--	    					<div class="pic"><img width="100%" src="--><?php //echo static_file('web/img/news_pic4.jpg'); ?><!--"></div>-->
<!--	    					<div class="con">-->
<!--	    						<div class="tits">通联的生态屋</div>-->
<!--	    						<div class="tit">尊敬的各位领导，亲爱的各位委员，大家下午好！ 我是成都通联市政工程……</div>-->
<!--	    						<div class="tit1 f-cb">-->
<!--	    							<div class="time">2016-12-09</div>-->
<!--	    							<div class="more">more</div>-->
<!--	    						</div>-->
<!--	    					</div>-->
<!--	    				</a>-->
<!--	    			</li>-->
<!--	    			<li class="js-m">-->
<!--	    				<a href="--><?php //echo site_url('news/info'); ?><!--">-->
<!--	    					<div class="pic"><img width="100%" src="--><?php //echo static_file('web/img/news_pic5.jpg'); ?><!--"></div>-->
<!--	    					<div class="con">-->
<!--	    						<div class="tits">G20杭州峰会：“中国方案”备受期待</div>-->
<!--	    						<div class="tit">北京８月２５日电 二十国集团（Ｇ２０）杭州峰会将于９月召开……</div>-->
<!--	    						<div class="tit1 f-cb">-->
<!--	    							<div class="time">2016-12-09</div>-->
<!--	    							<div class="more">more</div>-->
<!--	    						</div>-->
<!--	    					</div>-->
<!--	    				</a>-->
<!--	    			</li>-->
<!--	    			<li class="js-m">-->
<!--	    				<a href="--><?php //echo site_url('news/info'); ?><!--">-->
<!--	    					<div class="pic"><img width="100%" src="--><?php //echo static_file('web/img/news_pic6.jpg'); ?><!--"></div>-->
<!--	    					<div class="con">-->
<!--	    						<div class="tits">两点感受 一点建议，政协小组讨论会上……</div>-->
<!--	    						<div class="tit">尊敬的各位领导，亲爱的各位委员，大家下午好！ 我是成都通联市政工程……</div>-->
<!--	    						<div class="tit1 f-cb">-->
<!--	    							<div class="time">2016-12-09</div>-->
<!--	    							<div class="more">more</div>-->
<!--	    						</div>-->
<!--	    					</div>-->
<!--	    				</a>-->
<!--	    			</li>-->
	    		</ul>
	    		<a href="javascript:;" class="click-more">more</a>
	    	</div>
	    </div>
	    <?php include_once VIEWS.'inc/footer.php'; ?>
    </div>
<?php
	echo static_file('web/js/main.js');
?>
<script>
$(function(){
	$('.header .header-new .nav a').eq(2).addClass('on');

	var w=$('.list ul li').width();
	$('.list ul li a .pic').css('height',w*(277/370));

	$(window).resize(function(){
		w=$('.list ul li').width();
		$('.list ul li a .pic').css('height',w*(277/370));
	})


	$('.click-more').click(function(){
		var Html = $.ajax({
		    url : '<?php echo site_url('ajax/ajax_news')?>',
		 	success:function(msg){
			    var _str = $.parseHTML(msg, document, true);
			    $('.list ul').append(_str);

			    $('.list ul li a .pic').css('height',w*(277/370));
		    }
		});

	})

})
</script>
</body>
</html>