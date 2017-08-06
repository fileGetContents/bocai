<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/service_nav.php'; ?>
	    <div class="service">
	    	<div class="title js-m f-cb">
	    		<span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
	    		<div class="tits">
	    			<div class="t">服务流程</div>
	    			<div class="t1">Service Process</div>
	    		</div>
	    		<span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
	    	</div>
	    	<div class="content">
	    		<ul class="u f-cb">
	    			<li>
	    				<div class="num">01</div>
	    				<p>投资人自评</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">02</div>
	    				<p>参观形象店</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">03</div>
	    				<p>洽谈并签意向合同书</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">04</div>
	    				<p>店铺地址评估</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">05</div>
	    				<p>正式合同签约授权</p>
	    			</li>
	    		</ul>
	    		<ul class="u1 f-cb">
	    			<li>
	    				<div class="num">06</div>
	    				<p>店面筹建</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">07</div>
	    				<p>团队组建</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">08</div>
	    				<p>人员培训</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">09</div>
	    				<p>开业爆破</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">10</div>
	    				<p>正常运营</p>
	    			</li>
	    			<span></span>
	    			<li>
	    				<div class="num">11</div>
	    				<p>后期服务</p>
	    			</li>
	    		</ul>
	    	</div>
	    	<div class="content-m">
	    		<ul class="f-cb">
	    			<li>
	    				<div class="num">01</div>
	    				<p>投资人自评</p>
	    			</li>
	    			<li>
	    				<div class="num">02</div>
	    				<p>参观形象店</p>
	    			</li>
	    			<li>
	    				<div class="num">03</div>
	    				<p>洽谈并签意向合同书</p>
	    			</li>
	    			<li>
	    				<div class="num">04</div>
	    				<p>店铺地址评估</p>
	    			</li>
	    			<li>
	    				<div class="num">05</div>
	    				<p>正式合同签约授权</p>
	    			</li>
	    			<li>
	    				<div class="num">06</div>
	    				<p>店面筹建</p>
	    			</li>
	    			<li>
	    				<div class="num">07</div>
	    				<p>团队组建</p>
	    			</li>
	    			<li>
	    				<div class="num">08</div>
	    				<p>人员培训</p>
	    			</li>
	    			<li>
	    				<div class="num">09</div>
	    				<p>开业爆破</p>
	    			</li>
	    			<li>
	    				<div class="num">10</div>
	    				<p>正常运营</p>
	    			</li>
	    			<li>
	    				<div class="num">11</div>
	    				<p>后期服务</p>
	    			</li>
	    		</ul>
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
	$('.mnav a').eq(0).addClass('on');


})
</script>
</body>
</html>
