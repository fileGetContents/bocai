<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/service_nav.php'; ?>
	    <div class="ensure">
	    	<div class="title js-m f-cb">
	    		<span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
	    		<div class="tits">
	    			<div class="t">服务保证</div>
	    			<div class="t1">Service guarantee</div>
	    		</div>
	    		<span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
	    	</div>
	    	<div class="content">
	    		<div class="tits js-m">六大部门支持，助您无忧经营</div>
	    		<div class="tit js-m">Six departments support</div>
	    		<div class="list">
	    			<ul class="f-cb">
	    				<li>
	    					<img width="100%" src="<?php echo static_file('web/img/service_pic1.jpg'); ?>">
	    					<div class="bg"></div>
	    					<div class="con">
	    						<div class="con-new">
	    							<div class="t">销售部</div>
	    							<div class="t1">团队与实践经验才是通联最大的一笔财富，通联人依然是一块平凡的基石，为人们的生活、工作提供着便利。</div>
	    						</div>
	    					</div>
	    				</li>
	    				<li>
	    					<img width="100%" src="<?php echo static_file('web/img/service_pic2.jpg'); ?>">
	    					<div class="bg"></div>
	    					<div class="con">
	    						<div class="con-new">
	    							<div class="t">客户部</div>
	    							<div class="t1">为你提供360度全方位订单跟踪服务，在通联仿木您就是主人！</div>
	    						</div>
	    					</div>
	    				</li>
	    				<li>
	    					<img width="100%" src="<?php echo static_file('web/img/service_pic3.jpg'); ?>">
	    					<div class="bg"></div>
	    					<div class="con">
	    						<div class="con-new">
	    							<div class="t">产品部</div>
	    							<div class="t1">公司现专注于“仿木产品”、“仿石”、“GRC构件”的开发与创新，产品质量均严格按“ISO9001：2008”质量管理体系认证标准执行。</div>
	    						</div>
	    					</div>
	    				</li>
	    				<li>
	    					<img width="100%" src="<?php echo static_file('web/img/service_pic4.jpg'); ?>">
	    					<div class="bg"></div>
	    					<div class="con">
	    						<div class="con-new">
	    							<div class="t">终端设计部</div>
	    							<div class="t1">通联人没有张扬的个性，只有勤勤恳恳的乐业精神，不求最大，只求最精</div>
	    						</div>
	    					</div>
	    				</li>
	    				<li>
	    					<img width="100%" src="<?php echo static_file('web/img/service_pic5.jpg'); ?>">
	    					<div class="bg"></div>
	    					<div class="con">
	    						<div class="con-new">
	    							<div class="t">市场部</div>
	    							<div class="t1">公司除常规的元旦、315、国庆促销支持外，全年提供各种促销支持并且精心策划到位！</div>
	    						</div>
	    					</div>
	    				</li>
	    				<li>
	    					<img width="100%" src="<?php echo static_file('web/img/service_pic5.jpg'); ?>">
	    					<div class="bg"></div>
	    					<div class="con">
	    						<div class="con-new">
	    							<div class="t">售后部</div>
	    							<div class="t1">2小时售后问题处理回复制度，极速处理让您省心、省时，降低售后成本</div>
	    						</div>
	    					</div>
	    				</li>
	    			</ul>
	    		</div>
	    	</div>
	    </div>
	    <?php include_once VIEWS.'inc/footer.php'; ?>
    </div>
<?php
	echo static_file('web/js/main.js');
?>
<script>
$(function(){
	$('.header .header-new .nav a').eq(5).addClass('on');
	$('.mnav a').eq(1).addClass('on');


})
</script>
</body>
</html>
