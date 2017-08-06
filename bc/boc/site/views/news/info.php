<!DOCTYPE html>
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>

<html>
<body>
	<div class="main">
	    <?php include_once VIEWS.'inc/header.php'; ?>
	    <?php include_once VIEWS.'inc/news_nav.php'; ?>
	    <div class="news-info">
    		<div class="title f-cb">
    			<div class="tits"><?php echo $place["title"] ;?><span>Company News</span></div>
    			<div class="home">
    				<a href="<?php echo site_url('news'); ?>">新闻中心</a>
    				<span></span>
    				<a href="<?php echo site_url('news'); ?>"><?php echo $news[0]['title'] ?></a>
    			</div>
    		</div>
    		<div class="content">
    			<div class="tits"><?php echo $news[0]['title'] ?></div>
    			<div class="time">发布日期:<?php  echo date( "Y-m-d",$news[0]['timeline']) ;?></div>
    			<div class="con">
					<?php echo  $news[0]["content"]; ?>
    			</div>
    			<div class="paging">
    				<a href="<?php if($page['pre'] == -1){ echo "javascript:;"; }else{ echo site_url("news/info/".$page['pre'] ); } ?>">上一条</a>
    				<a href="<?php if($page['las'] == -1){ echo "javascript:;" ;}else{ echo site_url('news/info/'.$page['las']) ; } ?>">下一条</a>
    				<a href="<?php echo site_url('news'); ?>">返回</a>
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
	$('.header .header-new .nav a').eq(2).addClass('on');
})
</script>
</body>
</html>