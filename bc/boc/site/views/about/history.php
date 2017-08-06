<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/about_nav.php'; ?>
	    <div class="history">
	    	<div class="title js-m f-cb">
	    		<span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
	    		<div class="tits">
	    			<div class="t">发展历程</div>
	    			<div class="t1">development path</div>
	    		</div>
	    		<span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
	    	</div>
	    	<div class="content">
	    		<div class="list">
	    			<ul>
	    				<li class="f-cb js-m">
	    					<div class="pic">
	    						<img width="100%" src="<?php echo static_file('web/img/history_pic1.jpg'); ?>">
	    						<div class="bg"></div>
	    					</div>
	    					<div class="con">
	    						<div class="year"><span>1997</span>年</div>
	    						<div class="conn">巧合的是：香港回归之日，即是我们成都通联公司成立之时。历经二十个春秋， 一路走来，公司从无到有，从小到大，充满艰辛与辉煌。而今，我们正将这条路拓宽、拓远……</div>
	    					</div>
	    					<div class="yuan"></div>
	    				</li>
	    				<li class="f-cb js-m">
	    					<div class="pic">
	    						<img width="100%" src="<?php echo static_file('web/img/history_pic2.jpg'); ?>">
	    						<div class="bg"></div>
	    					</div>
	    					<div class="con">
	    						<div class="year"><span>2004</span>年</div>
	    						<div class="conn">公司座落于交通便利的成都三环路十陵立交旁（东洪路中段319号），分公司位于金堂淮口工业园区现代大道，经营场地55.55亩。历经十七载的磨砺，蕴育出一支117人的团队。</div>
	    					</div>
	    					<div class="yuan"></div>
	    				</li>
	    				<li class="f-cb js-m">
	    					<div class="pic">
	    						<img width="100%" src="<?php echo static_file('web/img/history_pic3.jpg'); ?>">
	    						<div class="bg"></div>
	    					</div>
	    					<div class="con">
	    						<div class="year"><span>2009</span>年</div>
	    						<div class="conn">“通联”：心心相通，心心相联，与同仁，与客户达成共识，心灵相通。通联人没有张扬的个性，只有勤勤恳恳的乐业精神，不求最大，只求最精：精兵强将——精美的产品——经典的工程——经典的品牌。</div>
	    					</div>
	    					<div class="yuan"></div>
	    				</li>
	    				<li class="f-cb js-m">
	    					<div class="pic">
	    						<img width="100%" src="<?php echo static_file('web/img/history_pic4.jpg'); ?>">
	    						<div class="bg"></div>
	    					</div>
	    					<div class="con">
	    						<div class="year"><span>2013</span>年</div>
	    						<div class="conn">公司座落于交通便利的成都三环路十陵立交旁（东洪路中段319号），分公司位于金堂淮口工业园区现代大道，经营场地55.55亩。历经十七载的磨砺，蕴育出一支117人的团队。</div>
	    					</div>
	    					<div class="yuan"></div>
	    				</li>
	    				<li class="f-cb js-m">
	    					<div class="pic">
	    						<img width="100%" src="<?php echo static_file('web/img/history_pic5.jpg'); ?>">
	    						<div class="bg"></div>
	    					</div>
	    					<div class="con">
	    						<div class="year"><span>2017</span>年</div>
	    						<div class="conn">“通联”：心心相通，心心相联，与同仁，与客户达成共识，心灵相通。通联人没有张扬的个性，只有勤勤恳恳的乐业精神，不求最大，只求最精：精兵强将——精美的产品——经典的工程——经典的品牌。</div>
	    					</div>
	    					<div class="yuan"></div>
	    				</li>
	    			</ul>
	    			<div class="line-box">
	    				<span class="line"></span>
	    				<span class="point"></span>
	    			</div>
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
	$('.header .header-new .nav a').eq(1).addClass('on');
	$('.mnav a').eq(3).addClass('on');


    
})
</script>
</body>
</html>