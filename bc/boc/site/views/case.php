<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/case_nav.php'; ?>
	    <div class="case">
	    	<div class="title js-m f-cb">
	    		<div class="tits js-m">经典仿木工程<span>Classic imitation wood works</span></div>
	    	</div>
	    	<div class="list">
	    		<ul class="f-cb">
	    			<li class="js-m">
	    				<a href="<?php echo site_url('case/info'); ?>">
	    					<div class="pic"><img width="100%" src="<?php echo static_file('web/img/case_pic1.jpg'); ?>"></div>
	    					<div class="con">
	    						<div class="t">案例名称一</div>
	    						<div class="t1">曾无数次幻想我梦中家园景象?那里有清脆的绿萝，那里有新鲜的空气，那里有温暖的</div>
	    						<div class="more">more</div>
	    					</div>
	    				</a>
	    			</li>
	    			<li class="js-m">
	    				<a href="<?php echo site_url('case/info'); ?>">
	    					<div class="pic"><img width="100%" src="<?php echo static_file('web/img/case_pic2.jpg'); ?>"></div>
	    					<div class="con">
	    						<div class="t">案例名称二</div>
	    						<div class="t1">曾无数次幻想我梦中家园景象?那里有清脆的绿萝，那里有新鲜的空气，那里有温暖的</div>
	    						<div class="more">more</div>
	    					</div>
	    				</a>
	    			</li>
	    			<li class="js-m">
	    				<a href="<?php echo site_url('case/info'); ?>">
	    					<div class="pic"><img width="100%" src="<?php echo static_file('web/img/case_pic3.jpg'); ?>"></div>
	    					<div class="con">
	    						<div class="t">案例名称三</div>
	    						<div class="t1">曾无数次幻想我梦中家园景象?那里有清脆的绿萝，那里有新鲜的空气，那里有温暖的</div>
	    						<div class="more">more</div>
	    					</div>
	    				</a>
	    			</li>
	    			<li class="js-m">
	    				<a href="<?php echo site_url('case/info'); ?>">
	    					<div class="pic"><img width="100%" src="<?php echo static_file('web/img/case_pic1.jpg'); ?>"></div>
	    					<div class="con">
	    						<div class="t">案例名称四</div>
	    						<div class="t1">曾无数次幻想我梦中家园景象?那里有清脆的绿萝，那里有新鲜的空气，那里有温暖的</div>
	    						<div class="more">more</div>
	    					</div>
	    				</a>
	    			</li>
	    		</ul>
	    	</div>
	    	<a href="javascripr:;" class="click-more">more</a>
	    </div>
	    <?php include_once VIEWS.'inc/footer.php'; ?>
    </div>
<?php
	echo static_file('web/js/main.js');
?>
<script>
$(function(){
	$('.header .header-new .nav a').eq(4).addClass('on');

	var w=$('.list ul li').width();
	$('.list ul li a .pic').css('height',w*(320/548));

	$(window).resize(function(){
		w=$('.list ul li').width();
		$('.list ul li a .pic').css('height',w*(320/548));
	});


	$('.click-more').click(function(){
		var Html = $.ajax({
		    url : '<?php echo site_url('ajax/ajax_case')?>',
		 	success:function(msg){
			    var _str = $.parseHTML(msg, document, true);
			    $('.list ul').append(_str);
			    $('.list ul li a .pic').css('height',w*(320/548));
		    }
		});
		
	})
})
</script>
</body>
</html>