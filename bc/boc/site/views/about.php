<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <div class="about-banner" style="background: url('<?php echo static_file('web/img/about_banner.jpg'); ?>') center no-repeat;">
	    	<div class="con">
	    		<div class="tits js-m">关于我们</div>
	    		<div class="line js-m"></div>
	    		<div class="tit js-m">about us</div>
	    	</div>
	    	<?php include_once VIEWS.'inc/about_nav.php'; ?>
	    </div>
	    <div class="about">
	    	<div class="title js-m f-cb">
	    		<span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
	    		<div class="tits">
	    			<div class="t">公司简介</div>
	    			<div class="t1">Company Profile</div>
	    		</div>
	    		<span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
	    	</div>
	    	<div class="content">
	    		<div class="box f-cb">
	    			<div class="con left">
	    				<div class="tits js-m">走进通联</div>
	    				<div class="conn js-m">
	    					<div class="t">巧合的是：香港回归之日，即是我们成都通联公司成立之时。历经二十个春秋， 一路走来，公司从无到有，从小到大，充满艰辛与辉煌。而今，我们正将这条路拓宽、拓远……</div>
	    					<div class="t">通联公司是集设计、研发、生产、施工为一体的“仿木产品”、“仿石产品”专业性公司，全力以赴服务于市政建设、房产建筑、园林景观。公司座落于交通便利的成都三环路十陵立交旁（东洪路中段319号），分公司位于金堂淮口工业园区现代大道，经营场地55.55亩。历经十七载的磨砺，蕴育出一支117人的团队。团队与实践经验才是通联最大的一笔财富，通联人依然是一块平凡的基石，为人们的生活、工作提供着便利。</div>
	    				</div>
	    			</div>
	    			<div class="pic right js-m"><img width="100%" src="<?php echo static_file('web/img/about_pic1.png'); ?>"></div>
	    		</div>
	    		<div class="box f-cb">
	    			<div class="con right">
	    				<div class="tits js-m">心心相通，心心相联</div>
	    				<div class="conn js-m">
	    					<div class="t">“通联”：心心相通，心心相联，与同仁，与客户达成共识，心灵相通。通联人没有张扬的个性，只有勤勤恳恳的乐业精神，不求最大，只求最精：精兵强将——精美的产品——经典的工程——经典的品牌。客户的一丝丝微笑，便是通联人最大的骄傲。</div>
	    					<div class="t">何谓仿木，似木非木是仿木。它是木材的仿制品，从表面纹理看，它就是我们自然界的木材，它是可以替代天然木材的新型复合材料，节能、生态、环保，运用广泛：栏杆、花箱、花架、地板、桌椅……我们现专注于“仿木产品”、“仿石产品”的开发与创新，产品质量均严格按“ISO9001：2008”质量管理体系认证标准执行。不断适应社会、市场之需求,根据自己的专业，在项目上有所为，有所不为。凭德做人，厚德载物；凭力做事，自强不息。心诚笃叩，传承佛语论道，接善源，纳百川之智。团结拼搏、精心打造、构筑经典；安全生产、与时俱进、共创通联:和谐的通联——创新的通联——发展的通联——百年的通联。</div>
	    				</div>
	    			</div>
	    			<div class="pic left js-m"><img width="100%" src="<?php echo static_file('web/img/about_pic2.png'); ?>"></div>
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
	$('.mnav a').eq(0).addClass('on');
})
</script>
</body>
</html>