<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/about_nav.php'; ?>
	    <div class="honor">
	    	<div class="title js-m f-cb">
	    		<span class="fl"><img width="100%" src="<?php echo static_file('web/img/index_line1_left.png'); ?>"></span>
	    		<div class="tits">
	    			<div class="t">资质荣誉</div>
	    			<div class="t1">Qualification Honors</div>
	    		</div>
	    		<span class="fr"><img width="100%" src="<?php echo static_file('web/img/index_line1_right.png'); ?>"></span>
	    	</div>
	    	<div class="content">
	    		<div class="list">
	    			<ul id="masonry">
	    				<li class="js-m">
	    					<a href="<?php echo static_file('web/img/honor_pic1.jpg'); ?>">
	    						<div class="pic"><img width="100%" src="<?php echo static_file('web/img/honor_pic1.jpg'); ?>"></div>
	    						<p>安全生产许可证</p>
	    					</a>
	    				</li>
	    				<li class="js-m">
	    					<a href="<?php echo static_file('web/img/honor_pic2.jpg'); ?>">
	    						<div class="pic"><img width="100%" src="<?php echo static_file('web/img/honor_pic2.jpg'); ?>"></div>
	    						<p>组织机构代码证</p>
	    					</a>
	    				</li>
	    				<li class="js-m">
	    					<a href="<?php echo static_file('web/img/honor_pic2.jpg'); ?>">
	    						<div class="pic"><img width="100%" src="<?php echo static_file('web/img/honor_pic2.jpg'); ?>"></div>
	    						<p>税务登记证</p>
	    					</a>
	    				</li>
	    				<li class="js-m">
	    					<a href="<?php echo static_file('web/img/honor_pic2.jpg'); ?>">
	    						<div class="pic"><img width="100%" src="<?php echo static_file('web/img/honor_pic2.jpg'); ?>"></div>
	    						<p>组织机构代码证</p>
	    					</a>
	    				</li>
	    				<li class="js-m">
	    					<a href="<?php echo static_file('web/img/honor_pic1.jpg'); ?>">
	    						<div class="pic"><img width="100%" src="<?php echo static_file('web/img/honor_pic1.jpg'); ?>"></div>
	    						<p>安全生产许可证</p>
	    					</a>
	    				</li>
	    				<li class="js-m">
	    					<a href="<?php echo static_file('web/img/honor_pic2.jpg'); ?>">
	    						<div class="pic"><img width="100%" src="<?php echo static_file('web/img/honor_pic2.jpg'); ?>"></div>
	    						<p>税务登记证</p>
	    					</a>
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
	$('.header .header-new .nav a').eq(1).addClass('on');
	$('.mnav a').eq(2).addClass('on');
	$(".list ul li a").lightBox();


	var $container = $('#masonry');
    $container.imagesLoaded(function(){
        $container.masonry({
            itemSelector: '.list ul li',
            isAnimated: true
        });
    });
    
})
</script>
</body>
</html>